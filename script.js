//для карты
// импортируем функцию
import { getMap } from './map.js'

$(document).ready(function(){//запускаем растановку точек после загрузки страницы
  navigator.geolocation.getCurrentPosition(success, error, {
  enableHighAccuracy: true})
});

function success({ coords }) {
  const { latitude, longitude } = coords
  const currentPosition = [latitude, longitude]
  // вызываем функцию, передавая ей текущую позицию и сообщение
  
  let map = getMap(currentPosition, 'You are here');//показывает нашу позицию на карте

  getPoints(latitude, longitude, map);
}

function error({ message }) {
  console.log(message)
}

function getPoints(lat, lon, map){
  var size = 2;
  $.getJSON('http://localhost:8080/data/area', {lat, lon, size}, function(json){//получение с back координаты всех точек
    $.each(json, function(key, val){//расстановка кругов на карте
      let color;
      let fillColor;
      if (val.result === "GOOD"){
        color = "#D9C8EF"; //цвета кругов
        fillColor = "#D9C8EF"
      }else{
        color = "#936AC7"; //цвета кругов
        fillColor = "#936AC7"
      }
      L.circle([val.lat, val.lon], {
        color: color,
        fillColor: fillColor,
        fillOpacity: 0.5,//прозрачность цвета
        radius: 100
    }).addTo(map);  
    })
    
});
}
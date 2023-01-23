
function loginUser(login, password){
    //setTimeout(function(){ console.log("fight NS_BINDING_ABORTED")}, 3000);
    $.getJSON('http://localhost:8080/user/login', {login, password}, function(json){
        $.cookie('user', json, { expires: 7, path: '/*' });
        //window.location.href = '/handling_page.php';
       // setTimeout(function(){
            window.location.href = '/handling_page.php';
         // }, 1000);
    });
    console.log("------------");
}

function registerUser(login, password, name, email){
    $.getJSON('http://localhost:8080/user/registration', {login, password, name, email}, function(json){
        $.cookie('user', json, { expires: 7, path: '/*' });
        console.log(json);
        window.location.href = '/handling_page.php';
    })
}
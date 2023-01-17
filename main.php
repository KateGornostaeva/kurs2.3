<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>kurs</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css">  <!--подключение стилей css -->
        <!--подключение шрифтов -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="main_header">
                <a href = "<?php $name='Map'; $link ='map.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">
                <a href = "<?php $name='Handling'; $link ='handling.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">
                <a href = "<?php $name='About us'; $link ='main.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>
            <div class="main_header">  
                <a href = "<?php $name='Log in'; $link ='login.php'; $current_page=true; echo $link;?>">
                    <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
                </a>
            </div>        
        </header>
        
        <main class="main">
            <h3>Air pollution in different districts of Moscow</h3>
            <p>
                Air pollution has severe health consequences – one third of deaths from stroke, lung cancer and heart disease are attributable 
                to air pollution.
            </p>
            <p>
                Our goal is to give people the opportunity to learn about the state of the air in the area where they live.
            </p>
            <p></p>
            <p>
                Carbon dioxide (CO2): Because of its role as a greenhouse gas it has been described as "the leading pollutant"[87] and 
                "the worst climate pollutant".[88] Carbon dioxide is a natural component of the atmosphere, essential for plant life and 
                given off by the human respiratory system.[89] This question of terminology has practical effects, for example as determining 
                whether the U.S. Clean Air Act is deemed to regulate CO2 emissions.[90] CO2 currently forms about 410 parts per million (ppm) 
                of earth's atmosphere, compared to about 280 ppm in pre-industrial times,[91] and billions of metric tons of CO2 are emitted 
                annually by burning of fossil fuels.[92] CO2 increase in earth's atmosphere has been accelerating.[93]
            </p>
            <p>
                Sulfur oxides (SOx): particularly sulfur dioxide, a chemical compound with the formula SO2. SO2 is produced by volcanoes and 
                in various industrial processes. Coal and petroleum often contain sulfur compounds, and their combustion generates sulfur dioxide. 
                Further oxidation of SO2, usually in the presence of a catalyst such as NO2, forms H2SO4, and thus acid rain is formed. This is 
                one of the causes for concern over the environmental impact of the use of these fuels as power sources.
            </p>
            <p>
                Nitrogen oxides (NOx): Nitrogen oxides, particularly nitrogen dioxide, are expelled from high temperature combustion, and are also 
                produced during thunderstorms by electric discharge. They can be seen as a brown haze dome above or a plume downwind of cities. 
                Nitrogen dioxide is a chemical compound with the formula NO2. It is one of several nitrogen oxides. One of the most prominent air 
                pollutants, this reddish-brown toxic gas has a characteristic sharp, biting odor.
            </p>    
            <p>
                Carbon dioxide (CO2): Because of its role as a greenhouse gas it has been described as "the leading pollutant"[87] and 
                "the worst climate pollutant".[88] Carbon dioxide is a natural component of the atmosphere, essential for plant life and 
                given off by the human respiratory system.[89] This question of terminology has practical effects, for example as determining 
                whether the U.S. Clean Air Act is deemed to regulate CO2 emissions.[90] CO2 currently forms about 410 parts per million (ppm) 
                of earth's atmosphere, compared to about 280 ppm in pre-industrial times,[91] and billions of metric tons of CO2 are emitted 
                annually by burning of fossil fuels.[92] CO2 increase in earth's atmosphere has been accelerating.[93]
            </p>
            <p>
                Sulfur oxides (SOx): particularly sulfur dioxide, a chemical compound with the formula SO2. SO2 is produced by volcanoes and 
                in various industrial processes. Coal and petroleum often contain sulfur compounds, and their combustion generates sulfur dioxide. 
                Further oxidation of SO2, usually in the presence of a catalyst such as NO2, forms H2SO4, and thus acid rain is formed. This is 
                one of the causes for concern over the environmental impact of the use of these fuels as power sources.
            </p>
            <p>
                Nitrogen oxides (NOx): Nitrogen oxides, particularly nitrogen dioxide, are expelled from high temperature combustion, and are also 
                produced during thunderstorms by electric discharge. They can be seen as a brown haze dome above or a plume downwind of cities. 
                Nitrogen dioxide is a chemical compound with the formula NO2. It is one of several nitrogen oxides. One of the most prominent air 
                pollutants, this reddish-brown toxic gas has a characteristic sharp, biting odor.
            </p>  
        </main>

        <footer class="f">
            <div class="footer">
                <p>Copyright © 2023 Kate Gornostaeva Company. All rights reserved. 
            </div>
        </footer>
    </body>
</html>
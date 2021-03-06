<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

?>
<!DOCTYPE html>
<html lang="bg">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php include("left-nav.php"); ?>
    <!-- Bootstrap -->
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container-fluid">
        
 <!--   <video id="home-video" loop autoplay muted>
        <source src="video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->
    <div class="description" id="description_all">
        <div class="description" id="short_description">Бързо. Лесно. Интуитивно.<br/></div>
        <div class="description" id="main_description">
                  Добре дошли в BGapp- проект чрез който да изберете най-полезните,<br/>
                 най-интуитивните и
функционални приложения.<br/>
                  В страниците ще откриете мобилен софтуер от всякакъв тип- от приложения,<br/>
                  създадени за забавление до тези, без които не можем да си представим ежедневието.<br/>
                  Всички те са подредени в 12 категории за да намерите всичко, от което се нуждаете бързо и лесно.<br/>
                  Селекцията ни от приложения е с активно българско присъствие, защото смятаме,<br/>
                  трудът на нашите разработчици не бива да остава неоценен.
        </div>
    </div>
    <div class="categories-container">
        <div id="categories-tile"> 
            <div class="categories_text"><i class="fa fa-th" id="icon-categories"></i>Категории</div>
        </div>   
            <div class="main-categories">
                
                <a href="#"><div class="all-categories" id="business">
                    <img class="categories-logos" id="business-logo" src="Categories-logos/logo-business.png" alt="Business logo">
                    <div class="logo-texts">Бизнес</div>
                </div></a>            
                <a href="#"><div class="all-categories" id="socials">
                    <img class="categories-logos" id="comunication-logo" src="Categories-logos/comunication-logo.png" alt="Comunication logo">
                    <div class="logo-texts">Социални мрежи и комуникация</div>
                </div>
                <a href="#"><div class="all-categories" id="useful">
                    <img class="categories-logos" id="useful-logo" src="Categories-logos/useful-logo.png" alt="Useful apps logo">
                    <div class="logo-texts">Полезни приложения</div>
                </div></a>
                <a href="#"><div class="all-categories" id="entertainment">
                    <img class="categories-logos" id="funny-logo" src="Categories-logos/funny-logo.png" alt="Funny apps logo">
                    <div class="logo-texts">Забавление</div>
                </div></a>
                <a href="#"><div class="all-categories" id="photography">
                    <img class="categories-logos" id="photography-logo" src="Categories-logos/photography-logo.png" alt="Photography logo">
                    <div class="logo-texts">Снимки и фотография</div>
                </div></a>
                <a href="#"><div class="all-categories" id="video">
                    <img class="categories-logos" id="video-logo" src="Categories-logos/video-logo.png" alt="Video logo">
                    <div class="logo-texts">Видео и клипове</div>
                </div></a>            
                <a href="#"><div class="all-categories" id="education">
                    <img class="categories-logos" id="education-logo" src="Categories-logos/education-logo.png" alt="Education apps logo">
                    <div class="logo-texts">Образователни</div>
                </div></a>
                <a href="#"><div class="all-categories" id="productivity">
                    <img class="categories-logos" id="productivity-logo" src="Categories-logos/productivity-logo.png" alt="Productivity logo">
                    <div class="logo-texts">Производителност</div>
                </div></a>
                <a href="#"><div class="all-categories" id="music">
                    <img class="categories-logos" id="music-logo" src="Categories-logos/music-logo.png" alt="Music logo">
                    <div class="logo-texts">Музика</div>
                </div></a>
                <a href="#"><div class="all-categories" id="health">
                    <img class="categories-logos" id="sport-logo" src="Categories-logos/sport-logo.png" alt="Sport apps logo">
                    <div class="logo-texts">Здраве и фитнес</div>
                </div></a>
                <a href="#"><div class="all-categories" id="personalization">
                    <img class="categories-logos" id="personalization-logo" src="Categories-logos/personalization-logo.png" alt="Personalization logo">
                    <div class="logo-texts">Персонализиране</div>
                </div></a>            
                <a href="#"><div class="all-categories" id="navigation">
                    <img class="categories-logos" id="GPS-logo" src="Categories-logos/GPS-logo.png" alt="Navigation logo">
                    <div class="logo-texts">Навигация и GPS</div>
                </div></a>
        </div>
    </div>

</div>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>'


<?php
    include('config.php');
    if (isset($_POST["emailText"])) {
        $sql = mysqli_query($conn, "INSERT INTO `emaillog` (`emailValue`) VALUES ('{$_POST['emailText']}')");
        if ($sql) {
            echo '<script>alert("Почта успешно отправлена")</script>';
            echo "<script>window.location.href='index.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PanteleevMuseum</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
    <div id="screenOfSlider">
        <header>
            <div id="namePlaceholder"><a href="index.php"><h1>Мастерская<br>А.В. Пантелеева</h1></a></div>
                <ul class="menu">
                     <li><a class="menuItem" href="about.php">О мастерской</a></li><br>
                     <li><a class="menuItem" href="ivents.php">Мероприятия</a></li><br>
                     <li><a class="menuItem" href="comments.php">Отзывы</a></li>
                </ul>
                    <div id="burgerPlaceholder"><button class="hamburger">
                        <i class="menuIcon material-icons">Меню | | |</i>
                        <i class="closeIcon material-icons">Закрыть</i>
                    </button></div>
        </header>

        <div id="blockSlider">
				<div class="slides">
        			<div class="slide"><img class="slideImg" src="images/image3.jpg" alt="Slide 1"></div>
        			<div class="slide"><img class="slideImg" src="images/image4.jpg" alt="Slide 2"></div>
        			<div class="slide"><img class="slideImg" src="images/image1.jpg" alt="Slide 3"></div>
        			<div class="slide"><img class="slideImg" src="images/image2.jpg" alt="Slide 4"></div>
    			</div>
    		<div class="controls">
      			<button class="control" id="prevBtn">&lt;</button>
      			<button class="control" id="nextBtn">&gt;</button>
  			</div>
  		</div>

        <div id="placeholderTextOne"><p id="textOne">Цвет и форма, представляющие творчество советского художника Александра Васильевича Пантелеева - первый фактор, что дает зрителю глубочайшие впечатления от увиденного.
            <br><br>Многие холсты этих невероятных фигур имени творчества и искусства создавались здесь - в мемориальной мастерской.
        </p></div>

            <a href="#screenTwo" class="screenButton">О Пантелееве</a>

    </div>


    <div id="screenTwo">

        <img src="images/PanteleevAlexandr.jpg" id="panteleevPhoto" onmouseover="chg3()" onmouseout="chg4()">
		    <div id="forTextThree"><p>
			    Александр Васильевич первую половину жизни прожил в Уфе, однако в 1976 году по приглашению художника В.Н. Корбакова, он переехал в Вологду, где и продолжил свое творчество. Мастер писал пейзажи, натюрморты, сюжетно-тематические картины и говоря о стиле написанных произведений, то свою живопись Пантелеев называл "косоугольной", как будто шутливо подчеркивая те образы, что изобразил на холсте<br><br> "Вологодский Пикассо" вкладывал в рисунок свое виденье мира, иногда очень нежное, лиричное, пробивающиеся через индустриальные мотивы<br><br> Пантелеев восхищался развитием фабрик, заводов, в целом индустриального вопроса человечества. Художника волновало это сравнение природы окружающего мира и природы человеческого гения. Ему будто было спокойнее среди механизмов и стен, сотворенных человеком <br><br>
			    Пантелеев — удивительная личность. По нему пишутся книги, в лекториях выделяют вечера. Все это можно узнать в стенах Вологодской областной картинной галереи
	        </p>
            </div>


        <footer>
            <p id="infoText">Вы можете подписаться на нас, чтобы получать больше новостей<br>о мероприятиях, выставках и встречах с художниками!</p>
            <form action="" method="post">
                <input type="email" name="emailText" required placeholder="Ваша электронная почта" class="emailInput" id="emailText">
                <input type="submit" name="submitButton" value="Жми!" class="emailInput" id="emailButton">
            </form>
            <a href="index.php" class="screenButton" id="upButton">^</a>



            <p id="siteBil">Сайт был сделан Борисовым В.И. для дипломного проекта.<br> 6+</p><a href="https://vologda-gallery.ru/"
            class="buttonLike"><img id="travelImg" src="images/travel_13171304.png"><p id="vokgSite">vologda-gallery.ru</p></a>
	<a href="https://vk.com/vologda_gallery" class="buttonLike"><img id=vK src="images/VKLogo.png"><p id="vkSite">vologda_gallery</p></a></div>
	
        </footer>
    </div>


<script src="./scripts/script.js"></script>
</body>
</html>

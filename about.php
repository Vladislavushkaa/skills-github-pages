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
    <link rel="stylesheet" type="text/css" href="./styles/styleOne.css">
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
        <iframe id="mapS" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2041.8679246564843!2d39.885780977352155!3d59.218222719909114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ae98293d3975ef%3A0xd512cc31f936a6c1!2z0JzQtdC80L7RgNC40LDQu9GM0L3QsNGPINC80LDRgdGC0LXRgNGB0LrQsNGPINC30LDRgdC70YPQttC10L3QvdC-0LPQviDRhdGD0LTQvtC20L3QuNC60LAg0KDQodCk0KHQoCDQkC7Qki4g0J_QsNC90YLQtdC70LXQtdCy0LA!5e0!3m2!1sru!2sru!4v1740097964525!5m2!1sru!2sru" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <img id="museumHomePicture" src="images/museumHome.jpg">
            <div id="forTextTwo"><p>Тут, на улице Козленской, д. 4, в кирпичном одноэтажном особняке, трудился с 1981 года<br> Александр Васильевич. До этого здание являлось частью Вологодской типографии и использовалось<br> как цех цинкографии<br><br>
		Сейчас мастерская - структурное подразделение Вологодской областной картинной галереи.<br> Будучи очень камерным и уютным, это место создает идеальные условия для выставок и творческих встреч <br><br>
		Также тут можно купить некоторые сувениры, например, альбомы работ художников
		</p></div>
        <a href="comments.php" class="screenButton">Оставить нам отзыв</a>
        </div>







        <footer>
            <p id="infoText">Вы можете подписаться на нас, чтобы получать больше новостей<br>о мероприятиях, выставках и встречах с художниками!</p>
            <form action="" method="post">
                <input type="email" name="emailText" required placeholder="Ваша электронная почта" class="emailInput" id="emailText">
                <input type="submit" name="submitButton" value="Жми!" class="emailInput" id="emailButton">
            </form>



            <p id="siteBil">Сайт был сделан Борисовым В.И. для дипломного проекта.<br> 6+</p><a href="https://vologda-gallery.ru/"
            class="buttonLike"><img id="travelImg" src="images/travel_13171304.png"><p id="vokgSite">vologda-gallery.ru</p></a>
	<a href="https://vk.com/vologda_gallery" class="buttonLike"><img id=vK src="images/VKLogo.png"><p id="vkSite">vologda_gallery</p></a></div>
	
        </footer>

        <script src="./scripts/scriptTwo.js"></script>
</body>
</html>
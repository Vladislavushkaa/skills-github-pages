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
    <link rel="stylesheet" type="text/css" href="./styles/styleThree.css">
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
</div>




<div id="placeholder"><?php
if (isset($_POST["valueText"])) {
    $valueText = $_POST["valueText"];
    $sql = mysqli_query($conn, "INSERT INTO `comments` (`textValue`, `name`) VALUES ('$valueText', '{$_POST['valueName']}')");
    if ($sql) {
        echo "<script>window.location.href='comments.php';</script>";
    }
}
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p id='oneStrok'><strong>" . $row['textValue'] . "</strong>: " . $row['name'] . "</p>";
    }
} else {
    echo "<p style=color:white>Пока нет комментариев.</p>";
}

$conn->close();
?>
</div>

            <p id="textObyes">Здесь вы можете оставить свои пожелания и комментарии, посвященные мастерской.<br>
        Все сообщения сохраняются и учитываются нами :)</p>

            <form action="" method="post" id="commentInput">
                <input type="text" name="valueText" required placeholder="Ваш комментарий" id="myCommentary" class="inputComment">
                <input type="text" name="valueName" required placeholder="Ваше имя" class="inputComment">
                <input type="submit" name="submitButton" value="Прокомментировать" class="commentInput" id="commentButton">
            </form>




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

        <script src="./scripts/scriptThree.js"></script>
</body>
</html>
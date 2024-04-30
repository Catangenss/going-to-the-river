<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кузьмин К.А.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>    
<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="col-3 nav_logo"></div>
            <div class="col-6">
                <div class="nav_text">Literaly me</div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Идущий по лезвию 2049</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Я в своем познании настолько преисполнился, что как будто бы уже сто триллионов миллиардов лет, проживаю на триллионах и триллионах таких же планет. Планет, как эта Земля. Мне этот мир уже во многом понятен, и ищу я здесь только одного - покоя, умиротворения, и вот этой гармонии, от слияния с бесконечно-вечным, от созерцания этого великого фрактального подобия, и от вот этого замечательного всеединства существа, бесконечно-вечного, куда ни посмотри: хоть вглубь - в бесконечно малое, хоть ввысь - в бесконечно большое.</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="my_photo"></div>
            </div>
            <div class="col-5">
                <div class="row"><h3>Кузьмин К.А.</h3></div>
                <div class="row"><p>Как же хочется вкатиться в пентест. ©</p></div>
                <div class="row"><h4>Мои ачивки<h4></div>
                <ul>
                    <li>1 этап стажировки в Deteact 2023</li>
                    <li>Топ 400 на Tinkof CTF 2023</li>
                    <li>Топ 70 на Codeby Cybercolisium 2 (2023)</li>
                    <li>312 место на Tinkof CTF 2024</li>
                    <li>64 место на Codeby Cybercolisium 3 (2024)</li>
                </ul>
                <div class="teams">
                    <div class="smelik"><img src="../image/Smelik.png"></div>
                    <div class="koza"><img src="../image/koza.png"></div>
                </div>
                <div class="row"><h4>Мои любимые категори на CTF</h4></div>
                <ul>
                    <li>1. Форензика</li>
                    <li>2. Крипто</li>
                    <li>3. PWN</li>
                    <li>4. Надеюсь полюбить web после этого курса</li>
                </ul>
                <div><h4>Да не умер он в конце стажировки.</h4></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class = "col-12">
                <h1 class="Hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
                    <input type="text" class="form" type="text" name="title" placeholder="Заголовок вашего поста">
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст поста..."></textarea>
                    <div class="col-12 btn__container">
                        <label for="fileInput" class="btn">Выбрать файл</label>
                        <input type="file" id="fileInput" name="file" style="display: none;">
                        <button id="postButton" type="submit" class="btn" name="submit">Сохранить пост</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>

<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'iddqd', 'PT');

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");

    if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
}
?>
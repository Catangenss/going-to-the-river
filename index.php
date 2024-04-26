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
<div class="container">
    <div class="row">
        <?php
        if (!isset($_COOKIE['User'])) {
        ?>
        <div class="col-12 message">
            <h1>Авторизуйтесь!</h1>
        </div>
        <div class="col-12 regis">
            <a href="/registration.php">Зарегистрируйтесь</a>
            &nbsp;или&nbsp;
            <a href="/login.php">войдите</a>, чтобы просматривать контент!
        </div>
        <div class="col-6">
            <div class="photo_a">
                <a href="#">
                    <img src="image/security.jpg" alt="sec">
                </a>
            </div>
        </div>
        <div class="col-6">
            <div class="photo_i">
                <img src="image/security_open.jpg" alt="sec">
            </div>
        </div>
        <?php
        } else {
        ?>
        <div class="col-12 message">
            <h1>Список постов!</h1>
        </div>
        <div class="col-12 regis">
            <orl>
            <?php
                $link = mysqli_connect('127.0.0.1', 'root', 'iddqd', 'PT');

                $sql = "SELECT * FROM posts";
                $res = mysqli_query($link, $sql);

                if (mysqli_num_rows($res) > 0) {
                    $counter = 1;
                    while ($post = mysqli_fetch_array($res)) {
                        echo "<li>"; // Открываем элемент списка для каждого поста
                        echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a>";
                        echo "</li>"; // Закрываем элемент списка
                        $counter++; // Увеличиваем счетчик
                    }
                } else {
                    echo "<li>Записей пока нет</li>"; // Если записей нет, выводим сообщение
                }
            }
            ?>
            </ol> <!-- Закрываем нумерованный список -->
        </div>
    </div>    
</div>

<script>
    var link1 = document.querySelector('a[href="/registration.php"]');
    var link2 = document.querySelector('a[href="/login.php"]');
    var photo1 = document.querySelector('.photo_a');
    var photo2 = document.querySelector('.photo_i');

    link1.addEventListener('mouseover', function() {
        photo1.style.visibility = 'visible';
    });

    link1.addEventListener('mouseout', function() {
        photo1.style.visibility = 'hidden';
    });

    link2.addEventListener('mouseover', function() {
        photo2.style.visibility = 'visible';
    });

    link2.addEventListener('mouseout', function() {
        photo2.style.visibility = 'hidden';
    });
</script>

</body>
</html>

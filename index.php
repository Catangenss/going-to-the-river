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
        <div class="col-12 regis">
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
    </div>
</div>
</body>
</html>

<script>
    // Получаем ссылки и блоки с картинками
    var link1 = document.querySelector('a[href="/registration.php"]');
    var link2 = document.querySelector('a[href="/login.php"]');
    var photo1 = document.querySelector('.photo_a');
    var photo2 = document.querySelector('.photo_i');

    // Добавляем обработчик события наведения курсора мыши на первую ссылку
    link1.addEventListener('mouseover', function() {
        // Показываем блок с первой картинкой
        photo1.style.visibility = 'visible';
    });

    // Добавляем обработчик события ухода курсора мыши с первой ссылки
    link1.addEventListener('mouseout', function() {
        // Скрываем блок с первой картинкой
        photo1.style.visibility = 'hidden';
    });

    // Добавляем обработчик события наведения курсора мыши на вторую ссылку
    link2.addEventListener('mouseover', function() {
        // Показываем блок со второй картинкой
        photo2.style.visibility = 'visible';
    });

    // Добавляем обработчик события ухода курсора мыши с второй ссылки
    link2.addEventListener('mouseout', function() {
        // Скрываем блок со второй картинкой
        photo2.style.visibility = 'hidden';
    });
</script>
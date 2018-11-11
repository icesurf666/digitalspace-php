<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="box-menu">
    <?php
    $menu = [
        'home' => 'Главная',
        'about' => 'О компании',
        'contacts' => 'Контакты',
    ];
    foreach ($menu as $key => $value) {
        print_link($key, $value);
    }
    function print_link($key, $value) {
        echo '<div class="link"><a href="' . $key . '">' . $value . '</a></div>' . "\n";
    }
    ?>
</div>
</body>
</html>

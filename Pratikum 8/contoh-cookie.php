<?php
$value = "Ini Cookie Pertama";
if (!isset($_COOKIE['first_cookie'])) {
    setcookie("first_cookie", $value, time() + 3600 * 24 * 2 * 30);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Implementasi Cookie</h1>
    <?php if (isset($_COOKIE['first_cookie'])): ?>
        <p><?php echo $_COOKIE['first_cookie']; ?></p>
    <?php else: ?>
        <p>Cookie belum di-set</p>
    <?php endif; ?>

    <?php
    if (isset($_COOKIE['first_cookie'])) {
        setcookie('first_cookie');
    }
    ?>


</body>

</html>
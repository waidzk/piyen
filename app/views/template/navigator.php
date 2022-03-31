<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?> Teras Perempuan</title>
</head>
<body>
    <?php if (isset($_SESSION['login'])):?>
        <h1>Selamat datang, <b><?= $_SESSION['username']; ?></b>!</h1>
    <?php endif; ?>
    <ul>
        <li><a href="<?= BASEURL;?>">Articles</a></li>
        <?php if (isset($_SESSION['login'])):?>
        <li><a href="<?= BASEURL;?>profiles/user/<?= $_SESSION['username'] ?>">Profile</a> </li>
        <li><a href="<?= BASEURL;?>login/logout">Logout</a></li>
        <?php endif; ?>
        <li><a href="<?= BASEURL;?>feeds">Feeds</a> </li>
    </ul>
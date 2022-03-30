<h2>Ini adalah halaman Login</h2>
<form action="<?= BASEURL;?>login/auth" method="post">
    <label for="username">Username: </label>
    <input type="text" name="uname" id="username"></input><br>
    <label for="pass">Password: </label>
    <input type="password" name="pass" id="pass"></input><br>
    <button name="login">Submit</button>
    <p>Ke halaman <a href="<?= BASEURL;?>signup">Sign Up</a></p>
</form>

<?php foreach ($data['user'] as $user){ ?>
    <ul>
        <li>username :<?= $user['username']; ?></li>
        <li>email :<?= $user['email']; ?></li>
        <li>password :<?= $user['password']; ?></li>
        <li>bio :<?= $user['bio']; ?></li>
        <li>created_at :<?= $user['created_at']; ?></li>
        <li>updated_at :<?= $user['updated_at']; ?></li>
        
    </ul>
<?php }
?>
<section id="login">
            <div>
            <h1>Login</h1>
            <form action="<?= BASEURL;?>login/auth" method="post">
                <div class="input username">
                    <label for="username">Username / Email</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username / email">
                </div>
                <div class="input password">
                    <label for="password">Password</label>
                    <input type="password" id="pass" name="pass" placeholder="Masukkan password">
                </div>
                <a href="">Lupa Password?</a>
                <button class="login-button" name="login">Login</button>
                <button class="google-login-button"><img class="google-logo" src="<?= BASEURL ?>/public/image/icons/google.png">Sign in with Google</button>
                <p class="">Not registered?<a href="<?= BASEURL ?>signup"> Create an account</a></p>  
            </form>
            </div>
</section>


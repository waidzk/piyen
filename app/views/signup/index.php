<section id="signup">
            <div>
            <h1>Sign up</h1>
            <form action="<?= BASEURL;?>signup/regist" method="post">
                <div class="input username">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username">
                </div>
                <div class="input email">
                    <label for="username">Email</label>
                    <input type="email" id="username" name="email" placeholder="Masukkan email yang aktif">
                </div>
                <div class="input password">
                    <label for="password">Password</label>
                    <input type="password" id="password_1" name="password" placeholder="Masukkan password">
                </div>
                <div class="input password">
                    <label for="password">Ketik ulang password</label>
                    <input type="password" id="password_2" name="password" placeholder="Masukkan ulang password">
                </div>
                <a href="">Lupa Password?</a>
                <button class="login-button">Sign Up</button>
                <button class="google-login-button"><img class="google-logo" src="<?= BASEURL ?>/public/image/icons/google.png">Sign in with Google</button>
                <p class="">Already have an account?<a href="<?= BASEURL ?>login"> Login</a></p>  
            </form>
            </div>
</section>

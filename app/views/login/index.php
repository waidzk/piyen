<section class="login p-8 h-screen flex flex-col-reverse md:flex-row">
            <div class="left-side hidden md:flex md:flex-col justify-center items-end text-right p-8 w-full md:w-1/2 bg-gradient-to-r from-violet-500 to-pink-500 rounded-lg">
                <h1 class="text-2xl font-bold w-1/2 text-white">Butuh Waktu yang cukup lama untuk bersuara. Sekarang saya telah memilikinya dan saya tidak akan diam saja.</h1>
                <p class="w-1/2 text-white">- Madeleine Albright | Diplomat AS</p>
            </div>
            <div class="right-side md:w-1/2 p-2 h-full flex justify-center items-center rounded-r-lg relative md:fixed md:top-0 md:bottom-0 md:right-0">
                <div class="login-card w-full md:w-96 md:h-auto shadow-lg shadow-pink-200 rounded-lg">
                    <div class="flex flex-col p-4">
                        <h1 class="font-semibold text-2xl text-pink-500 mb-2">Sign in</h1>
                        <p class="text-xs text-slate-400">Teras Perempuan</p>
                        <form class="m-4" action="<?= BASEURL;?>login/auth" method="post">
                            <label class="block">
                              <span for="username" class="block text-sm font-medium text-slate-700">Username / email</span>
                              <input type="text" id="username" name="username" placeholder="Enter your username or email" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                                disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                                invalid:border-pink-500 invalid:text-pink-600
                                focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                              "/>
                            </label>
                           <label class="block">
                                <span class="block text-sm font-medium text-slate-700">Password</span>
                                <input type="password" id="pass" name="pass" placeholder="Enter your password" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                  focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                                  disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                                  invalid:border-pink-500 invalid:text-pink-600
                                  focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                                "/>
                            </label>
                            <a href="" class="text-xs mt-2 text-pink-700">Lupa password?</a>
                            <div class="flex flex-col justify-center items-center w-full">
                              <button name="login" class="rounded-full w-full bg-pink-500 hover:bg-pink-700 duration-100 text-white p-2 m-2">Sign in</button>
                              <p class="text-sm m-2 text-center text-slate-500">or</p>
                              <button name="login" class="rounded-full w-full bg-pink-50 hover:bg-pink-100 duration-100 text-pink-500 p-2 m-2 inline-flex justify-center">
                                <img src="<?= BASEURL ?>/public/image/icons/google.png" class="w-5 h-5 mr-2 self-center" alt="">Sign in with google</button>
                              <p class="text-xs m-2">Not regitered yet? <a href="<?= BASEURL ?>signup" class="text-pink-700">Create an account</a>.</p>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </section>
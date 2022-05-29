<div class="static ml-12 p-8">
    <section class="head-profile flex flex-col items-center justify-center">
        <div class="photo-profile m-1">
            <img class="w-40 rounded-full" src="<?= BASEURL;?>app/assets/img/profiles/<?= isset($data['userdata']['photo'])? $data['userdata']['photo'] : 'user.jpg'; ?>" alt="User_Profiles">
        </div>
        <div class="info-profile flex flex-col items-center m-1">
            <h2 class="username text-2xl font-semibold"><?php echo $data['userdata']['username']; ?></h2>
            <p class="bio text-xs"><?php echo $data['userdata']['bio']; ?></p>
        </div>
    </section>
    <section class="content-profile">
        <div class="navigation-profile flex justify-center">
            <ul class="flex flex-row justify-center m-auto w-96">
                <li class="m-2"><a id="myFeeds" class="item-menu flex flex-row items-center stroke-pink-500 text-pink-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg><span class="text-sm font-medium">Feeds</span></a>
                </li>
                <li class="m-2"><a id="myArticles" class="item-menu flex flex-row items-center stroke-slate-400 text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 <?php if (exploded($_SERVER['REQUEST_URI'])[0]=='voted') {echo 'stroke-pink-500'; }?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg><span class="text-sm font-medium">Articles</span></a>
                </li>
                <li class="m-2"><a id="myVoted" class="item-menu flex flex-row items-center stroke-slate-400 text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg><span class="text-sm font-medium">Voted</span></a>
                </li>
                <li class="m-2">
                    <?php if($_SESSION['username'] === $data['userdata']['username']): ?>
                    <a class="flex flex-row items-center stroke-slate-400 text-slate-400" href="<?= BASEURL; ?>profiles"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    <span class="text-sm font-medium">Edit Profile</span></a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <div class="page"></div>
    </section>



<!-- <ul>
    <li>Photo</li>
    <img src="<?= BASEURL;?>app/assets/img/profiles/<?= isset($data['userdata']['photo'])? $data['userdata']['photo'] : 'user.jpg'; ?>" alt="User_Profiles" width="100px">
    <li>uname :<?php echo $data['userdata']['username']; ?></li>
    <li>Birth :<?php echo $data['userdata']['birth']; ?></li> gakeluar
    <li>email :<?php echo $data['userdata']['email']; ?></li> gakeluar
    <li>bio   :<?php echo $data['userdata']['bio']; ?></li>
</ul>
<?php if($_SESSION['username'] === $data['userdata']['username']): ?>
<p><a href="<?= BASEURL; ?>profiles">Ubah Data Profile Sekarang</a></p>
<?php endif; ?>
<br>
<h3>FEEDS YANG PERNAH DIBUAT</h3>
<table>
    <?php foreach($data['feeds'] as $feed) : ?>
        <tr>
            <td>
                <hr>
                <span>
                    <img src="<?= BASEURL;?>app/assets/img/profiles/<?= $data['userdata']['photo']; ?>" alt="Profile_Photo" width="30px">
                    <h4><?= $data['userdata']['username']; ?></h4>
                </span>
                <?php if($data['userdata']['id'] === $_SESSION['id']): ?>
                <a href="<?= BASEURL; ?>feeds/delete/<?= $feed['id']; ?>">Hapus Feed</a>
                <?php endif; ?>
                <p><?= $feed['feed_value']; ?></p>
                <?php if(isset($feed['feed_photo']) && $feed['feed_photo'] !== ''){
                    echo '<img src="'.BASEURL.'app/assets/img/feeds/'.$feed['feed_photo'].'" alt="Feeds_Photo" width="300px">';
                }
                ?>
                <hr>
                <form action="<?= BASEURL;?>feeds/comment" method="post">
                    <input type="text" name="comment" id="comment" placeholder="Comment">
                    <button type="submit" name="send">Send</button>
                </form>
                <hr>
            </td>
        </tr>
    <?php endforeach; ?>
</table> -->
</div>
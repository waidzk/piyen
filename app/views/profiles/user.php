<div class="static ml-12 p-8">
<ul>
    <li>USER ID: <?php echo $data['userdata']['id']; ?></li>
    <li>Photo</li>
    <img src="<?= BASEURL;?>app/assets/img/profiles/<?= isset($data['userdata']['photo'])? $data['userdata']['photo'] : 'user.jpg'; ?>" alt="User_Profiles" width="100px">
    <li>uname :<?php echo $data['userdata']['username']; ?></li>
    <li>Birth :<?php echo $data['userdata']['birth']; ?></li>
    <li>email :<?php echo $data['userdata']['email']; ?></li>
    <li>bio   :<?php echo $data['userdata']['bio']; ?></li>
</ul>
<?php if($_SESSION['username'] === $data['userdata']['username']): ?>
<p><a href="<?= BASEURL; ?>profiles">Ubah Data Profile Sekarang</a></p>
<?php endif; ?>
<br>
<h3>FEEDS YANG PERNAH DIBUAT</h3>
<table >
    <?php foreach($data['feeds'] as $feed) : ?>
        <tr>
            <td>
                <hr>
                <span>
                    <img src="<?= BASEURL;?>app/assets/img/profiles/<?= $data['userdata']['photo']; ?>" alt="Profile_Photo" width="30px">
                    <h4><?= $data['userdata']['username']; ?></h4>
                </span>
                <a href="<?= BASEURL; ?>feeds/delete/<?= $feed['id']; ?>">Hapus Feed</a>
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
</table>
</div>
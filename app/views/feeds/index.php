<h2>Ini adalah halaman feeds</h2>
<br>
<form action="<?= BASEURL;?>feeds/add" method="post" enctype="multipart/form-data">
    <textarea type="text" name="feedValue" id="value_articles" placeholder="Tulis feed..." required></textarea><br>
    <input type="file" name="feedPhoto" id="feed_photo"><br>
    <button type="submit" name="make">Buat</button>
</form>
<br>
<table >
    <?php foreach($data['feeds'] as $feed) : ?>
        <tr>
            <td>
                <hr>
                <span style="flex: 1;">
                    <a href="<?= BASEURL?>profiles/user/<?= $feed['username'];?>">
                        <img src="<?= BASEURL;?>app/assets/img/profiles/<?= $feed['photo']; ?>" alt="Profile_Photo" width="30px">
                        <h4><?= $feed['username']; ?></h4>
                    </a>
                </span>
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

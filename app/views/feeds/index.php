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
            <td id="#<?= $feed['id']; ?>">
                <hr>
                <span style="flex: 1;" >
                    <a href="<?= BASEURL?>profiles/user/<?= $feed['username'];?>">
                        <img src="<?= BASEURL;?>app/assets/img/profiles/<?= $feed['photo']; ?>" alt="Profile_Photo" width="30px">
                        <h3><?= $feed['username']; ?></h3>
                    </a>
                </span>
                <p><?= $feed['feed_value']; ?></p>
                    <?php if(isset($feed['feed_photo']) && $feed['feed_photo'] !== ''){
                        echo '<img src="'.BASEURL.'app/assets/img/feeds/'.$feed['feed_photo'].'" alt="Feeds_Photo" width="300px">';
                    }
                    ?>
                <hr>
                <?php foreach($data['comments'] as $comment): ?>
                    <p><b><?= $comment['username'] ?>: </b><?= $comment['comment_value']; ?></p>
                    <form action="">
                    <button type="submit" name="vote">Vote</button>
                    </form>
                <?php endforeach; ?>
                <form action="<?= BASEURL;?>comments/add/<?= $feed['id']; ?>" method="post">
                    <input type="text" name="comment" id="comment" placeholder="Comment">
                    <button type="submit" name="send">Send</button>
                </form>
                <hr>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

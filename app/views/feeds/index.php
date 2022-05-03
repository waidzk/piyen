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
                <span >
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
                <p><?= $feed['created_at']; ?></p>
                <hr>
                <?php foreach($data['comments'] as $comment): ?>
                    <?php if($feed['id'] == $comment['feed_id']): ?>
                        <p>
                            <b><?= $comment['username'] ?>: </b>
                            <?= $comment['comment_value']; ?>
                        </p>
                        <form action="<?= BASEURL?>votes/add/<?= $comment['id']?>" method="post">
                            <button type="submit"><?php if(isset($_POST['vote'])) {echo 'Voted';} else {echo 'Vote';}  ?></button>
                        </form>
                    <?php endif; ?>
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

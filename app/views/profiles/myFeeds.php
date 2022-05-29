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
</table>
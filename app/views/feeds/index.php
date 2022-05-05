<h2>Ini adalah halaman feeds</h2>
<br>
<form action="<?= BASEURL;?>feeds/add" method="post" enctype="multipart/form-data">
    <textarea type="text" name="feedValue" id="value_articles" placeholder="Tulis feed..." required></textarea><br>
    <input type="file" name="feedPhoto" id="feed_photo"><br>
    <button type="submit" name="make">Buat</button>
</form>
<br>
<table >
    <!-- Menampilkan feed -->
    <?php foreach($data['feeds'] as $feed) : ?>
        <tr>
            <td>
                <hr>
                <span >
                    <a href="<?= BASEURL?>profiles/user/<?= $feed['username'];?>">
                        <!-- foto profile feed -->
                        <img src="<?= BASEURL;?>app/assets/img/profiles/<?= $feed['photo']; ?>" alt="Profile_Photo" width="30px">
                        <!-- username feed -->
                        <h3><?= $feed['username']; ?></h3>
                    </a>
                </span>
                <!-- Menampilkan isi feed -->
                <p><?= $feed['feed_value']; ?></p>
                <!-- Menampilkan lampiran foto feed jika ada -->
                    <?php if(isset($feed['feed_photo']) && $feed['feed_photo'] !== ''){
                        echo '<img src="'.BASEURL.'app/assets/img/feeds/'.$feed['feed_photo'].'" alt="Feeds_Photo" width="300px">';
                    }
                    ?>
                <!-- Menampilkan waktu untuk feed -->
                <p><i><?= time_elapsed_string($feed['created_at']); ?></i></p>
                <hr>
                <?php foreach($data['comments'] as $comment): ?>
                    <?php if($feed['id'] == $comment['feed_id']): ?>
                        <!-- Memunculkan daftar komen dari feed -->
                        <p>
                            <b><?= $comment['username'] ?>: </b>
                            <?= $comment['comment_value']; ?>  | 
                            <?= time_elapsed_string($comment['created_at']); ?>
                        </p>
                        <!-- Bagian Vote -->
						<?php 
						if (validate_vote($feed['user_id'], $comment['id'])) {
							echo '
							<button value="'.$comment['id'].'" class="voted" type="submit">❤</button>
							';
						} else {
							echo '
							<button value="'.$comment['id'].'" class="vote" type="submit">Vote</button>
							';
						}
						?>
                        <p id="show_vote<?= $comment['id'] ?>">
							<?= showVotes($comment['id']) ?>
						</p>
                    <?php endif; ?>
                <?php endforeach; ?>
                <!-- form untuk menambahkan komentar -->
                <form action="<?= BASEURL?>comments/add/<?= $feed['id']; ?>" method="post">
                    <input type="text" name="comment" id="comment" placeholder="Comment">
                    <button type="submit" name="send">Send</button>
                </form>
                <hr>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<script src = "jquery-3.1.1.js"></script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type = "text/javascript">
        $(document).ready(function(){
		$(document).on('click', '.vote', function(){
			var id=$(this).val();
			var $this = $(this);
			$this.toggleClass('vote');
          	if($this.hasClass('vote')){
				$this.text('Vote'); 
			} else {
				$this.text('❤');
				$this.addClass("voted"); 
			}
				$.ajax({
					type: "POST",
					url: "http://localhost/cerita-perempuan/votes/add",
					data: {
						id: id,
						votes: 1,
					},
					success: function(){
						showVote(id);
					}
				});
		});
		
		$(document).on('click', '.voted', function(){
			var id=$(this).val();
			var $this = $(this);
            $this.toggleClass('voted');
 			if($this.hasClass('voted')){
				$this.text('❤');
			} else {
				$this.text('Vote');
				$this.addClass("vote");
			}
				$.ajax({
					type: "POST",
					url: "http://localhost/cerita-perempuan/votes/down",
					data: {
						id: id,
						votes: 1,
					},
					success: function(){
						showVote(id);
					}
				});
		});
	});
	
	function showVote(id){
		$.ajax({
			url: 'http://localhost/cerita-perempuan/votes/showVote',
			type: 'POST',
			async: false,
			data:{
				id: id,
				showVote: 1
			},
			success: function(response){
				$('#show_vote'+id).html(response);
				
			}
		});
	}
	
</script>
<section class="static flex flex-row p-5 md:ml-16">
  <div class="md:w-3/4 mb-11 md:mb-0 w-full md:p-3 p-1">
    <div class="add-feed w-full flex justify-center items-center p-2 border-b">
      <form action="<?= BASEURL;?>feeds/add" method="post" enctype="multipart/form-data">
        <textarea type="text" name="feedValue" id="value_articles" class="p-3 w-full focus:border-none" placeholder="Tell us what ur problem .." required></textarea><br>
        <div class="action-add-feed flex flex-row">
          <input type="file" name="feedPhoto" id="feed_photo" class="block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-pink-50 file:text-pink-500
          hover:file:bg-pink-100">
          <button type="submit" name="make" class="bg-pink-500 w-40 rounded-full text-white font-semibold">Buat</button>
        </div>
      </form>
    </div>
    
    <!-- Menampilkan feed -->
    <?php foreach($data['feeds'] as $feed) : ?>
    <div class="feeds m-4 border-b">
        <div class="feed">
            <a href="<?= BASEURL?>profiles/user/<?= $feed['username'];?>/<?= $feed['user_id'];?>" class="flex flex-row items-center w-fit">
                <div class="feed-pp w-12 mr-2"><img class="rounded-full" src="<?= BASEURL;?>app/assets/img/profiles/<?= $feed['photo']; ?>" alt="Photo Profile"></div>
                <div class="feed-username text-sm font-semibold"><h3><?= $feed['username']; ?></h3></div>
            </a>
            <div class="feed-value p-2 mx-6 w-3/4 border-l-2">
              <p class="ml-6 text-sm"><?= $feed['feed_value']; ?></p>
              <?php if(isset($feed['feed_photo']) && $feed['feed_photo'] !== ''){
                        echo '<img class="ml-6" src="'.BASEURL.'app/assets/img/feeds/'.$feed['feed_photo'].'" alt="Feeds_Photo" width="300px">';
                    }
                ?>
              <p class="ml-6 text-xs text-slate-400">Created <?= time_elapsed_string($feed['created_at']); ?> ago</p>
            </div>
        </div>
        <div class="feed-comments my-1">
            <h4 class="mx-4 text-xs text-slate-400">Comments</h4>
            <?php foreach($data['comments'] as $comment): ?>
                <?php if($feed['id'] == $comment['feed_id']): ?>
            <div class="comment">
              <a href="" class="flex flex-row items-center mx-2 my-1 w-fit">
              <div class="comment-pp w-8 mr-2"><img class="rounded-full" src="https://images.unsplash.com/photo-1597872849945-a1a1ef549c6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="Photo Profile"></div>    
                <div class="comment-username text-xs font-semibold"><h3><?= $comment['username'] ?></h3></div>
              </a>
              <div class="comment-value mx-7 w-3/4 text-xs">
                <p class="ml-5"><?= $comment['comment_value']; ?></p>
                <p class="ml-5 text-slate-400">Created <?= time_elapsed_string($comment['created_at']); ?> ago</p>
              </div>
              <div class="vote-comment flex flex-row items-center mx-11">
                  
                <?php 
			    	if (validate_vote($_SESSION['id'], $comment['id'])) {
			    		echo '
			    		  <button value="'.$comment['id'].'" id="voted" class="flex flex-row items-center w-fit p-2 rounded-full stroke-pink-500 text-pink-500 voted">
                  <div class="voted-icon"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                  </svg></div>
                </button>
			    		';
			    	} else {
			    		echo '
			    		  <button value="'.$comment['id'].'" id="vote" class="flex flex-row items-center my-1 w-fit p-2 rounded-full vote">
                  <div class="voted-icon"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                  </svg></div>
                </button>
			    		';
			    	}
			    ?>
                <span id="show_vote<?= $comment['id'] ?>">
                    <p class="text-xs text-slate-400">
			        	      <span class="vote-number"><?= showVotes($comment['id']) ?></span> voted
                    </p>
                </span>
              </div>
            </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <form class="mx-11 text-xs" action="<?= BASEURL?>comments/add/<?= $feed['id']; ?>" method="post">
                    <input class="w-3/4 p-3 mr-1" type="text" name="comment" id="comment" placeholder="Comment here ...">
                    <button class="p-2 rounded-md text-pink-500 border border-pink-500 font-semibold" type="submit" name="send">Send</button>
            </form>
        </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="articles hidden lg:flex flex-col fixed top-0 right-0 m-auto w-1/4 h-screen p-5 border-l-2">
    <h1 class="text-xl font-bold">Trending Articles</h1>
    <a href="">
      <div class="article-card p-4 rounded-md shadow-md">
        <div class="article-card-title"><h1 class="text-lg font-semibold">Untitled</h1></div>
        <div class="article-card-value"><p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex tempore earum praesentium dolorem incidunt, velit autem.</p></div>
        <div class="footer-article-card text-xs mt-2 flex flex-row justify-between text-slate-400">
          <span>Created by lia</span>
          <span>03 May 2022</span>
        </div>
      </div>
    </a>
    <a href="">
      <div class="article-card p-4 rounded-md shadow-md">
        <div class="article-card-title"><h1 class="text-lg font-semibold">Untitled</h1></div>
        <div class="article-card-value"><p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex tempore earum praesentium dolorem incidunt, velit autem.</p></div>
        <div class="footer-article-card text-xs mt-2 flex flex-row justify-between text-slate-400">
          <span>Created by lia</span>
          <span>03 May 2022</span>
        </div>
      </div>
    </a>
    <a href="">
      <div class="article-card p-4 rounded-md shadow-md">
        <div class="article-card-title"><h1 class="text-lg font-semibold">Untitled</h1></div>
        <div class="article-card-value"><p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex tempore earum praesentium dolorem incidunt, velit autem.</p></div>
        <div class="footer-article-card text-xs mt-2 flex flex-row justify-between text-slate-400">
          <span>Created by lia</span>
          <span>03 May 2022</span>
        </div>
      </div>
    </a>
    <a href="" class="arrow flex flex-row items-center justify-end mt-10"><p>More </p><span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
    </svg></span></a>
  </div>
</section>
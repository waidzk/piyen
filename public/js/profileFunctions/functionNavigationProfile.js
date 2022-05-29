$(document).ready(function(){
    $('.item-menu').click(function(){
        let menu = $(this).attr('id');
        if(menu == "myFeeds"){
            $('.page').load('/cerita-perempuan/app/views/profiles/myFeeds.php');
        }else if(menu == "myArticles"){
            $('.page').load('/cerita-perempuan/app/views/profiles/myArticles.php');
        }else if(menu == "myVoted"){
            $('.page').load('/cerita-perempuan/app/views/profiles/myVoted.php');
        }
    });


    // halaman yang di load default pertama kali
    $('.page').load('/cerita-perempuan/app/views/profiles/myFeeds.php');						

});
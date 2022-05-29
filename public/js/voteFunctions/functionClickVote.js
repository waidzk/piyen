$(document).ready(function(){
    $(document).on('click', '.vote', function(){
        var id = $(this).val();
        var $this = $(this);
        $this.toggleClass('vote');
          if($this.hasClass('vote')){
            $this.addClass('vote');
          } else {
            $this.addClass("voted stroke-pink-500 text-pink-500"); 
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
         if($this.hasClass('voted stroke-pink-500 text-pink-500')){
          $this.addClass('voted')
        } else {
            $this.removeClass("stroke-pink-500 text-pink-500");
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
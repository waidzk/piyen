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
            $('#show_vote'+id).children().children("span.vote-number").text(response);
            
        }
    });
}
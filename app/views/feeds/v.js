// function ajaxCall(value_id){
//     $(document).ready(function(){
//         $(document).on('click', '.vote', function(){
//             var id = value_id;
//             var $this = $(this);
//             $this.toggleClass('vote');
//               if($this.hasClass('vote')){
//                 $this.text('Vote'); 
//             } else {
//                 $this.text('❤');
//                 $this.addClass("voted"); 
//             }
//                 $.ajax({
//                     type: "POST",
//                     url: "http://localhost/cerita-perempuan/votes/add",
//                     data: {
//                         id: id,
//                         votes: 1,
//                     },
//                     success: function(){
//                         showVote(id);
//                     }
//                 });
//         });
        
//         $(document).on('click', '.voted', function(){
//             var id=value_id;
//             var $this = $(this);
//             $this.toggleClass('voted');
//              if($this.hasClass('voted')){
//                 $this.text('❤');
//             } else {
//                 $this.text('Vote');
//                 $this.addClass("vote");
//             }
//                 $.ajax({
//                     type: "POST",
//                     url: "http://localhost/cerita-perempuan/votes/down",
//                     data: {
//                         id: id,
//                         votes: 1,
//                     },
//                     success: function(){
//                         showVote(id);
//                     }
//                 });
//         });
//     });
    
//     function showVote(id){
//         $.ajax({
//             url: 'http://localhost/cerita-perempuan/votes/showVote',
//             type: 'POST',
//             async: false,
//             data:{
//                 id: id,
//                 showVote: 1
//             },
//             success: function(response){
//                 $('#show_vote'+id).html(response);
                
//             }
//         });
//     }

// }
<?php 
function conn(){
    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    return $connect;
}

function validate_vote($id, $commentId){
    $query = "SELECT * FROM votes WHERE commen_id = '".$commentId."' AND user_id = '".$id."'" ;
    $conn = conn();

    $res = mysqli_query($conn, $query);
    return mysqli_num_rows($res);
}

function showVotes($commentId){
    $query = "SELECT * FROM votes WHERE commen_id = '".$commentId."'" ;
    $conn = conn();

    $res = mysqli_query($conn, $query);
    echo mysqli_num_rows($res);
}
?>
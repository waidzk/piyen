<?php 
function exploded($url):array{
    $linkk = $url;
    $linkk = explode('/', $linkk);

    return $linkk;
}



?>
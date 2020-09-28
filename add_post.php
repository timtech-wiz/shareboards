<?php
include_once("config/init.php");

$share = new Shares();
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($_SESSION['is_logged_in'])){
if(isset($post['submit'])){
    $data = array();
    
    $data['title'] = $post['title'];
    $data['body'] = $post['body'];
    $data['link'] = $post['link'];
    
    if($share->insertShare($data)){
      header("Location: share.php");  
    }else{
        echo "something went wrong";
    }
    
}
}else{
    header("Location: index.php");
}

$template = new Template("template/share_post/add.php");

echo $template;
<?php
include_once("config/init.php");

$user = new Users();

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($post['submit'])){
    $data = array();
   
    $data['email'] = $post['email'];
    $data['password'] = $post['password'];
    if(!empty($data['email']) && !empty($data['password'])){
        
        if($user->loginUser($data)){
            header("Location: share.php");
            
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "Please fill in all fields";
    }
}

$template = new Template("template/login_page.php");

echo $template;
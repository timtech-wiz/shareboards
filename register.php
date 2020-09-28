<?php
include_once("config/init.php");

$user = new Users();

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($post['submit'])){
    $data = array();
    $data['name'] = $post['name'];
    $data['email'] = $post['email'];
    $data['password'] = $post['password'];
    if(!empty($data['email'] || $data['email'] || $data['password'])){
        
        if($user->insertUser($data)){
            header("Location: login.php");
            
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "Please fill in all fields";
    }
}

$template = new Template("template/register_page.php");

echo $template;
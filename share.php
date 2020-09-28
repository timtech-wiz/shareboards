<?php
include_once("config/init.php");


$share = new Shares();

$template = new Template("template/share_post/shares_post.php");


$template->posts = $share->allShares();
 
 


echo $template;
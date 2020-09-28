
<?php include "../includes/headers.php"; ?>

<?php include "../includes/nav.php"; ?>
 <div class="container">
   
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a href="add_post.php" class="btn btn-success btn-share">Share Something</a>
    <?php endif; ?>
     
    <?php foreach($posts as $post) : ?>
    <div class="well">
        <h3><?php echo $post['title']; ?></h3>
        <small><?php echo $post['date_created']; ?></small>
        <hr />
        <p><?php echo $post['body']; ?></p>
        <br>
        <a href="<?php echo $post['link']; ?>" class="btn btn-default" target="_blank">Go to Website</a>
    </div>
    <?php endforeach; ?>
   
    
</div>
<?php include "../includes/footers.php"; ?>
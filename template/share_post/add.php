

<?php include "../includes/headers.php"; ?>

<?php include "../includes/nav.php"; ?>


 <div class="panel panel-default container">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something</h3>
  </div>
  <div class="panel-body">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
     <div class="form-group">
         <label for="title">Share Title</label>
         <input type="text" name="title" class="form-control" required>
     </div>
     
     <div class="form-group">
         <label for="body">Share Body</label>
<textarea name="body" class="form-control" id="" cols="30" rows="10" required></textarea> 
     </div>
     
     <div class="form-group">
         <label for="link">Link</label>
         <input type="text" name="link" class="form-control" required>
     </div>
     
     <div class="form-group">
    
         <input type="submit" name="submit" class="btn btn-primary" value="Submit">
         <a href="share.php" class="btn btn-danger">Cancel</a>
     </div>
     
      
     
     
     </form>
  </div>
</div>
<?php include "../includes/footers.php"; ?>
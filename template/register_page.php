

<?php include "includes/headers.php"; ?>

<?php include "includes/nav.php"; ?>
 
 <div class="panel panel-default container">
  <div class="panel-heading">
    <h3 class="panel-title">Register User</h3>
  </div>
  <div class="panel-body">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
     <div class="form-group">
         <label for="username">Username</label>
         <input type="text" name="name" class="form-control" required>
     </div>
     
     <div class="form-group">
         <label for="email">Email</label>
<input type="email" name="email" class="form-control" required> 
     </div>
     
     <div class="form-group">
         <label for="password">Password</label>
         <input type="password" name="password" class="form-control" required>
     </div>
     
     <div class="form-group">
    
         <input type="submit" name="submit" class="btn btn-primary" value="Submit">
          
     </div>
     
      
     
     
     </form>
  </div>
</div>
<?php include "includes/footers.php"; ?>
 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">ShareBoard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="share.php">Shares</a></li>
             

           
          </ul>
          
           <ul class="nav navbar-nav navbar-right">
           <?php if(isset($_SESSION['is_logged_in'])) : ?>
           <li><a href="">Welcome <?php echo $_SESSION["user_data"]['name']; ?></a></li>
           <li><a href="logout.php">Logout</a></li>
           
           <?php else : ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
             
        <?php endif; ?>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
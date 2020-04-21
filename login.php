 <!DOCTYPE html>
 <html>
  <head>
    <title>log in</title>
    <meta name="workview" charset="width=divice-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="1style.css">
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
 <body> 
  <section class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class='container'>
        <div class="navbar-brand">
         <a class="navbar-brand">
          <diV class="FASHA"><h4>Sign UP</h4></diV></a>  
       </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      </ul>
           <ul class="right-menu ml-auto">
                 <li><i class="fa fa-facebook-square"> </i></li>
               <li><i class="fa fa-instagram"> </i></li>
                <li><i class="fa fa-pinterest"> </i></li>
                <li><div class="input-group mb-3"><input type="text" class="form-control" placeholder="SEARCH">  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
                     </div>
                   </div>
               </li>
             </ul>
           </div>
      </div>
       
       </nav>
<div class="banner">
  <div class="banner-img">
    <img src="img/cow.jpg">
  </div>
  <div class="banner-title">
    <h1>MAKE YOUR STORY</h1>
    <h1>With ZARA</h1>
  </div>
  </div>
</section>
 <body>
 <footer class="footer fog">
	<div class="container-fluid">
		<div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">
          <form action="login.php" method="post">
            <h3 class="text-center">
            Login
            </h3>
            <?php if(count($errors)>0):?>
              <div class="alert alert-danger">
                <?php  foreach($erroes as $erroe):?>
                <li><?php  echo $errors; ?></li> 
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <div class="form-group">
              <label for="username">Username or Email</label>
              <input type="text" name="username" class="form-control form-control-lg">
            </div>


             <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control form-control-lg">
            </div>

            <div class="form-group">
              <button type="sumit" name="login-btn" class="btn btn-primary btn-block btn-ig">Login</button>
            </div>
            <p class="text-center">not yet a mumber<a href="login.php">Sing up</a></p>
          </form>
        </div>
      </div>
    </div>
    </div>
  </footer>
</body>
</html>>
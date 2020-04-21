 
 <?php require_once 'controller/authController.php'; 
 if (!isset($_SESSION['id']))
 {
   header('location: login.php');
   exit();
 }
 ?>
 
 <!DOCTYPE html>
 <html>
  <head>
    <title>Home page</title>
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
          <?php if (isset($_SESSION['verified'])):?>
         <div class="alert <?php echo $_SESSION['message'];?>"><?php echo $_SESSION['message'];
         unset ($_SESSION['message']);
         unset ($_SESSION['alert-class']);?>
         </div>
       <?php endif; ?>
         <h3>welcome, <?php echo $_SESSION['username'];?></h3>
         <a href="Index.php?logout=1" class="logout">Log out</a>
         <?php if(!$_SESSION['verified']):?>
         <div class="alert alert-warning">
           You need to verify your account. Sing in to your email account and click on the verification link we must emailed you at 
           <strong><?php echo $_SESSION['email']?></strong>
         </div>
       <?php endif; ?>
       <?php if ($_SESSION['verified']):?>

         <button class="btn btn-block btn-lg btn-primary">i am verified
         </button>
       <?php endif; ?>

      </div>
    </div>
    </div>
  </div>
  </footer>
</body>
</html>>
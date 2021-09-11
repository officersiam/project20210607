<?php
 include ("core.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <?php
    $query = $db->query("SELECT * FROM site_setting");
        while ($row = mysqli_fetch_array($query)) {
            $site_setting_title = $row['site_setting_title'];
?>
	<title>Login - <?php echo $site_setting_title; ?></title>
<?php } ?>

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form accept-charset="utf-8" method="post" action="index.php">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <label for="inputEmail" class="visually-hidden">Username</label>
    <input type="text" name="picci_username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" name="picci_password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="w-100 btn btn-lg btn-primary" name="login_btn" type="submit">Sign in</button>
  </form>
</main>


    
  </body>
</html>

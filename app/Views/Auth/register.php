<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css auth -->
    <link href="<?= base_url('assets/auth.css'); ?>" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    

<div id="wrapper">
  <div class="main-content">
    <div class="header">
      <img src="/assets/images/instaapp.png" />
    </div>
    <div class="l-part">
      <input type="text" placeholder="Email" class="input" />
      <input type="text" placeholder="Username" class="input" />
      <input type="password" placeholder="Password" class="input" />
      <input type="button" value="Register" class="btn" />
    </div>
    <br>
    
  </div>
  
  <div class="sub-content">
    <div class="s-part">
      Do have an account?<a href="/login">Login</a>
    </div>
  </div>
</div>


</body>
</html>

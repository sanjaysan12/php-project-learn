<?php
require_once __DIR__ . '/../lib/includes/User.class.php';


$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address'])
and isset($_POST['phone'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email_address'];
  $phone = $_POST['phone'];

  $error = User::signup($username,$password,$email,$phone);
  $signup = true;
}

?>
<? if ($signup){
      if(!$error){
        ?>
        <div class="jumbotron mt-3">
      <h1>Signup Success</h1>
      <p class="lead">Now you can login from <a href="/login.php"></a></p>
     
    </div>
  </div>
<?php
      }
      else {
        ?>
    ?>div class="container">
    <div class="jumbotron mt-3">
      <h1>Signup Fail</h1>
      <p class="lead">Something went wrong !<?=$error?></p>
     
    </div>
  </div><?
  } }else { ?> 

<main class="form-signup w-100 m-auto">
  <form method="post" action="signup.php">
    <img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/header_logo/1/logo-text.png" alt=""  height="50">
    <h1 class="h3 mb-3 fw-normal">Sign up Here</h1>
    <div class="form-floating">
      <input name= "username" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com">
      <label for="floatingInputUsername">Username</label>
    </div>
    <div class="form-floating">
      <input name= "phone" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com">
      <label for="floatingInputUsername">Phone</label>
    </div>
    <div class="form-floating">
      <input name= "email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2 hvr-buzz" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</main>
<? } ?>
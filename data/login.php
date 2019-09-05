<?php
session_start();
require_once('./db.php');

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="css/home.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
      <title>Candle Shop.</title>
    </head>

<body>
  <main>
    <div class='box'>
      <div class='box-form'>
        <div class='box-login-tab'></div>
        <div class='box-login-title'>
          <div class='i i-login'></div><h2>LOGIN</h2>
        </div>
        <div class='box-login'>
          <div class='fieldset-body' id='login_form'>
            <button onclick="openLoginInfo();" class='b b-form i i-more' title='Mais Informações'></button>

            <form action="./controller/log.php" method="post">
              <?php if(isset($_GET['status']) && $_GET['status'] = 'erreur' ){
                         ?>
                           <strong>Identifiants incorrects</strong>
                         <?php
                       } elseif(isset($_GET['response']) && $_GET['response'] = 'userExist'){
                         ?>
                           <strong>Ce nom d'utilisateur est déjà pris</strong>
                         <?php
                       }?>
                	<p class='field'>
                  <label for='user'>E-MAIL</label>
                  <input type='text' id='user' name='email' title='Email' />
                  <span id='valida' class='i i-warning'></span>
                </p>
              	  <p class='field'>
                  <label for='pass'>PASSWORD</label>
                  <input type='password' id='pass' name='mot_passe' title='Password' />
                  <span id='valida' class='i i-close'></span>
                </p>

                <label class='checkbox'>
                  <input type='checkbox' value='TRUE' title='Keep me Signed in' /> Keep me Signed in
                </label>

            	<input type='submit' id='do_login' value='GET STARTED' title='Get Started' />
            </form>
          </div>
        </div>
      </div>
      <div class='box-info'>
    					    <p><button onclick="closeLoginInfo();" class='b b-info i i-left' title='Back to Sign In'></button><h3>Need Help?</h3>
        </p>
    					    <div class='line-wh'></div>
        					<button onclick="" class='b-support' title='Forgot Password?'> Forgot Password?</button>
        <button onclick="" class='b-support' title='Contact Support'> Contact Support</button>
        					<div class='line-wh'></div>
        <button onclick="" class='b-cta' title='Sign up now!'><a href="creatAccount.php">CREATE ACCOUNT </a></button>
      				</div>
    </div>


     <div class='icon-credits'>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a>, <a href="http://www.flaticon.com/authors/budi-tanrim" title="Budi Tanrim">Budi Tanrim</a> & <a href="http://www.flaticon.com/authors/nice-and-serious" title="Nice and Serious">Nice and Serious</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</main>
</body>
<script type="text/javascript" src="./js/script.js"></script>
</html>

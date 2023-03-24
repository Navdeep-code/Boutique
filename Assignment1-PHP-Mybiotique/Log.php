<?php
  //Including the files
  include( 'includes/database.php' );
  include( 'includes/header.php' );
?>
<div class="contentbox">
  <h1 class="page-title"> Log In</h1>
  <div class="login">
        <form action="#" method="post" name="login__form">
            <fieldset class="login__fieldset">
                <legend>User Authentication</legend>
                <label class="login__label" for="login__Username">Username:</label>
                <input class="login__txt" type="text" name="login__Username" id="login__Username">
                <label class="login__label" for="login__password">Password:</label>
                <input class="login__txt" type="password" name="login__password" id="login__password">
                <input type="submit" value="Log in" class="login__button">
            </fieldset>
        </form>
    </div>
  <p>Or</p>
  <a id="learn" href="#">Sign up</a>
</div>

<?php
//Including the files
include( 'includes/footer.php');     
?>
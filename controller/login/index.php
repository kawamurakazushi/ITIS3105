<?php
include("../../view/header.php");
?>
<main>
  <header>
    <h2>Login</h2>
  </header>
  <form action="./authenticate_login.php" method="post">
    <label>Login
      <input type="text" class="text" value="" name="login_id">
    </label><br />

    <label>Password: 
      <input type="password" class="text" value="" name="password">
    </label>
      <br />
    <input type="submit" class="submit" value="Login" name="">
  </form>
</main>
<?php
include("../../view/footer.php");
?>

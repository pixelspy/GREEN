<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/css/style.css">
  </head>
  <body class="container">
    <?php include 'header.php'; ?>

    <main class="row">
      <h2>Sign In</h2>
      <!-- sign in -->
      <form class="row" method="post" action="../controller/sign_up_controller.php">
        <input type="text" name="n_usr_name" placeholder="Username" required>
        <input type="password" name="n_usr_password" value="" placeholder="Password" required>
        <button class="btn btn-block btn-default" type="submit">Submit</button>
      </form>

      <!-- sign up -->
      <h2>Sign Up</h2>

      <form class="row" method="post" action="../controller/sign_up_controller.php">
        <input type="text" name="n_usr_name" value="" placeholder="Username" required>
        <input type="email" name="usr_email" value="" placeholder="Email" required>
        <input type="password" name="n_usr_password" value="" placeholder="Password" required>
        <button class="btn btn-block btn-default" type="submit">Submit</button>
      </form>


    </main>

  </body>
</html>
<!-- SIGN IN AND SIGN OUT -->

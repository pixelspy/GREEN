<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <?php
    include '../view/headScript.php'; ?>
  </head>
  <body class="container">
    <?php include 'header.php'; ?>

    <main class="row well">
        <h2>Sign Up</h2>
        <form class="row" method="post" action="../controller/sign_up_controller.php">

          <div class="form-group">

                <label for="usrEmail">Email address</label>
                <input type="email" name="usr_email" class="form-control" id="usrEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
            <button class="btn btn-block btn-default" type="submit">Submit</button>
          </div>
        </form>
    </main>
  </body>
</html>

<!-- <label for="usrName">Email</label>
<input type="text" id="usrName" name="n_usr_name" value="" placeholder="Username" required>
<input type="password" name="n_usr_password" value="" placeholder="Password" required> -->

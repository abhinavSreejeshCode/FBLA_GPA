
<?php include('server.php') ?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-custom bg-dark">
      <a href="" class="navbar-brand" id="logo">GPA Calculator</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="login3.php">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">Sign up</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <body>
    <div class="container-fluid">
      <form class="mx-auto" method="post" action="register.php">
        <h5 class="text-center">Sign up</h5>
        <div class="mb-3 mt-5">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email" />
        </div>
        <div class="mb-3">
          <label class="form-label">User Name</label>
          <input type="text" class="form-control" name="username" />
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" />
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm Passoword</label>
          <input type="password" class="form-control" name="confirm_password" />
        </div>

        <button type="submit" class="btn btn-primary mt-5" name="sign_up_user">
          Create Account
        </button>
      </form>
    </div>
  </body>
</html>
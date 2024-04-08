<?php include('server.php') ?>

<!DOCTYPE html>
<html>
  <head>

    <!--link to bootstrap -->
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>

  <!--nav bar html -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-custom bg-dark">
      <a href="" class="navbar-brand" id="logo">GPA Calculator</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="login3.php">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Sign up</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <body>
    <!--takes the users password and username for validation in server.php -->
    <div class="container-fluid" >
      <form class="mx-auto" method="post" action="login3.php" >
        <h5 class="text-center">Login</h5>
        <div class="mb-3 mt-5">
          <label for="exampleInputEmail1" class="form-label ">User Name</label>
          <input
            type="text"
            class="form-control"
            name="username"
          
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
          />
          <div id="emailHelp" class="form-text mt-3">
            
          <!--if user doesn't have an account -->
            <a class="form-link">
              Create an account
            </a>
          </div>
        </div>

        <!--Button for validation -->
        <button type="submit" class="btn btn-primary mt-5" name="login_user">Login</button>
      </form>
    </div>
  </body>
</html>
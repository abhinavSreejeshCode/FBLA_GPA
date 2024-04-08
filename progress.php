
<?php include("server.php") ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="progress.css" />
  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-custom bg-dark">
      <a href="" class="navbar-brand" id="logo">GPA Calculator</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="login3.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Progress</a>
          </li>
        </ul>
      </div>
    </nav>
    <div
      class="jumbotron text-center p-5"
      style="
        background-image: url(./fbla_img.jpg);
        background-size: 1920px 200px;
        height: 200px;
      "
    >
      <h3>Previous GPA</h3>
      <p>
        To keep track of your past GPA and see your improvement we have
        implemented this page to load your previously calculated gpa.
      </p>
    </div>
  </header>
  <body>
    <div class="container-fluid justify-content-center align-items-center">
      <div class="row mt-3">
        <div class="col-sm-12">
          <div class="card text-center">
            <h1 class="card-header">unweighted GPA</h1>
            <p style="font-size: 20px;">
              <?php
              echo $rq; ?>
            </p>
          </div>
        </div>
        <div class="col-sm-12">
          <form name = "update" method="post" action="progress.php">
              <button type="submit" name="update_gpa" class="btn btn-primary">
              Show Previous GPA
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

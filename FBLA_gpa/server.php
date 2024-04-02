<?php 

  session_start();

  $username = "";
  $email = "";

  $db = mysqli_connect('localhost', 'root', '', 'login');

 

  if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($db, $query);
   

    if(mysqli_num_rows($result) ==1){
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: newGPA.html');
      exit();
    }
  }

  if(isset($_POST['sign_up_user'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];
    $password = $_POST['confirm_password'];

    $query = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$username', '$pwd', '$email')";

    mysqli_query($db, $query);

  }

?>
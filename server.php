<?php 

  session_start();


  //defines variables for later use
  $username = "";
  $email = "";

  //emtpy variable for the progress page to there is no error
  $rq = "";

  //variable to connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'login');

  //checks if the user is logged in or not
  if (!isset($_SESSION['username']) && !in_array(basename($_SERVER['PHP_SELF']), array('login3.php', 'register.php'))) {
    header('Location: login3.php'); 
    exit();
}


//takes the user input for the login page, verifies it and sends to main page if info is correct
  if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  
    //query to check if the username and password is correct
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($db, $query);
   
    //checks if the username and password are from the same row
    if(mysqli_num_rows($result) ==1){
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: newGPA.php');
      exit();
    }
  }

  //button to sign up user
  if(isset($_POST['sign_up_user'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];
    $password = $_POST['confirm_password'];

    //query to insert the user input ino the table
    $query = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$username', '$pwd', '$email')";

    mysqli_query($db, $query);

  }

  //saves the gpa into the database
  if(isset($_POST['save_gpa'])){
    $hi = $_SESSION['username'];
    $gpa = $_POST['gpa'];
    print($hi);
    print($gpa);

    //query that updates the value in the gpa collumn
    $previous_query = "UPDATE users set gpa = $gpa where username ='$hi' ";
    mysqli_query($db, $previous_query);

  }


  //displays the gpa value in the progress page
  if(isset($_POST['update_gpa'])){
    $username = $_SESSION['username'];
    $query = "SELECT gpa FROM users WHERE username='$username'";
    $result = mysqli_query($db, $query);
    $r=mysqli_fetch_array($result);
    $rq = $r[0];
  }

  

?>
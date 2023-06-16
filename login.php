<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="login.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&family=Solitreo&display=swap" rel="stylesheet" />
  <title>Login</title>
</head>

<body>
  <div class="navbar">
    <div class="navbar-leftside">
      <h1>
        <a class="name" href="index.php">ThiskneeWooorld</a>
      </h1>
    </div>

    <div class="navbar-rightside">
      <a href="login.php">Log in</a>
      <a href="signup.php">Sign up</a>
    </div>
  </div>

  <?php
    session_start();

    $loginUserName = "";
    $loginPwd = "";
    $loginEml = "";
    $loginFNm = "";
    $loginLNm = "";
    $loginCtry = "";
    $loginMarital = "";
    $loginChld = "";
    $loginAdmin = "";

    $conn = mysqli_connect("localhost", "root", "", "myDB");

    if (isset($_POST['login'])) {
      $sql = mysqli_query($conn, "SELECT * FROM users WHERE Username='" . $_POST["logUserName"] . "' AND Password='" . $_POST["LogUserPassword"] . "'");
      $num = mysqli_num_rows($sql);
      if ($num > 0) {
        $row = mysqli_fetch_array($sql);
        $_SESSION['logUserName'] = $row['Username'];
        $_SESSION['LogUserPassword'] = $row['Password'];
        $_SESSION['logUserEml'] = $row['Email'];
        $_SESSION['logUserFNm'] = $row['FirstName'];
        $_SESSION['logUserLNm'] = $row['LasttName'];
        $_SESSION['logUserCty'] = $row['Country'];
        $_SESSION['logUserMarital'] = $row['Marital'];
        $_SESSION['logUserChld'] = $row['NumOfChildren'];
        $_SESSION['loginAdmin'] = $row['IsAdmin'];
        // var_dump($_SESSION['logUserName']);
        // var_dump($_SESSION['LogUserPassword']);
        // var_dump($_SESSION['logUserEml']);
        // var_dump($_SESSION['logUserFNm']);
        // var_dump($_SESSION['logUserLNm']);
        // var_dump($_SESSION['logUserCty']);
        // var_dump($_SESSION['logUserMarital']);

        echo '<script>alert("Login successful!!")</script>';
        if($_SESSION['loginAdmin'] == 0)
        {
          header('Location: profile.php');
        }
        else
        {
          header('Location: adminMenu.php');
        }
        
      } 
      else 
      {
        echo '<script>alert("Sorry, Please Enter Correct Username and Password")</script>';
      }
    }

    mysqli_close($conn);
  ?>


  <div class="main">
    <div class="login">
      <h1>Login</h1>
      <form method="post" class="login-input">
        <label for="text">Username</label>
        <input type="text" name="logUserName" id="logUserName" value="<?php echo $loginUserName; ?>" />

        <label for="password">Password</label>
        <input type="password" name="LogUserPassword" id="LogUserPassword" value="<?php echo $loginPwd; ?>" />
        <input type="submit" name="login" value="Log In">
      </form>
    </div>
  </div>
  <img class="peppa" src="assets/Peppa_Pig_Tug_of_War.gif" alt="pull" />
</body>

</html>
<?php 
    include('server.php');

    $username = "";
    $password = "";
    $email_address = "";
    $first_name = "";
    $last_name = "";
    $country_of_origin = "";
    $marital = "";
    $numOfChd = "";
    // var_dump($_SESSION['logUserName']);
    // var_dump($_SESSION['LogUserPassword']);
    // var_dump($_SESSION['logUserEml']);
    // var_dump($_SESSION['logUserFNm']);
    // var_dump($_SESSION['logUserLNm']);
    // var_dump($_SESSION['logUserCty']);
    // var_dump($_SESSION['logUserMarital']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administrator</title>
  <link rel="stylesheet" href="login.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&family=Solitreo&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="navbar">
    <div class="navbar-leftside">
      <h1>
        <a class="name" href="index.php">Administrator</a>
      </h1>
    </div>

    <div class="navbar-rightside">
      <?php 
        if(isset($_SESSION['logUserName'])):?>
        <a href="profile.php">Welcome <span class="usernamenavbar"><?= $row['Username']?></span> </a>
        <a href="logout.php">Log out</a>
        <?php else:?>
      <a href="login.php">Log in</a>
      <a href="signup.php">Sign up</a>
      <?php endif;?>
    </div>
  </div>

  <div class="main">
    <form action="adminCreate.php">   
        <input class="larger-button" type="submit" value="Create User">
    </form>

    <form action="profile.php">   
        <input class="larger-button" type="submit" value="Edit Profile">
    </form>

    <form action="adminView.php">   
        <input class="larger-button" type="submit" value="View Database">
    </form>
  </div>

  
</body>

</html>
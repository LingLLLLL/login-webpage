
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
  <title>Profile</title>
  <link rel="stylesheet" href="login.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&family=Solitreo&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="navbar">
    <div class="navbar-leftside">
      <h1>
        <a class="name" href="index.php">ThiskneeWooorld</a>
      </h1>
    </div>

    <div class="navbar-rightside">
      <?php if(isset($_SESSION['logUserName'])):?>
        <a href="profile.php">Welcome <span class="usernamenavbar"><?= $row['Username']?></span></a>
        <a href="logout.php">Log out</a>
        <?php else:?>
      <a href="login.php">Log in</a>
      <a href="signup.php">Sign up</a>
      <?php endif;?>
    </div>
  </div>
  <div class="main">
    <div class="signup">
      <h1>Update Your Profile</h1>
      <form action="update.php" method="post" class="signin-input">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $_SESSION['logUserName']; ?>" />

        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?php echo $_SESSION['LogUserPassword']; ?>" />

        <label for="email">Email address</label>
        <input type="email" name="email_address" id="email" value="<?php echo $_SESSION['logUserEml']; ?>" />

        <label for="fName">First Name</label>
        <input type="text" name="first_name" id="fName" value="<?php echo $_SESSION['logUserFNm']; ?>" />

        <label for="lName">Last Name</label>
        <input type="text" name="last_name" id="lName" value="<?php echo $_SESSION['logUserLNm']; ?>" />

        <label for="country">Country of Origin</label>
        <input type="text" name="country_of_origin" id="country" value="<?php echo $_SESSION['logUserCty']; ?>" />
        <div class="marital">
          <h3>Marital status</h3>
          <label for="single">Single</label>
          <input type="radio" name="marital" id="single" <?php if (isset($marital) && $_SESSION['logUserMarital'] == "single") echo "checked"; ?> value="single" />
          <label for="married">Married</label>
          <input type="radio" name="marital" id="married" <?php if (isset($marital) && $_SESSION['logUserMarital'] == "married") echo "checked"; ?> value="married" />
          <label for="widowed">Widowed</label>
          <input type="radio" name="marital" id="widowed" <?php if (isset($marital) && $_SESSION['logUserMarital'] == "widowed") echo "checked"; ?> value="widowed" />
          <label for="divorced">Divorced</label>
          <input type="radio" name="marital" id="divorced" <?php if (isset($marital) && $_SESSION['logUserMarital'] == "divorced") echo "checked"; ?> value="divorced" />
          <label for="seperated">Seperated</label>
          <input type="radio" name="marital" id="seperated" <?php if (isset($marital) && $_SESSION['logUserMarital'] == "seperated") echo "checked"; ?> value="seperated" />
        </div>

        <label for="children">Number of Children</label>
        <input type="number" name="numOfChd" id="children" value="<?php echo $_SESSION['logUserChld'] ?>" />
        <button class="signup-button">Save Update</button>
      </form>
    </div>
  </div>
</body>

</html>
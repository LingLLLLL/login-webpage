<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>
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
      <a href="login.php">Log in</a>
      <a href="signup.php">Sign up</a>
    </div>
  </div>
  
  <div class="textTypeWriter">
    <h3>
      Welcome to the most famous and exilarating park attraction in the
      wooorld!!!.Sign up to get our exclusive offer!
    </h3>
  </div>

  <?php
    $username = "";
    $password = "";
    $email_address = "";
    $first_name = "";
    $last_name = "";
    $country_of_origin = "";
    $marital = "";
    $numOfChd = "";
    $isAdmin = 0;
  ?>

  <div class="main">
    <div class="signup">
      <h1>Signup</h1>
      <form action="insertData.php" method="post" class="signin-input">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $username; ?>" />

        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?php echo $password; ?>" />

        <label for="email">Email address</label>
        <input type="email" name="email_address" id="email" value="<?php echo $email_address; ?>" />

        <label for="fName">First Name</label>
        <input type="text" name="first_name" id="fName" value="<?php echo $first_name; ?>" />

        <label for="lName">Last Name</label>
        <input type="text" name="last_name" id="lName" value="<?php echo $last_name; ?>" />

        <label for="country">Country of Origin</label>
        <input type="text" name="country_of_origin" id="country" value="<?php echo $country_of_origin; ?>" />
        <div class="marital">
          <h3>Marital status</h3>
          <label for="single">Single</label>
          <input type="radio" name="marital" id="single" <?php if (isset($marital) && $marital == "single") echo "checked"; ?> value="single" />
          <label for="married">Married</label>
          <input type="radio" name="marital" id="married" <?php if (isset($marital) && $marital == "married") echo "checked"; ?> value="married" />
          <label for="widowed">Widowed</label>
          <input type="radio" name="marital" id="widowed" <?php if (isset($marital) && $marital == "widowed") echo "checked"; ?> value="widowed" />
          <label for="divorced">Divorced</label>
          <input type="radio" name="marital" id="divorced" <?php if (isset($marital) && $marital == "divorced") echo "checked"; ?> value="divorced" />
          <label for="seperated">Seperated</label>
          <input type="radio" name="marital" id="seperated" <?php if (isset($marital) && $marital == "seperated") echo "checked"; ?> value="seperated" />
        </div>

        <label for="children">Number of Children</label>
        <input type="number" name="numOfChd" id="children" value="<?php echo $numOfChd; ?>" />
        <button class="signup-button">Signup</button>
      </form>
    </div>
  </div>

</body>

</html>
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
<!-- ===================data store============================ -->

<?php
    // servername => localhost
    // username => root
    // password => empty
    // database name => myDB
    $conn = mysqli_connect("localhost", "root", "", "myDB");

    // Check connection
    if ($conn === false) 
    {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 8 values from the form data(input)
    $username =  $_REQUEST['username'];
    $password =  $_REQUEST['password'];
    $email_address =  $_REQUEST['email_address'];
    $first_name =  $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $country_of_origin =  $_REQUEST['country_of_origin'];
    $marital = $_REQUEST['marital'];
    $numOfChd = $_REQUEST['numOfChd'];
    $isAdmin = $_REQUEST['isAdmin'];

    // Performing insert query execution
    // here our table name is ourDB
    $sql = "INSERT INTO Users (Username, Password, Email, FirstName, LasttName, Country, Marital, NumOfChildren, IsAdmin) 
                        VALUES ('$username','$password','$email_address','$first_name',
                '$last_name','$country_of_origin','$marital','$numOfChd', '$isAdmin')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Regist successful!!Welcome to ThiskneeWooorld")</script>';
        header('Location: login.php');
        // echo nl2br("\n$username\n $password\n $email_address\n" . "$first_name\n $last_name\n "
        //     . "$country_of_origin\n $marital\n $numOfChd");
    } 
    else 
    {
        echo '<script>alert("ERROR: Hush! Sorry")</script>';
        echo "ERROR is : $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

    // header('Location: signup.php');

?>


</body>

</html>
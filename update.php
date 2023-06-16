<!-- ===================data UPDATE============================ -->

<?php
// servername => localhost
// username => root
// password => empty
// database name => myDB
$conn = mysqli_connect("localhost", "root", "", "myDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Taking all 8 values from the profile data
$username =  $_REQUEST['username'];
$password =  $_REQUEST['password'];
$email_address =  $_REQUEST['email_address'];
$first_name =  $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$country_of_origin =  $_REQUEST['country_of_origin'];
$marital = $_REQUEST['marital'];
$numOfChd = $_REQUEST['numOfChd'];

var_dump($username);
var_dump($password);
var_dump($email_address);
var_dump($first_name);
var_dump($last_name);
var_dump($country_of_origin);
var_dump($marital);
var_dump($numOfChd);


// Performing update query execution
// here our table name is ourDB
$sql = "UPDATE Users 
            SET Password = '$password', Email = '$email_address', 
                            FirstName = '$first_name', LasttName = '$last_name', 
                            Country = '$country_of_origin', Marital = '$marital', 
                            NumOfChildren = '$numOfChd'
            WHERE Username = '$username'";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Profile Updated successful!!")</script>';

    echo nl2br("\n$username\n $password\n $email_address\n" . "$first_name\n $last_name\n "
        . "$country_of_origin\n $marital\n $numOfChd");
    header('Location: profile.php');
} else {
    echo '<script>alert("ERROR: Hush! Sorry")</script>';
    echo "ERROR is : " . $conn->error;
}

// Close connection
mysqli_close($conn);

// header('Location: signup.php');

?>

</body>

</html>
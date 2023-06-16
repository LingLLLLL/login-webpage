<?php
session_start();
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
    }
} elseif (isset($_SESSION['logUserName'])) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE Username='" . $_SESSION['logUserName'] . "' ");
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
    }
}
mysqli_close($conn);
?>

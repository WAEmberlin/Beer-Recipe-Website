<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "recipelogin"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submitBtn'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT password FROM users where username='".$uname."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $PwdHashed = $row['password'];
        $checkPwd = password_verify($password, $PwdHashed);
        if($checkPwd === true){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
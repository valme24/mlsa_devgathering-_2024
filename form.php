<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "<script>console.log('Username: $username , Password: $password')</script>";
}
?>

<!DOCTYPE html>
<html>
<body>
    <style>
        form {
            margin: 0 auto;
            width: 250px;
            text-align: left;
        }


    </style>

    <h1>Sign Up</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Username: <input type="text" name="username">
  <br>
  Password: <input type="password" name="password">
  <br>
  <input type="submit">
</form>

</body>
</html>




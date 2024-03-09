<?php
    include("connection.php");

    if(isset($_POST['submit'])){

        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM login WHERE username =  '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header("Location:profile.php");
        }else{
            echo '<script>
                window.location.href = "login.php";
                alert("Login failed. Invalide username or password")
                </script>';
        }
    }
?>
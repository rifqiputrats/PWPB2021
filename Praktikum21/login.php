<?php
    include 'lib/library.php';

    sudahLogin();

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM t_login
                WHERE username = '$username'
                AND password = SHA1('$password')";
                
        $data = $mysqli->query($sql) or die($mysqli->error);
        
        if($data->num_rows != 0){
            $row = mysqli_fetch_object($data);
            $_SESSION['username'] = $row->username;
            $_SESSION['level'] = $row->username;
            header('location:index.php');
        } else {
            $error = "Username atau password salah";
        }   
    }
    
    include 'views/v_login.php';
    ?>
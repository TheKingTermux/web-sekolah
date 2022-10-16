<?php
    include('connect/connection.php');

    if(isset($_POST["login"])){
        $email = mysqli_real_escape_string($connect, trim($_POST['email']));
        $password = trim($_POST['password']);

        $sql = mysqli_query($connect, "SELECT * FROM login where email = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if($fetch["status"] == 0){
                    ?>
                    <script>
                        alert("Silahkan verifikasi email terlebih dahulu!");
                    </script>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                    ?>
                    <script>
                        alert("Berhasil masuk");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Email / Password salah, silahkan coba lagi!");
                    </script>
                    <?php
                }
            }
                
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="./css/masuk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <link rel="icon" href="../image/login.png">
</head>

<body>
    <div class="box">
        <div class="form">
            <form action="#" method="POST">
                <h2>Masuk bosque</h2>
                    <div class="inputBox">
                        <input type="text" id="email_address" name="email" required="required" autocomplete="off">
                        <span>Email</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="password"  name="password" required="required" autocomplete="off">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <div class="checkBox">
                        <input type="checkbox" onclick="myFunction()">
                        <span>Tampilkan Password</span>
                    </div>
                    <div class="links">
                        <a href="lupa_password.php">Lupa password ya?</a>
                    </div>
                    <input type="submit" value="Masuk" name="login">
                    <br>
                    <div class="cr">
                        <p align="center" color="#28292d">Tidak mempunyai akun? </p>
                        <br>  
                        <a align="center" href="daftar.php">Daftar disini</a>
                    </div>
                </form>
        </div>
    </div>
</body>

<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>

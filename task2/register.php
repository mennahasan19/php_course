<?php

$show = false;
$msg = "";

if(isset($_POST["register"])){
    $username =$_POST["username"];
    $password =$_POST["password"];
    $email =$_POST["email"];

    if(empty($username) || empty($email) || empty($password)){
        $msg = "Required Field ";
    }else{
        $msg = "Registration Successful";
    }
    $show = true;

    }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">

        <div class="card p-4 col-md-3">
    <form method="post">
            <h2 class="text-center text-primary">Register</h2>
            
            <?php if($show): ?>
                    <div class="alert alert-info text-center">
                        <?= $msg; ?>
                    </div>
                <?php endif; ?>

            <div class=mb-3>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="enter username" class="form-control" required>
            </div>

            <div class=mb-3>
                <label for="">Email</label>
                <input type="email" name="email" placeholder="enter email" class="form-control" required>
            </div>

            <div class=mb-3>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="enter password" class="form-control" required>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit" name="register">Register</button>

            </div>

    </form>

        </div>

    </div>
</body>

</html>
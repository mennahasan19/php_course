<?php
$show = false;
$my_password = password_hash("123", PASSWORD_DEFAULT); 
$msg = "";

if(isset($_POST["change"])){
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if(empty($current_password) || empty($new_password) || empty($confirm_password)){
        $msg = "Required fields cannot be empty.";
    } elseif (!password_verify($current_password, $my_password)) {
        $msg = "Incorrect current password.";
    } elseif ($new_password !== $confirm_password) {
        $msg = "New password doesn't match the confirmation.";
    } else {
        $msg = "Password changed successfully!";
    }
    
    $show = true;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 col-md-4">
            <h4 class="text-center text-primary">Change Password</h4>


            <?php if ($show): ?>
                <div class="alert <?= ($msg == "Password changed successfully!") ? 'alert-success' : 'alert-danger' ?> text-center">
                    <?= $msg; ?>
                </div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label>Current Password</label>
                    <input type="password" name="current_password" placeholder="Enter current password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>New Password</label>
                    <input type="password" name="new_password" placeholder="Enter new password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Confirm New Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm new password" class="form-control" required>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="change">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

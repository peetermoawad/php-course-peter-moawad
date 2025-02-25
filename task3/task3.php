<?php

$show = false;
$message = "";

if (isset($_POST['change_password'])) {
    $show = true;

    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (!$current_password || !$new_password || !$confirm_password) {
        $message = "All fields are required";
    } elseif ($current_password != "123456") {
        $message = "Incorrect current password";
    } elseif ($new_password != $confirm_password) {
        $message = "New password does not match";
    } else {
        $message = "Password changed successfully";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container col-md-6">
        <h3 class="text-center my-4">Change Password</h3>

        <form method="POST">
            <div class="form-group">
                <input type="password" name="current_password" placeholder="Current Password" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="new_password" placeholder="New Password" class="form-control my-3">
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm New Password" class="form-control my-3">
            </div>
            <div class="d-grid">
                <button name="change_password" class="btn btn-info mt-4">Change Password</button>
            </div>
        </form>
    </div>

    <?php if ($show): ?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Message</h3>
            <div class="card">
                <div class="card-body text-center">
                    <h6><?= $message ?></h6>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.js"></script>    
</body>

</html>

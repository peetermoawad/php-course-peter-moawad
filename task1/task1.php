<?php
$inputname="mohamed";
$inputpassword="123";
$Data = false;
$valid=false;
if (isset($_POST['submit'])) {
    $Data = true;
    $name = $_POST['name'];
    $password = $_POST['password'];
    if($name===$inputname&&$password===$inputpassword){
        $valid=true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css"></head>

<body>
    <div class="container col-md-6">
        <h3 class="text-center my-4"> Login Form</h3>
        <form  method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="password" placeholder="Your password" class="form-control my-3">
            </div>
            <div class="d-grid">
                <button name="submit" class=" btn btn-info mt-4"> submit Data</button>
            </div>
        </form>
    </div>
    <?php if ($Data): ?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">Your Data</h3>
            <div class="card">
                <div class="card-body">
                  <?php if($name===$inputname&&$password===$inputpassword): echo("Welcome to the website")?>
                    <h6>Your Name : <?= $name  ?> </h6>
                    <hr>
                    <h6>Your password : <?= $password  ?></h6>
                    <hr>
                    <?php else: echo("Incorrect credentials, please try again")?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
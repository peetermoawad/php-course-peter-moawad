<?php
$show = false;
if (isset($_POST['submit'])) {
    $show = true;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <div class="container col-md-6">
        <h3 class="text-center my-4"> Register Form</h3>
        <form  method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" class="form-control my-3"required>
            </div>
            <div class="form-group">
                <input type="text" name="password" placeholder="Your password" class="form-control my-3"required>
            </div>
            <div class="d-grid">
                <button name="submit" class=" btn btn-info mt-4">  Your Data</button>
            </div>
        </form>
    </div>
    <?php if ($show): ?>
        <div class="container col-md-5 my-5">
            <h3 class="text-center my-4">print Data</h3>
            <div class="card">
                <div class="card-body">
                    <h6>Your Name : <?= $name  ?> </h6>
                    <hr>
                    <h6>Your Email : <?= $email  ?></h6>
                    <hr>
                    <h6>Your password : <?= $password  ?> </h6>
                    <hr>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>


</html>
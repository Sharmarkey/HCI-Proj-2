<?php require("register.class.php"); ?>
<?php
if (isset($_POST['submit'])) {
    $user = new RegisterUser($_POST['username'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Imports the Philospher font family from Google Fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap">
    <!-- Imports the Roboto font family from Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Document</title>
</head>

<body class = "center-form">
    <div class = form-container>
        <div class="form-content">
            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <img class = "favicon-account-page" src="https://bridgeshealthwinona.org/wp-content/uploads/2024/09/fav.png">
                <h2 class = "header-bold">Create an Account</h2>
                <div>
                    <div class ="form-item">
                        <input class = "input-field paragraph-regular" type="text" placeholder="Username" name="username">
                    </div>
                    <div class ="form-item">
                        <input class = "input-field paragraph-regular" type="text" placeholder="Password" name="password">
                    </div>
                </div>
                <button class = "submit-button" type="submit" name="submit">Create Account</button>

                <p class="input-error-message paragraph-regular-italic"><?php echo @$user->error ?></p>
                <p class="success-message paragraph-regular-italic"><?php echo @$user->success ?></p>
            </form>
        </div>
    </div>
</body>

</html>
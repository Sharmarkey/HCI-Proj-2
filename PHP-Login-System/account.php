<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: login.php"); exit();
    }
    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        header("location: login.php"); exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <header>
            <h2>Welcome <?php echo $_SESSION['user']; ?>!</h2>
            <a href="?logout">Logout</a>
        </header>
        <main>
        <form action="delete_account.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
                <input type="hidden" name="username" value="<?php echo htmlspecialchars($_SESSION['user']); ?>">
                <button type="submit" name="delete_account">Delete Account</button>
            </form>
        </main>
    </div>
</body>
</html>
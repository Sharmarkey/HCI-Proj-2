<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
    exit();
}
if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header("location: login.php");
    exit();
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
</head>

<body>
    <div>
        <header>
            <h2 class="header-regular">Welcome <?php echo $_SESSION['user']; ?>!</h2>
            <a href="?logout">Logout</a>
        </header>
        <main>
            <div class = "protected-page-content-container">
                <article class=protected-page-content>
                    <h1 class="header-regular">Policies</h1>
                    <p class=paragraph-regular>Here is the Bridges Health list of policies
                        that are to be followed by all staff and volunteers.
                        Please refer to this list as needed.</p>
                </article>
                <article class=protected-page-content>
                    <h1 class="header-regular">Procedures</h1>
                    <p class=paragraph-regular>Here are the Bridges Health step-by-step procedures
                        that are to be followed by all staff and volunteers.
                        Please refer to this list as needed.</p>
                </article>
                <article class=protected-page-content>
                    <h1 class="header-regular">Training Videos</h1>
                    <p class=paragraph-regular>Here are the Bridges Health training videos that will give you
                        visual demonstrations of different tasks you will be expected to carry out during your time with us.
                        Please feel free to review these videos as needed.</p>
                </article>
            </div>
        </main>
    </div>
    <footer>
        <form action="delete_account.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
            <input type="hidden" name="username" value="<?php echo htmlspecialchars($_SESSION['user']); ?>">
            <button type="submit" name="delete_account">Delete Account</button>
        </form>
    </footer>
</body>

</html>
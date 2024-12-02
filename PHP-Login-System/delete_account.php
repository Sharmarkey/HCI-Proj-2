<?php
session_start();
$data = 'data.json';
$dataArray = json_decode(file_get_contents($data), true);
$usernameToDelete = $_SESSION['user'];
$error;
$success;

foreach ($dataArray as $key => $entry) {
    if (isset($entry['username']) && $entry['username'] === $usernameToDelete) {
        unset($dataArray[$key]); // Remove the user entry
        $found = true;
        break;
    }
    else
    {
        $this->error = "Deletion not succesful.";
    }
}

$newJsonData = json_encode(array_values($dataArray), JSON_PRETTY_PRINT);
file_put_contents($data, $newJsonData);
header("location: login.php"); exit();
?>
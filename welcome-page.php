<?php
session_start();
$user = $_SESSION['id'];

function Test_User_Input($Data)
{
    return trim(htmlspecialchars(stripslashes($Data)));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>
    <h1>Welcome <span style="color: green;"><?php echo $user ?></span> </h1>
    <div>
        <label for="searchUser">Search </label>
        <input type="text" id="username" placeholder="Please type here...." name="username">
        <label for="searchUser_error" id="searchUser_error"></label>
        <button onclick="fetch()" id="search" value="search" name="search">Search</button>
    </div>

    <div id="result"></div>
    <script src="./Controllers//js/js-search-user.js"></script>
</body>

</html>
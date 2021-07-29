<?php
require "./../../../ajax/Controllers/Database/dbConnect.php";
require "./../../../ajax/Controllers/Database/dbGetAllUsers.php";
require "./../../../ajax/Controllers/Database/dbGetUser.php";
$username = $_GET['username'];
if (empty($username)) {
    echo "<h3>Give a Username</h3>";
    return;
    //$userList = getAllUsers();
} else {
    $userList = getUser($username);
}

if (count($userList) > 0) {

    echo "<h1>User List</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Religion</th>";
    echo "<th>Date of Birth</th>";
    echo "</tr>";
    for ($i = 0; $i < count($userList); $i++) {
        echo "<tr>";
        echo "<td>" . $userList[$i]['user_id'] . "</td>";
        echo "<td>" . $userList[$i]['firstName'] . "</td>";
        echo "<td>" . $userList[$i]['lastName'] . "</td>";
        echo "<td>" . $userList[$i]['username'] . "</td>";
        echo "<td>" . $userList[$i]['email'] . "</td>";
        echo "<td>" . $userList[$i]['religion'] . "</td>";
        echo "<td>" . $userList[$i]['dob'] . "</td>";
    }
} else {
    echo "<h3>No User found!</h3>";
}

?>
</table>
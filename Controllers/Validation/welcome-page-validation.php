<?php
// require "./Controllers/Database/dbConnect.php";
require "./Controllers/Database/dbGetAllUsers.php";
require "./Controllers/Database/dbGetUser.php";
$username = $_GET['username'];
if (empty($username)) {
    $userList = getAllUsers();
} else {
    $userList = getUser($username);
}

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
if (count($userList) > 0) {
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
    echo "<h3>No records found!</h3>";
}

?>
</table>
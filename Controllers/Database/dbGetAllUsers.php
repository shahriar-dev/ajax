<?php
function getAllUsers()
{
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM USERS');
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

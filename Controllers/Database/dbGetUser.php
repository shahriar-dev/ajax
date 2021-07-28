<?php
function getUser($username)
{
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM USERS WHERE username = ?');
    $sql->bind_param('s', $username);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

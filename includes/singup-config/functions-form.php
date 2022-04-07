<?php
//Functions to validate every single field in singUp form
function emptyInputSingUp($name, $email, $username, $pwd, $pwdRepeat)
{
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        return true;
    } else {
        return false;
    }
};

function invalidUid($username)
{
    if (!preg_match(("/^[a-zA-Z0-9]*$/"), $username)) {
        return true;
    } else {
        return false;
    }
    return false;
};

function invalidEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
};

function pwdMatch($userpassword, $pwdRepeat)
{
    if ($userpassword !== $pwdRepeat) {
        return true;
    } else {
        return false;
    }
};

function emailExists($pdo, $email)
{
    $query = ("select * from registered_users where email=:email");
    $stmt = $pdo->prepare($query);
    $stmt->bindValue('email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}

function uidExists($pdo, $username)
{
    $query = ("select * from registered_users where username=:username");
    // $query = ("SELECT COUNT(*) FROM registered_users where `username`=:username and `email`=:email");
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}

function createUser($name, $username, $userpassword, $email, $pdo)
{
    
    $hashed_pwd= password_hash($userpassword, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO registered_users (fullname, username, pwd, email, activated, creationdate, lastlogin) 
    VALUES(:fullname, :username, :userpassword, :email, true, now(),now());";

    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('fullname', $name, PDO::PARAM_STR);
    $stmt->bindParam('username', $username, PDO::PARAM_STR);
    $stmt->bindParam('userpassword', $hashed_pwd, PDO::PARAM_STR);
    $stmt->bindParam('email', $email, PDO::PARAM_STR);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

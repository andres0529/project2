<?php

//Functions to validate every single field in Log In

// Note: The field Email can be used for log in using an email account or a username


function emailDoesNotExists($pdo, $email)
{
    $query = ("select * from registered_users where email=:email or username=:email");
    $stmt = $pdo->prepare($query);
    $stmt->bindValue('email', $email, PDO::PARAM_STR);
    $stmt->bindValue('username', $email, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return false;
    } else {
        return true;
    }
}

function pwdWrong($pdo, $userpassword, $email)
{
    $query = ("select pwd from registered_users where email=:email or username=:email");
    $stmt = $pdo->prepare($query);
    $stmt->bindValue('email', $email, PDO::PARAM_STR);
    $stmt->bindValue('username', $email, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($userpassword, $row['pwd'])) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
    
}

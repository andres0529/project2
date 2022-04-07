<?php

// This message shows up if the user was registered succesfully
function userCreated()
{
    if (isset($_GET["isOk"])) echo "<h4 class='success'>User Created Succesfully</h4>";
}

function handlerError()
{
    if (isset($_GET["error"])) {

        if ($_GET["error"] == "emaildoesnotexist") return "Email or Username does not registered";
        if ($_GET["error"] == "pwdwrong") return "Password Incorrect";
    }

    //this message show up when the user end the session
    if (isset($_GET["sessionend"])) {
        return "Session end";
    }

}

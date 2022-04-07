<?php


function handlerError()
{
      if (isset($_GET["error"])) {

        switch ($_GET["error"]) {

            case 'invalidusername':
                return 'username';
                break;

            case 'emailalreadyexits':
                return 'emailExists';
                break;

            case 'usernametaken':
                return 'usernametaken';
                break;

            case 'invalidemail':
                return '<---Invalid Email';
                break;
            case 'passwordsdontmatch':
                return 'password';
                break;

            default:
                '';
                break;
        }
    };
}

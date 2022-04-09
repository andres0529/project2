<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js" defer></script>
    <title>Manage Pages</title>
</head>

<body class="bg-general" id="table-users">
    <?php
    //IT Valides if the user is resgitered and has logged in session
    if (isset($_SESSION["useremail"])) {
        include './components/header.php';
        include './includes/manage-pages/table_pages.php';

        if (isset($_GET["extwrong"])) {
            echo "<div id='errorExtImg'>
            <div>
            Wrong file extension
            </div>
           </div>";
        }

        if (isset($_GET["saved"])) {
            echo "<div id='saved'>
            <div>
            Saved successfully
            </div>
           </div>";
        }
    } else {

        header("location: ./login.php");
    }

    ?>

</body>

</html>
<?php
require './includes/config.inc.php';
require_once './public/set_firstpage.php';
require './public/load_infoPage.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body id="public">
    <nav>
        <div>
            <img src="./img/uploads/<?php echo $page_logo; ?>" alt="logo">
        </div>
        <ul>
            <?php
            include './public/download-navbar.php'
            ?>
        </ul>
    </nav>
    <!-- Depend on the layout selected -->
    <?php
    if ($page_type == 'A') {
        include './includes/edit-page/wireframe_structure-a.php';
    }
    if ($page_type == 'B') {
        include './includes/edit-page/wireframe_structure-b.php';
    }
    ?>
</body>

</html>
<?php
require './includes/edit-page/download-infoPage.php';
?>

<div id="container-edit-page">
    <div id="edit-input-left">
        <h5>Page: <?php echo $page_title; ?></h5>
        <form method="POST" enctype="multipart/form-data" action="./includes/edit-page/form-control.php">
            <input type="hidden" id="id-page" name="id-page" value="<?php echo $idPagetoEdit; ?>">
            <!-- logo -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Logo</span>
                </div>
                <input id="page_logo" value="upload" name="page_logo" type="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <!-- Page title -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Page Title</span>
                </div>
                <input value=" <?php echo $page_title; ?>" id="page_title" name="page_title" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <!-- image 1 -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Image #1</span>
                </div>
                <input id="page_img1" name="page_img1" type="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <!-- image 2 -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Image #2</span>
                </div>
                <input id="page_img2" name="page_img2" type="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <!-- text #1 -->
            <div class="input-group input-group-md mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Text #1</span>
                </div>
                <input value=" <?php echo $page_text1; ?>" id="text1" name="text1" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <!-- text #2 -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Text #2</span>
                </div>
                <input value=" <?php echo $page_text2; ?>" id="text2" name="text2" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="text-center mt-5">
                <a class="nav-link" href="./manage_pages.php">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
    <!-- Preview right side -->
    <div id="edit-input-right">
        <nav>
            <div>
                <img src="./img/uploads/<?php echo $page_logo; ?>" alt="logo">
            </div>
            <ul>
                <?php
                include './includes/edit-page/download-navbarpages.php';
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
    </div>
</div>
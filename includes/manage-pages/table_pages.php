
<h1 class="mt-3">Manage Pages</h1>
<div class="container d-flex mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Created by</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php require_once './includes/manage-pages/download_pages.php'; ?>
        </tbody>
    </table>
    <div>
        <button type="button" class="btn btn-primary popUpAddNewPage mt-2 mb-3">Add New Page</button>
    </div>
</div>
<!-- POP UP TO CREATE A NEW PAGE -->
<div id="popUpAddPage" class="d-flex hidden-popup">
    <form method="POST" action="./includes/manage-pages/driver-forms/create_page_db.php">
        <h2 class="text-center mb-5">Add new page</h2>
        <h5>Choose a wireframe</h5>
        <ul>
            <li>
                <img src="./img/wf1.png" alt="wf1">
                <input required type="radio" id="A" name="wireframe" value="A" />
            </li>
            <li>
                <img src="./img/wf2.png" alt="wf2">
                <input required type="radio" id="B" name="wireframe" value="B" />
            </li>
        </ul>
        <input required name="title_page" class="form-control" placeholder="Title" type="" id="title">

        <div class="text-center mt-5">
            <button type="button" class="btn btn-primary cancelAddNewPage">Cancel</button>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>

<!-- Pop up fpr Delete the page selected -->
<div id="popUpDeletePage" class="d-flex hidden-popup">
    <form method="POST" action="./includes/manage-pages/driver-forms/delete_page_db.php">
        <h2 class="text-center mb-5">Delete</h2>
        <h5>Do you want to delete this Page?</h5>
        <input  type="text" name="id" id="id" readonly>
        <div class="text-center mt-5">
            <button type="button" class="btn btn-primary cancelPopUpDelete">Cancel</button>
            <button type="submit" class="btn btn-primary">Yes</button>
        </div>
    </form>
</div>


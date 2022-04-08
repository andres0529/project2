<h1 class="mt-3">Manage Users</h1>
<div class="container d-flex mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Full Name</th>
                <th scope="col">Password</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php require_once './includes/manage_users/download-users.php'; ?>
        </tbody>
    </table>
    <div>
        <button type="button" class="btn btn-primary addNewButton mt-2 mb-3">Add a New User</button>
    </div>
</div>

<!-- Pop up for edit the user selected -->
<?php require_once './includes/manage_users/edit-popup.php'; ?>

<!-- Pop up fpr Delete the user selected -->
<?php require_once './includes/manage_users/delete-popup.php'; ?>

<!-- Pop up fpr Delete the user selected -->
<?php require_once './includes/manage_users/add-popup.php'; ?>



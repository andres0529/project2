<div id="pop-up-edit" class="d-flex hidden-popup">
        <form method="POST" action="./includes/manage_users/driver-forms/edit-db.php">
            <h2 class="text-center mb-5">Edit User</h2>
            <!-- edit email -->
            <div class="input-group input-group-sm mb-3 edit-email">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                </div>
                <input readonly name='email' id="email" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            </div>
            <!-- edit username -->
            <div class="input-group input-group-sm mb-3 edit-username">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                </div>
                <input readonly name="username"  id="username" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <!-- edit fullname -->
            <div class="input-group input-group-sm mb-3 edit-fullname">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Full name</span>
                </div>
                <input name="fullname" id="fullname" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <!-- edit password -->
            <div class="input-group input-group-sm mb-3 edit-password">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                </div>
                <input name="password" id="password"  type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary cancelPopUpEdit">Cancel</button>
                <button type="submit" class="btn btn-primary saveEdit">Save</button>
            </div>
        </form>
    </div>
    
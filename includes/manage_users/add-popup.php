<div id="pop-up-add" class="d-flex hidden-popup">
    <form method="POST"  action="./includes/add-db.php">
        <h2 class="text-center">Add new user</h2>
        <div class="input-group input-group-sm mb-3 mt-5">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            </div>
            <input name="email" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">username</span>
            </div>
            <input name="username" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Full name</span>
            </div>
            <input name="fullname" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
            </div>
            <input name="ground" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary cancelPopUpAdd">Cancel</button>
            <button type="submit" class="btn btn-primary saveAdd">Save</button>
        </div>
    </form>
</div>
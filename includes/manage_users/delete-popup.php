<div id="popUpDelete" class="d-flex hidden-popup">
    <form method="POST" action="./includes/delete-db.php">
        <h2 class="text-center mb-5">Delete</h2>
        <h5>Do you want to delete this record?</h5>
        <input  type="text" name="email" id="email" disabled>
        <div>
            <h6 id="deleteId"></h6>
        </div>
        <div class="text-center mt-5">
            <button type="button" class="btn btn-primary cancelPopUpDelete">Cancel</button>
            <button type="submit" class="btn btn-primary">Yes</button>
        </div>
    </form>
</div>
<div class="container mt-5">
  <div class="jumbotron jumbotron-fluid">
    <div id="containerJumbo">
      <div class="container">
        <h1 class="display-4 ">Welcome <br><?php echo $_SESSION["userfullame"] ?></h1>
        <p class="lead mt-4">Georgian Wix is a powerful tool where you can let your ideas fly, upload images, edit content and much more...</p>
      </div>
      <div class="container">
        <h4>Important information about your session</h4>

        <div class="d-flex mt-5">
          <div class="d-flex flex-column">
            <span>Email registered</span>
            <span>Username registered</span>
            <span>Profile creation date</span>
            <span>Last Login</span>
          </div>
          <div class="d-flex flex-column info">
            <span><?php echo $_SESSION["useremail"]; ?></span>
            <span><?php echo $_SESSION["username"]; ?></span>
            <span><?php echo $_SESSION["creationdate"]; ?></span>
            <span><?php echo $_SESSION["lastlogin"]; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
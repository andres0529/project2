/*=============================================
Object with Properties
=============================================*/

var p = {
  //catch the current location
  location: window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  ),
  buttonsNavigation: document.querySelectorAll(".navbar-nav a"),

  //catch buttons of manage users
  editButtons: document.querySelectorAll("#table-users .edit"),
  deleteButtons: document.querySelectorAll("#table-users .delete"),
  addNewButton: document.querySelector("#table-users .addNewButton"),
  popUpEdit: document.querySelector("#table-users #pop-up-edit"),
  popUpDelete: document.querySelector("#table-users #popUpDelete"),

  cancelPopUpEdit: document.querySelector("#table-users .cancelPopUpEdit"),
  cancelPopUpDelete: document.querySelector("#table-users .cancelPopUpDelete"),

  //elements inside the popup delete
  emailtodelete: document.querySelector("#table-users #popUpDelete #email"),
  emailtoedit: document.querySelector("#table-users #pop-up-edit #email"),
  usernametoedit: document.querySelector("#table-users #pop-up-edit #username"),
  fullnametoedit: document.querySelector("#table-users #pop-up-edit #fullname"),
};

/*=============================================
Object with Methods
=============================================*/

var m = {
  /*******-------Methods for Manage Users Page--------- *****/
  //function to block all the buttons
  blockButtons: () => {
    for (let i = 0; i < p.editButtons.length; i++) {
      p.editButtons[i].setAttribute("disabled", "true");
      p.deleteButtons[i].setAttribute("disabled", "true");
    }
  },
  //function to unblock all the buttons
  unblockButtons: () => {
    for (let i = 0; i < p.editButtons.length; i++) {
      p.editButtons[i].removeAttribute("disabled");
      p.deleteButtons[i].removeAttribute("disabled");
    }
  },

  manage_users_page: () => {
    //add eventlistener to all the Edit buttons
    [...p.editButtons].map((element) =>
      element.addEventListener("click", (event) => {
        m.blockButtons();
        p.popUpEdit.classList.remove("hidden-popup");
        p.emailtoedit.value = event.target.id;
        p.usernametoedit.value = event.target.dataset.username;
        p.fullnametoedit.value = event.target.dataset.fullname;
      })
    );
    //function cancel button to edit
    p.cancelPopUpEdit.addEventListener("click", () => {
      m.unblockButtons();
      p.popUpEdit.classList.add("hidden-popup");
    });

    //add eventlistener to all the Delete buttons
    [...p.deleteButtons].map((element) => {
      element.addEventListener("click", (event) => {
        m.blockButtons();
        p.popUpDelete.classList.remove("hidden-popup");
        p.emailtodelete.value = event.target.id;
      });
    });
    //function cancel button to Delete
    p.cancelPopUpDelete.addEventListener("click", () => {
      m.unblockButtons();
      p.popUpDelete.classList.add("hidden-popup");
    });
  },

  /*******-------Main Function --------- *****/
  mainFunction: () => {
    for (let i = 0; i < p.buttonsNavigation.length; i++) {
      if ("./" + p.location == p.buttonsNavigation[i].getAttribute("href")) {
        p.buttonsNavigation[i].setAttribute(
          "class",
          "nav-item nav-link active"
        );
      }
    }
    //swith to active the script depending on the page that we are
    switch (p.location) {
      case "manage_users.php":
        m.manage_users_page();
        break;
      case "manage_users.php?error=emailexists":
        m.manage_users_page();
        break;

      default:
        break;
    }
  },
};

m.mainFunction();

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
  popUpAdd: document.querySelector("#table-users #pop-up-add"),
  cancelPopUpEdit: document.querySelector("#table-users .cancelPopUpEdit"),
  cancelPopUpDelete: document.querySelector("#table-users .cancelPopUpDelete"),
  cancelPopUpAdd: document.querySelector("#table-users .cancelPopUpAdd"),

  //elements inside the popup delete
  emailconfirmation: document.querySelector("#table-users #popUpDelete #email"),
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
    p.addNewButton.setAttribute("disabled", "true");
  },
  //function to unblock all the buttons
  unblockButtons: () => {
    for (let i = 0; i < p.editButtons.length; i++) {
      p.editButtons[i].removeAttribute("disabled");
      p.deleteButtons[i].removeAttribute("disabled");
    }
    p.addNewButton.removeAttribute("disabled");
  },


  manage_users_page: () => {
    //add eventlistener to all the Edit buttons
    [...p.editButtons].map((element) =>
      element.addEventListener("click", () => {
        m.blockButtons();
        p.popUpEdit.classList.remove("hidden-popup");
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
        p.emailconfirmation.value = event.target.id;
      });
    });
    //function cancel button to Delete
    p.cancelPopUpDelete.addEventListener("click", () => {
      m.unblockButtons();
      p.popUpDelete.classList.add("hidden-popup");
    });

    //add eventlistener to add new button
    p.addNewButton.addEventListener("click", () => {
      m.blockButtons();
      p.popUpAdd.classList.remove("hidden-popup");
    });
    //function cancel button to add
    p.cancelPopUpAdd.addEventListener("click", () => {
      m.unblockButtons();
      p.popUpAdd.classList.add("hidden-popup");
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

      default:
        break;
    }
  },
};

m.mainFunction();

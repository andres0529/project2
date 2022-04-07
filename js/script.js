/*=============================================
Object with Properties
=============================================*/

var p = {
    location: window.location.href.substr(window.location.href.lastIndexOf("/") + 1),
    buttonsNavigation: document.querySelectorAll(".navbar-nav a")
}

/*=============================================
Object with Methods
=============================================*/

var m = {
    navBarMenu: () => {
        for (let i = 0; i < p.buttonsNavigation.length; i++) {
            if (("./" + p.location) == (p.buttonsNavigation[i].getAttribute("href"))) {
                p.buttonsNavigation[i].setAttribute("class", "nav-item nav-link active")
            }
        }
    }
}

m.navBarMenu();
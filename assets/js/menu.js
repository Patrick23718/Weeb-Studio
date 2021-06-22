let button = document.querySelector(".menu-amburger");
let nav = document.querySelector("nav");
let blur = document.querySelector(".blur-element");

button.addEventListener("click", manageNavigation);

function manageNavigation(e) {
	e.preventDefault;
	blur.classList.toggle("is-visible");
	if (!nav.classList.contains("nav-visible")) {
		nav.classList.toggle("nav-visible");
	} else {
		nav.classList.remove("nav-visible");
	}
}


function lang()
{
	select = document.getElementById("lang");
	choice = select.selectedIndex;
	valeur = select.options[choice].value;

  window.location.assign("index.php.php?lang="+valeur);

}



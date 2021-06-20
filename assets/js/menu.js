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

function myFunction() {
    var elmnt = document.getElementsByClassName("col-sm-4")[0];
	
	var rowDiv = document.getElementsByClassName("row")[0].className;
document.getElementById("demo").innerHTML=rowDiv;
    var cln = elmnt.cloneNode(true);
    rowDiv.appendChild(cln);
}
import "./menu.js";
import "./particles.js";


function lang()
{
    select = document.getElementById("lang");
    choice = select.selectedIndex;
    valeur = select.options[choice].value;

  window.location.assign("index.php.php?lang="+valeur);

}
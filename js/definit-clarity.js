/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("dropdown-content");
    if (x.className === "dropdown-content") {
        x.className += " responsive";
    } else {
        x.className = "dropdown-content";
    }
} 
/* Navbar JS */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    var rightSide = document.getElementsByClassName("dim")[0];
    rightSide.style.marginLeft = "265px";
    rightSide.style.opacity = ".4";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    var rightSide = document.getElementsByClassName("dim")[0];
    rightSide.style.marginLeft = "0";
    rightSide.style.opacity = "1";
}
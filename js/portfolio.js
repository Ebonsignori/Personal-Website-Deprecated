// Toggle To Show Element On Portfolio Page
function toggleShow(element) {
    var container = document.getElementById(element.value);
    var iframe = container.firstChild;
    iframe.width = window.innerWidth + "px";
    iframe.height = window.innerHeight + "px";
    if (container.style.display === 'none') {
        container.style.display = 'block';
        element.innerHTML = "Hide Project";
    } else {
        container.style.display = 'none';
        element.innerHTML = "View Project";
    }
}

function getDocWidth() {
    var D = document;
    return Math.max(
            Math.max(D.body.scrollWidth, D.documentElement.scrollWidth),
            Math.max(D.body.offsetWidth, D.documentElement.offsetWidth),
            Math.max(D.body.clientWidth, D.documentElement.clientWidth)
            );
}
function getDocHeight() {
    var D = document;
    return Math.max(
            Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
            Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
            Math.max(D.body.clientHeight, D.documentElement.clientHeight)
            );
}

var isFullScreen = false;
var orgDimensions = new Array();

function toggleResize(element) {
    var ifr = document.getElementById(element.value);

    if (!isFullScreen) {
        element.innerHTML = "Shrink";
        orgDimensions[0] = ifr.style.width;
        orgDimensions[1] = ifr.style.height;
        ifr.style.width = (getDocWidth() - 400) + "px";
        ifr.style.height = (getDocHeight() - 400) + "px";
    } else {
        element.innerHTML = "Enlarge";
        ifr.style.width = orgDimensions[0];
        ifr.style.height = orgDimensions[1];
    }
    isFullScreen = !isFullScreen;
}
window.addEventListener("load", setup);

var more_infos;
var hide;
var compteurShowInfos = 0;

function setup() {
    more_infos = document.getElementsByClassName("more_infos");
    hide = document.getElementsByClassName("hide");
    if (more_infos.length > 0) {
        for (i = 0; i < more_infos.length; i++) {
            more_infos[i].addEventListener("click", showInfos);
            more_infos[i].customIndex = i;
        }
    }
}


function showInfos(e) {
    e.preventDefault();
    e.stopPropagation();
    activeDiv = e.target;
    compteurShowInfos++;
    if (compteurShowInfos == 1) {
        hide[activeDiv.customIndex].style.display = "contents";
    }
    if (compteurShowInfos == 2) {
        hide[activeDiv.customIndex].style.display = "none";
        compteurShowInfos = 0;
    }
}
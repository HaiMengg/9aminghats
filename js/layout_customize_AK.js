function Sidebar() {
    var screenWidth = window.innerWidth;
<<<<<<< HEAD
=======
    console.log(screenWidth);
>>>>>>> 301515ad0f5e5ab7c83d5615df5df181b1dfcb4a
    var sidebar = document.getElementById("sidebar_js");
    var sidebarInner = document.getElementById("sidebar");
    var mainPanel = document.getElementById("mainpanel");
    var container = document.getElementById("content_js")
    var p = document.getElementsByClassName("p");
    var searchbar = document.getElementById("search_bar_js");
    var searchDiv = document.getElementById("search");
    var sidebar_mobile = document.getElementById("sidebar_mobile");
    var topbar_mobile = document.getElementById("topbar_mobile");
    var banner = document.getElementById("banner_js");

    if (screenWidth <= 2144 && screenWidth >= 1760) {
        sidebar.setAttribute("class", "col-3");
        mainPanel.setAttribute("class", "col-9");
        searchDiv.setAttribute("class", "row")
        topbar_mobile.style.visibility="hidden";
        if (document.body.id == "index_body") banner.setAttribute("src", "resources/Homepage/banner.png");
        HideSidebarMobi("sidebar_mobile");
    }
    if (screenWidth < 1760) {
        sidebar.setAttribute("class", "d-none d-block");
        mainPanel.setAttribute("class", "col-12");
        searchDiv.setAttribute("class", "d-none d-block");
        topbar_mobile.style.visibility="visible";
        if (document.body.id == "index_body") banner.setAttribute("src", "resources/Homepage/banner_small.png");
    }
}

function ShowSidebarMobi(sidebarID) {
    var sidebarMobi = document.getElementById(sidebarID);
    sidebarMobi.style.visibility="visible";
}
function HideSidebarMobi(sidebarID) {
    var sidebarMobi = document.getElementById(sidebarID);
    sidebarMobi.style.visibility="hidden";
}
function SidebarSwitch() {
    HideSidebarMobi("sidebar_mobile");
    ShowSidebarMobi("sidebar_mobile_2");
}


function ScoreBackground() {
    var score = document.getElementById("score");
    var scoreInt = score.innerHTML;
    var scoreCol = document.getElementById("score_col");
    var scoreCol1 = document.getElementById("score_col_1")
    if (scoreInt >= 80) scoreCol.style="background-color: green;";
    else if (scoreInt >= 50 && scoreInt < 80) scoreCol.style="background-color: yellow;";
    else if (scoreInt == "Chưa cập nhật") {
        scoreCol.setAttribute("class", "col-12 text-center");
        scoreCol1.setAttribute("class", "d-none d-block");
        scoreCol.style="background-color: dimgrey";
    }
    else scoreCol.style="background-color: red;";
}
const body = document.querySelector("body"),
modeToggle = body.querySelector(".mode-toggle");
sidebar = body.querySelector("nav");
menuActive = body.querySelectorAll("li")
sidebarToggle = body.querySelector(".sidebar-toggle");
var dr = document.getElementById("dr");


let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark") {
body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if (getStatus && getStatus === "close") {
sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () => {
body.classList.toggle("dark");
if (body.classList.contains("dark")) {
    localStorage.setItem("mode", "dark");
} else {
    localStorage.setItem("mode", "light");
}
});

let getColor = localStorage.getItem("active");
if (getColor && getColor === "color") {
    menuActive.classList.toggle("color");
}


sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");

if (sidebar.classList.contains("close")) {
    localStorage.setItem("status", "close");
  
} else {
    localStorage.setItem("status", "open");
}
})


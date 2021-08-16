/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */
window.onscroll = function() {
  controlStickyHeader();
  scrollFunction();
};
//top button
var topbutton = document.getElementById("topbutton");
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topbutton.style.display = "block";
  } else {
    topbutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//header
var header = document.getElementById("stickyHeader");
var sticky = header.offsetTop;

function controlStickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function goBack() {
  window.history.back();
}
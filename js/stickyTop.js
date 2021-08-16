/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */
window.onscroll = function() {
  controlStickyHeader();
  controlStickyTops();
  //top button
  scrollFunction();
};

var stickyTops = document.querySelectorAll(".stickyTops");

function controlStickyTops() {
  stickyTops.forEach((stickyTop) => {
      var stickyContorller = stickyTop.offsetTop;
      if (window.pageYOffset > stickyContorller) {
        stickyTop.classList.add("sticky");
      } else {
        stickyTop.classList.remove("sticky");
      }
  })
}

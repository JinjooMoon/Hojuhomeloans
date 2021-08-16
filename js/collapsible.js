/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */
// collapse mobile category list
var coll = document.getElementsByClassName("c-collapsible");
const isOpenContents = document.querySelectorAll(".c-content");
var i;  
for (i = 0; i < coll.length; i++) {	
  coll[i].addEventListener("click", (function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      isOpenContents.forEach((isOpenContent) => {
        isOpenContent.style.maxHeight = null;
      });
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  }));
}
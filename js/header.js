/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */
var stayInColors = document.getElementsByClassName('stayInColor');
function stayInColor(e) {
    e.target.style.color = e.target.style.color ? null : 'red';
}
for (var i = 0; i < stayInColors.length; i++) {
    stayInColors[i].addEventListener('click', stayInColor);
}
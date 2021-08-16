/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */

// Start Scroll 1
var scrollControlNext1 = document.getElementById('scrollControlNext1');
scrollControlNext1.onclick = function () {
  var scrollWrapper1 = document.getElementById('scrollWrapper1');
  sideScroll(scrollWrapper1,'right',10,400,10);
};

var scrollControlPrev1 = document.getElementById('scrollControlPrev1');
scrollControlPrev1.onclick = function () {
  var scrollWrapper1 = document.getElementById('scrollWrapper1');
  sideScroll(scrollWrapper1,'left',10,400,10);
};

function sideScroll(element,direction,speed,distance,step){
  scrollAmount = 0;
  var slideTimer = setInterval((function(){
    if(direction == 'left'){
        element.scrollLeft -= step;
    } else {
        element.scrollLeft += step;
    }
    scrollAmount += step;
    if(scrollAmount >= distance){
        window.clearInterval(slideTimer);
    }
  }), speed);
}
// End Scroll 1
// Start Scroll 2
var scrollControlNext2 = document.getElementById('scrollControlNext2');
scrollControlNext2.onclick = function () {
  var scrollWrapper2 = document.getElementById('scrollWrapper2');
  sideScroll2(scrollWrapper2,'right',10,400,10);
};

var scrollControlPrev2 = document.getElementById('scrollControlPrev2');
scrollControlPrev2.onclick = function () {
  var scrollWrapper2 = document.getElementById('scrollWrapper2');
  sideScroll2(scrollWrapper2,'left',10,400,10);
};

function sideScroll2(element,direction,speed,distance,step){
  scrollAmount = 0;
  var slideTimer = setInterval((function(){
    if(direction == 'left'){
        element.scrollLeft -= step;
    } else {
        element.scrollLeft += step;
    }
    scrollAmount += step;
    if(scrollAmount >= distance){
        window.clearInterval(slideTimer);
    }
  }), speed);
}
// End Scroll 2
// Start Scroll 3
var scrollControlNext3 = document.getElementById('scrollControlNext3');
scrollControlNext3.onclick = function () {
  var scrollWrapper3 = document.getElementById('scrollWrapper3');
  sideScroll3(scrollWrapper3,'right',10,400,10);
};

var scrollControlPrev3 = document.getElementById('scrollControlPrev3');
scrollControlPrev3.onclick = function () {
  var scrollWrapper3 = document.getElementById('scrollWrapper3');
  sideScroll3(scrollWrapper3,'left',10,400,10);
};

function sideScroll3(element,direction,speed,distance,step){
  scrollAmount = 0;
  var slideTimer = setInterval((function(){
    if(direction == 'left'){
        element.scrollLeft -= step;
    } else {
        element.scrollLeft += step;
    }
    scrollAmount += step;
    if(scrollAmount >= distance){
        window.clearInterval(slideTimer);
    }
  }), speed);
}
// End Scroll 3
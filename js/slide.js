/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */
let slideIndex = 0;
  const slideTime = 3000;
  let slideInterval = setInterval(() => changeSlide(true), slideTime);

  function jumpSlide(forward) {
    clearInterval(slideInterval);
    changeSlide(forward);
    slideInterval = setInterval(() => changeSlide(true), slideTime);
  }
  function changeSlide(forward) {
    const slides = document.getElementsByClassName('topBannerSlide');
    slides[slideIndex].style.display = "none";  
    if (forward) {
      if (slideIndex + 1 > slides.length - 1) {
      slides[0].style.display = "block";
      slideIndex = 0;
      } else {
      slides[slideIndex + 1].style.display = "block";
      slideIndex ++;
      } 
    } else {
      if (slideIndex - 1 < 0) {
      slides[slides.length - 1].style.display = "block";
      slideIndex = slides.length - 1;
      } else {
          slides[slideIndex - 1].style.display = "block";
          slideIndex --;
      }
    }
  }

  let slideIndex2 = 0;
  const slideTime2 = 3000;
  let slideInterval2 = setInterval(() => changeSlide2(true), slideTime2);

  function jumpSlide2(forward) {
    clearInterval(slideInterval2);
    changeSlide2(forward);
    slideInterval2 = setInterval(() => changeSlide2(true), slideTime2);
  }
  function changeSlide2(forward) {
    const slides = document.getElementsByClassName('wideTopBannerSlide');
    slides[slideIndex2].style.display = "none";  
    if (forward) {
      if (slideIndex2 + 1 > slides.length - 1) {
      slides[0].style.display = "block";
      slideIndex2 = 0;
      } else {
      slides[slideIndex2 + 1].style.display = "block";
      slideIndex2 ++;
      } 
    } else {
      if (slideIndex2 - 1 < 0) {
      slides[slides.length - 1].style.display = "block";
      slideIndex2 = slides.length - 1;
      } else {
          slides[slideIndex2 - 1].style.display = "block";
          slideIndex2 --;
      }
    }
  }
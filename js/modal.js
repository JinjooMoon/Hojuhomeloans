/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */
//login toggle
$("a[data-toggle]").on("click", (function(e) {
  var selector = $(this).data("toggle");
  if ($(selector).css('display') != 'block') {
      $('#loginModal form').hide();
  }
  $(selector).animate({
      height: "toggle",
      opacity: "toggle"
  }, "slow");
}));
//close function
function closeFunction() {
  var modalControllers = document.querySelectorAll(".modal-controller");
  modalControllers.forEach((modalController) => {
      modalController.style.display = "none";
  })
  document.body.style.overflow = "inherit";
}
//open login modal function
function openLoginModal() {
  var loginModal = document.getElementById("loginModal");
  var openLoginModals = document.querySelectorAll(".openLoginModal");
  openLoginModals.forEach((openLoginModal) => {
      loginModal.style.display = "block";
  });
}
//open membership cancel modal
function openCancelModal() {
  var cancelModal = document.getElementById("cancelMembershipModal");
  cancelModal.style.display = "block";
  document.body.style.overflow = "hidden";
}

//modal with multiple steps
var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab
  
  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("step");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }
  
  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("step");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("cancelForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }
  
  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("step");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("dot")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }
  
  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("dot");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" bg-color-main", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " bg-color-main";
  }
/*! project-name v0.0.1 | (c) 2021 YOUR NAME | MIT License | http://link-to-your-git-repo.com */
const handleNotification = document.getElementById("handleNotification");
const othernotifications = document.querySelectorAll(".notifications");

if (handleNotification.checked == true) {
  othernotifications.forEach((othernotification) => {
    othernotification.style.display = "block";
  });
} else {
  othernotifications.forEach((othernotification) => {
    othernotification.style.display = "none";
  });
}

function handleNotifications () {
  if (handleNotification.checked == true) {
    othernotifications.forEach((othernotification) => {
      othernotification.style.display = "block";
    });
  } else {
    othernotifications.forEach((othernotification) => {
      othernotification.style.display = "none";
    });
  }
}

othernotifications.forEach((othernotification) => {
  othernotification.addEventListener('click', () => {
    const thisInput = othernotification.getElementsByTagName("input");
    thisInput.checked == true;
  });
});

const handlePassword = document.getElementById("handlePassword");
const passwords = document.querySelectorAll(".passwords");


handlePassword.onchange = function() {
  passwords.forEach((password) => {
    password.disabled = !this.checked;
  });
};

$('#newpass1, #newpass2').on('keyup', (function (){
    if ($('#newpass1').val() == $('#newpass2').val()) {
        $('#message').html('Passwords are matching! Click "Save" button.').css('color', 'green');
    } else {
        $('#message').html('Password do not match. Please try again.').css('color', 'red');
    }
}));
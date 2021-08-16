var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
}
//header menu close button
const menuContent = document.getElementById("menuContent");
const menuClose = document.getElementById("menuClose");
const menuButton = document.getElementById("menuButton");
menuClose.addEventListener("click", function() {
    menuContent.style.display = "none";
});
menuButton.addEventListener("click", function() {
    menuContent.style.display = "block";
});
window.onscroll = function() {
    var header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.classList.add('tablet-bg-color-white');
    } else {
        header.classList.remove('tablet-bg-color-white');
    }
}
const topButton = document.getElementById("topButton");
window.onscroll = function() {
    var header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.classList.add('tablet-bg-color-white');
    } else {
        header.classList.remove('tablet-bg-color-white');
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

const sendEmail = document.getElementById("sendEmail");
sendEmail.addEventListener("click", function() {
    
});

function validateForm() {
    var name = document.forms["contactform"]["name"].value;
    var email = document.forms["contactform"]["email"].value;
    var mobile = document.forms["contactform"]["mobile"].value;
    var memo = document.forms["contactform"]["memo"].value;
    if (name == null || name == "", email == null || email == "", mobile == null || mobile == "", memo == null || memo == "") {
        alert("Please fill all required field");
        return false;
    }
}
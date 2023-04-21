window.onload = form;

function form(){
const inputs = document.querySelectorAll(".input");
const form = document.getElementById('form');
const fullname = document.getElementById('fullname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const msg = document.getElementById('msg');

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

function formprocess(){
		
    const fullnamevalue = fullname.value.trim();
    const emailvalue = email.value.trim();
    const phonevalue = phone.value.trim();
    const msgvalue = msg.value.trim();
    var nameregex = /^[a-zA-Z\s]+$/;
    var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	  var numregex = /^\d{10}$/;

    //form validation starts
		if (fullnamevalue ===""){
			setErrorFor(fullname, 'Fullname cannot be blank'); //show error
      return false;
		}
    else if(!nameregex.test(fullnamevalue)){
      setErrorFor(fullname, 'Fullname should only contain alphabets');
      return false;
    }
    else{
      setSuccessFor(fullname);
    }

    if (emailvalue ===""){
			setErrorFor(email, 'Email cannot be blank'); //show error
      return false;
		}
    else if(!emailregex.test(emailvalue)){
      setErrorFor(email, 'Not a valid email');
      return false;
    }
    else{
      setSuccessFor(email);
    }

    if (phonevalue ===""){
			setErrorFor(phone, 'Phone Number cannot be blank'); //show error
      return false;
		}
    else if(!numregex.test(phonevalue)){
      setErrorFor(phone, 'Number not valid ');
      return false;
    }
    else{
      setSuccessFor(phone);
    }

    if (msgvalue ===""){
			setErrorFor(msg, 'Message cannot be blank'); //show error
      return false;
		}
    else{
      setSuccessFor(msg);
    }
		
		//form validation end here
		
		function setErrorFor(input, message){
      const inputcontainer = input.parentElement;
      const small = inputcontainer.querySelector('small');
      small.innerText = message;
      inputcontainer.className = 'input-container error';
    }
		
    function setSuccessFor(input) {
      const inputcontainer = input.parentElement;
      inputcontainer.className = 'input-container success';
    }

    function setErrorFor(textarea, message){
      const inputcontainer = textarea.parentElement;
      const small = inputcontainer.querySelector('small');
      small.innerText = message;
      inputcontainer.className = 'input-container error';
    }
		
    function setSuccessFor(textarea) {
      const inputcontainer = textarea.parentElement;
      inputcontainer.className = 'input-container success';
    }

	}
  
	form.onsubmit = formprocess; 
}
function topnavresp() {
    var x = document.getElementById("topnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
}
  function footnavresp() {
    var x = document.getElementById("footnav");
    if (x.className === "footnav") {
      x.className += " responsive";
    } else {
      x.className = "footnav";
    }
}
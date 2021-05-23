// selector function
function qs(selector) {
  return document.querySelector(selector);
}

function everyFunction() {
  name_requierment();
  email_requierment();
  phone_requierment();
  contact_Requierment();
  message_Requierment();

}

// function for name
function name_requierment() {
  name_requierment = qs("#fname").value;
  var matches = name_requierment.match(/\b[^\d\s]+\b/g);
  if (matches && matches.length >= 3) {
    alert("Name success")
  }
  else {
    alert('The name must be at least 3 words');
  }
}

// function for Email
function email_requierment() {
email_requierment = qs("#email").value;
var validEmail = /^[a-zA-Z0-9][a-zA-Z0-9_\.\-]+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/;
 if ( validEmail.test(email_requierment)) {
   alert("Valid email address!");
 }
  else {
   alert("Invalid email address!");
 }
}

// function for Phone
function phone_requierment() {
  phone_requierment = qs("#phone").value;
  var validPhone_Length = /^0?[1-9][0-9]{1,2}[0-9]{7,8}$/;
  var validPhone_Style = /^0?[. -][1-9]?[-. ][0-9]?[-. ][0-9]?[-. ][0-9]?[-. ][0-9]?[-. ][0-9]?[-. ][0-9]?[-. ][0-9]?[-. ][0-9]$/;
  var validStyle = /^0[1-9][0-9]?[. -][0-9][0-9][0-9]?[. -][0-9][0-9][0-9][0-9]$/;
  if (validPhone_Length.test(phone_requierment) || validPhone_Style.test(phone_requierment) || validStyle.test(phone_requierment)) {
    alert("Valid phone");
  }
  else {
    alert("Invalid phone");
  }
}

// function for checkbox (contact method)
function contact_Requierment() {
  var contact_Requierment = document.querySelectorAll('input[type="checkbox"]:checked').length;
  if(!contact_Requierment) {
    alert("You must select at least one contact days.");
    return false;
  }
  else{
    alert("Select days success")
    return true;
  }
}


 // function for message
function message_Requierment() {
  message_Requierment = document.getElementById('word').value;
  var matches = message_Requierment.match(/\b[^\d\s]+\b/g);
  if (matches && matches.length < 50){
    alert("not enough message");
  }
  else if (matches && matches.length > 500) {
    alert("too much enough message");
  }
  else if (matches.length >= 50 && matches.length <= 500 ) {
    alert("Input message success")
  }
}


// function countWord
function countWord() {
var words = document.getElementById("word").value;
var count = 0;
var split = words.split(' ');
for (var i = 0; i < split.length; i++) {
    if (split[i] != "") {
        count += 1;
    }
}
if (count < 50){
    document.getElementById("show").innerHTML = (50 - count) + " More Letters Are Needed";
}
else if (count >= 50 && count < 500) {
    document.getElementById("show").innerHTML =  "You Can Type " + (500 - count) + " More Letter";
}
else {
  document.getElementById("show").innerHTML =  "Deleting " + (count-500) + " Letters Is Needed";
}

}

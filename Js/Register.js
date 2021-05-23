
// selector function
function qs(selector) {
  return document.querySelector(selector);
}

// Owner_Input
  window.addEventListener("load",function(e){
  document.getElementsById("opt").style.visibility="hidden";
});

  var Owner = document.getElementById("dot-1").value;
  Owner.addEventListener("click",function(e){
    document.getElementsById("opt").style.visibility="visible";
  });
  var User = document.getElementById("dot-2").value;
  User.addEventListener("click",function(e){
    document.getElementsById("opt").style.visibility="hidden";
  });


function registerFunctionals() {
  email_requierment();
  phone_requierment();
  name_requierment();
  userName_requierment();
  city_requierment();
  address_requierment();
  zipcode_requierment();
  Country_code();
  password_requierment();
  matchPassword();

}

// function for Email
function email_requierment() {
email_requierment = qs("#email").value;
var validEmail = /^[a-zA-Z0-9][a-zA-Z0-9_\.\-]+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/;
 if ( validEmail.test(email_requierment)) {
   alert("Valid email");
 }
  else {
   alert("Invalid email");
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

// function for name
function name_requierment() {
  name_requierment = qs("#name").value;
  var matches = name_requierment.match(/\b[^\d\s]+\b/g);
  if (matches && matches.length >= 3) {
    alert("Valid Name")
  }
  else {
    alert('Invalid Name');
  }
}

// function username() {
function userName_requierment() {
  userName_requierment = qs("#username").value;
  var matches = userName_requierment.match(/\b[^\d\s]+\b/g);
  if (matches && matches.length >= 3) {
    alert("Valid User Name")
  }
  else {
    alert('Invalid User Name');
  }
}

// function for city
function city_requierment() {
  city_requierment = qs("#city").value;
  var matches = city_requierment.match(/\b[^\d\s]+\b/g);
  if (matches && matches.length >= 3) {
    alert("Valid City")
  }
  else {
    alert('Invalid City Name');
  }
}

// function for address
function address_requierment() {
  address_requierment = qs("#address").value;
  var matches = address_requierment.match(/\b[^\s]+\b/g);
  if (matches && matches.length >= 3) {
    alert("Valid Address ");
  }
  else {
    alert('Invalid Address');
  }
}

// function for zipcode
function zipcode_requierment() {
  Zip = qs("#zipcode").value;
  var Zip_re = /^[0-9]{4,7}$/;
  if (Zip_re.test(Zip)){
    alert("Valid Zipcode");
  }
  else{
    alert("Invalid Zipcode");
  }
}

// function for country code
function Country_code(){
  Countrycode = qs("#code").value;
  var matches = /^[0-9]{2}$/;
  if (matches.test(Countrycode)) {
    alert("Valid Countrycode")
  }
  else {
    alert('Invalid Coutrycode');
  }
}

// function for password
function password_requierment() {
  Password_requierment = qs("#pw").value;
  var matches = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
  if (matches.test(Password_requierment)){
    alert('Valid Password');
  }
  else {
    alert("Invalid Password");
  }
}

// function for matchpassword
function matchPassword() {
  Pw = qs('#pw').value;
  Check_pw = qs('#check_pw').value;
  if (Pw != Check_pw) {
    alert("Password Did Not Match")
  }
  else {
    alert("Valid Confirm Password")
  }
}

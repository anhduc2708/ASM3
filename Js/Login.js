function qs(selector) {
  return document.querySelector(selector);
}
function password(){
  Username= qs("#Username").value;
  password = qs("#password").value;
  if (password != 'password'){
    location.reload('Login.html');

  }
  else {
    window.location.href = "Loggedin.html";
    if(typeof(Storage) !== null){
      localStorage.setItem("#Username",document.getElementById('Username').value)
      localStorage.setItem("#password",document.getElementById('password').value)
    }
    else {
      window.location.href = "Loggedin.html";
    }
  }
}

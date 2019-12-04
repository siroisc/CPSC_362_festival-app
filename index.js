function login() {
  var email = document.getElementById('email_login').value;
  var password = document.getElementById('password_login').value;
  firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    // ...
    window.alert(errorMessage);
  });


}

function register(){

  var email = document.getElementById('email_register').value;
  var password = document.getElementById('password_register').value;

  firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {

      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // ...
      window.alert(errorMessage);
    });
}

function showLoginModal() {
  document.getElementById('loginModal').style.display='block';
  document.getElementById('registerModal').style.display='none'
}
function showRegisterModal(){
  document.getElementById('registerModal').style.display='block'
  document.getElementById('loginModal').style.display='none';
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  var modal = document.getElementById('loginModal');
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.onclick = function(event) {
  var modal = document.getElementById('registerModal');
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function login() {
  var email = document.getElementById('usrname').value;
  var password = document.getElementById('psw').value;
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
  var password = document.getElementById('psw').value;

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
  document.getElementById('registerModal').style.display='none';
}
function showRegisterModal(){
  document.getElementById('registerModal').style.display='block';
  document.getElementById('loginModal').style.display='none';
}

//function.closeLoginModal() {
//  document.getElementById('loginModal').style.display='none';
//  document.getElementById('loginModal').style.display='none';
//}


// When the user clicks anywhere outside of the modal, close it
  var modal = document.getElementById('loginModal');

window.onclick = function(event) {

  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  var modal = document.getElementById('registerModal');
window.onclick = function(event) {

  if (event.target == modal) {
    modal.style.display = "none";
  }
}

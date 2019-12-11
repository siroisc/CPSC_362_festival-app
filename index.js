// setup user's name in profile
const userName = document.querySelector('.user-name')
const setupUserName = (data) => {

  let html = '';
  data.forEach(doc => {
    const info = doc.data();
    const field = `
        <p><i class="fa fa-user-circle-o info"></i>${info.email}</p>
        <h2>${info.firstname}</h2>
    `;
    html += field
  });

  userName.innerHTML = html;
};


// set user profile info fields
const userInfo = document.querySelector('.user-info')
const setupUserInfo = (data) => {

  let html = '';
  data.forEach(doc => {
    const info = doc.data();
    const field = `

        <p><i class="fa fa-user-circle-o info"></i>${info.firstname + ' ' + info.lastname}</p>
        <p><i class="fa fa-globe info"></i>United States</p>
        <p><i class="fa fa-envelope info"></i>${info.email}</p>
        <p><i class="fa fa-key info"><a href="#" style="cursor: pointer;"></i><u>Change Password</u></a></p>
        <hr>
        <p><b><i class="fa fa-asterisk info"></i>Planned Events</b></p>
          <p>Coachella</p>
          <div class="planned-events-bar">
          </div>
    `;
    html += field
  });

  userInfo.innerHTML = html;
}


// setup materialize components
document.addEventListener('DOMContentLoaded', function() {

  var modals = document.querySelectorAll('.modal');
  //M.Modal.init(modals);

  var items = document.querySelectorAll('.form-control');
//  M.Modal.init(modals);
});


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

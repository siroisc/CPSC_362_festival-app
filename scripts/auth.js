// get data from collection: "user" in firebase
db.collection('user').get().then(snapshot => {
  setupUserInfo(snapshot.docs)
});


// listen for auth status changes
auth.onAuthStateChanged(user => {
  if (user) {
  console.log('user signed in');
}
else {
  console.log('user signed out');
}
});

$('#button').submit(function(e) {
   e.preventDefault();
   // Coding
   $('#login-form').modal('hide'); //or  $('#IDModal').modal('hide');
});


// registration
const regForm = document.querySelector('#reg-form');
regForm.addEventListener('submit', (e) => {
  e.preventDefault();

  // get user info
  const firstName = regForm['fname'].value;
  const lastName = regForm['lname'].value;
  const email = regForm['reg_email'].value;
  const password = regForm['reg_psw'].value;


  // register the user in Firebase
  auth.createUserWithEmailAndPassword(email, password).then(cred => {
    console.log(email + ' has successfully registered');

    var modal = document.querySelector('#reg-modal');
/*    M.Modal.getInstance(modal).close();
    regForm.reset();
*/
  });
});

// logout
const logout = document.querySelector('#sign-out');
logout.addEventListener('click', (e) => {
  e.preventDefault();
  auth.signOut();
});

// login Modal
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  // get user info
  const email = loginForm['email_address'].value;
  const password = loginForm['psw'].value;

  auth.signInWithEmailAndPassword(email, password).then(cred => {

    console.log(cred.user);
    // attempt to close the modal
/*
    $('#login-form').submit(function(e) {
       e.preventDefault();
       $('#login-modal').modal('hide'); //or  $('#IDModal').modal('hide');
*/

    // close the login modal and reset the Form // materialize link in index.html would need to be active
/*    var modal = document.querySelector('#login-modal');
    M.Modal.getInstance(modal).close();
    loginForm.reset();

    }); */
  });
});

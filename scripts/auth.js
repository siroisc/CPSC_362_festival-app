// listen for auth status changes
auth.onAuthStateChanged(user => {
  if (user) {
  console.log('user signed in');
}
else {
  console.log('user signed out');
}
})


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

  //  var modal = document.querySelector('#reg-modal');
    //M.Modal.getInstance(modal).close();
  //  regForm.reset();
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

    // close the login modal and reset the Form
  //  const modal = document.querySelector('#login-modal');
//    M.Modal.getInstance(modal).close();
//    loginForm.reset();
  });
});

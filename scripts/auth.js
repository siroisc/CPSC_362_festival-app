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
    var modal = document.querySelector('#reg-modal');
  //  M.Modal.getInstance(modal).close();
    regForm.reset();
  });
});

// logout
const logout = document.querySelector('#sign-out');
logout.addEventListener('click', (e) => {
  e.preventDefault();
  auth.signOut().then(() => {
    console.log('user has signed out');
  })
})

// login Modal
const loginForm = document.querySelector('#login-form');
regForm.addEventListener('submit', (e) => {

});

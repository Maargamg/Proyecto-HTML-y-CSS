document.addEventListener('DOMContentLoaded', function() {
    const loginButton = document.getElementById('loginButton');
    const loginFormContainer = document.getElementById('loginFormContainer');
  
    loginButton.addEventListener('click', function() {
      if (loginFormContainer.style.display === 'none') {
        loginFormContainer.style.display = 'block';
      } else {
        loginFormContainer.style.display = 'none';
      }
    });
  });
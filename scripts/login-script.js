const registertext = document.querySelector('.registration-drop')
const logintext = document.querySelector('.login-drop')
const registerform = document.querySelector('.signup-form')
const loginform = document.querySelector('.signin-form')

function hidelogin() {
    registertext.addEventListener('click', event => {
        loginform.style.display = 'none'
        registerform.style.display = 'block'
    }) 
}

function hideregister() {
    logintext.addEventListener('click', event => {
        registerform.style.display = 'none'
        loginform.style.display = 'block'
    }) 
}

hidelogin()
hideregister()

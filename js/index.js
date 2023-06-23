const wrapper = document.querySelector('#wrapper')
const wrapperBg = document.querySelector('#wrapper-bg')
const loginLink = document.querySelector('#login-link')
const registerLink = document.querySelector('#register-link')
const btnPopup = document.querySelector('.btnLogin')
const iconClose = document.querySelector('#icon-close')

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active')
})

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active')
})

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup')
    wrapperBg.classList.add('active')
})

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup')
    wrapperBg.classList.remove('active')

})
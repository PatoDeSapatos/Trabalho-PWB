const wrapper = document.querySelector('#wrapper')
const loginLink = document.querySelector('#login-link')
const registerLink = document.querySelector('#register-link')
const btnPopup = document.querySelector('.btnLogin')
const iconClose = document.querySelector('#icon-close')

// popup foto de perfil
const fotoPopup = document.querySelector('#foto-popup')
const btnProfilePic = document.querySelector('#botao-foto')
const inputsProfilePic = document.querySelectorAll('#foto-popup input[type=radio]')
const btnConfirmProfilePic = document.querySelector('#confirmProfilePic')
const btnCancelProfilePic = document.querySelector('#cancelProfilePic')


registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active')
})

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active')
})

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup')
})

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup')
})

btnProfilePic.addEventListener('click', ()=> {
    fotoPopup.classList.add('popupActive')
})

btnConfirmProfilePic.addEventListener('click', ()=> {
    const formInput = document.querySelector('#foto_perfil')
    const choosedPic = document.querySelector('#foto-popup input:checked')

    if (choosedPic) {
        formInput.value = choosedPic.value
        fotoPopup.classList.remove('popupActive')
    }

})

btnCancelProfilePic.addEventListener('click', ()=> {
    document.querySelector('#foto_perfil').value = ''
    fotoPopup.classList.remove('popupActive')
})

for (let i = 0; i < inputsProfilePic.length; i++) {
    inputsProfilePic[i].addEventListener('change', ()=> {
        const label = document.querySelectorAll('#foto-popup label')

        for (let j = 0; j < label.length; j++) {
            if (inputsProfilePic[i].id == label[j].getAttribute('for')) {
                label[j].classList.add('active-label')
            } else {
                label[j].classList.remove('active-label')
            }
        }

        
    })
}


const inputEditar = document.querySelectorAll('form#editar-perfil div.input')
const formEditarSenha = document.querySelector('#form-editar-senha')
const editarFoto = document.querySelector('#popup-editar-foto')

for (let index = 0; index < inputEditar.length; index++) {
    const element = inputEditar[index];

    element.addEventListener('click', () => {
        const input = document.createElement('input')
        input.setAttribute('name', element.id)
        input.setAttribute('placeholder', element.id)
        input.setAttribute('type', 'text')
        input.classList.add(element.classList)
        element.parentNode.replaceChild(input, element)
    })

    document.querySelector('#btn-mudar-senha').addEventListener('click', () =>{
        formEditarSenha.classList.add('active')
    })
}


const comentarios = document.querySelectorAll('div#divComentario span') 

for (let index = 0; index < comentarios.length; index++) {
    const element = comentarios[index];

    element.addEventListener('click', () => {
        document.querySelector('#form-comentario').classList.add('active')
        document.querySelector('#idNovoComentario').value = element.id
    })
    
}

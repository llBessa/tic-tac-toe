let escolhaSimbolos = document.getElementById('escolhaSimbolos')
let simbolos = escolhaSimbolos.getElementsByTagName('input')

function submitForm() {
    let escolha = document.createElement('input')
    escolha.type = 'text'
    escolha.hidden = true
    escolha.name = 'simbolo'
    escolha.value = this.value
    
    let submit = document.createElement('button')
    submit.type = 'submit'
    submit.hidden = true
    escolhaSimbolos.appendChild(escolha)
    submit = escolhaSimbolos.appendChild(submit)
    submit.click()
}

simbolos[0].onclick = submitForm
simbolos[1].onclick = submitForm

console.log({escolhaSimbolos})
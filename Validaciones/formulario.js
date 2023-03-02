
function verpassword()
{
    var tipo = document.getElementById("txtpassword");
    if(tipo.type == "password")
    {
        tipo.type = "text";
    }
    else
    {
        tipo.type = "password";
    }
}


const name = document.getElementById('txtusuario')
const password = document.getElementById('txtpassword')
const form = document.getElementById('form')
const paragraph = document.getElementById('warnings')

form.addEventListener('submit', e=>{

    e.preventDefault()

    let warnings = ""
    let regExpName = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
    let regExpPassword = /^.{4,12}$/
    let enter = false
    paragraph.innerHTML = ""
    if(!regExpName.test(name.value))
    {
        warnings += 'Utiliza solamente lertras <br>'
        enter = true
    }
    if(!regExpPassword.test(password.value))
    {
        warnings += 'hola <br>'
        enter = true
    }
    if (enter){
        paragraph.innerHTML = warnings
    }
})
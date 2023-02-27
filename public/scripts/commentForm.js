

let formulaire = document.getElementById('myForm1');

// let formulaire = document.myForm1;

// On recuperer chacun des inputs du formulaire dans des variables
let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let email1 = document.getElementById("email1");
let subject1 = document.getElementById("subject1");

// On recupere toutes les div qui contiendront les messages d'error ou succes
let fnameError = document.getElementById("fname-error"); //requis
let lnameError = document.getElementById("lname-error"); //requis
let email1Error = document.getElementById("email1-error"); //requis
let subject1Error = document.getElementById("subject1-error");

function contacter()
{
    if(fname.value == "" || fname.value.trim() == "")
    {
        fnameError.innerHTML = "<p>Ce champs est requis.</p>";
        // Enleve la classe success
        fnameError.classList.remove("success");
        fnameError.classList.add("error");
    } else if (fname.value.trim().length < 2) {
        fnameError.innerHTML = "<p>Le prénom doit faire minimum 2 caractères.</p>";
        fnameError.classList.remove("success");
        fnameError.classList.add("error");
    } else if (fname.value.trim().length > 150){
        fnameError.innerHTML = "<p>Le prénom doit faire maximum 150 caractères.</p>";
        fnameError.classList.remove("success");
        fnameError.classList.add("error");
    } else {
        fnameError.innerHTML = "<p>Le champs est valide :)</p>";
        fnameError.classList.remove("error");
        fnameError.classList.add("success");
    }

    if(lname.value == "" || lname.value.trim() == "") 
    {
        lnameError.innerHTML = "<p>Ce champs est requis</p>";
        // Enleve la classe success
        lnameError.classList.remove("success");
        lnameError.classList.add("error");
    } else if (lname.value.trim().length < 2) {
        lnameError.innerHTML = "<p>Le nom de famille doit faire minimum 2 caractères.</p>";
        lnameError.classList.remove("success");
        lnameError.classList.add("error");
    } else if (lname.value.trim().length > 150){
        lnameError.innerHTML = "<p>Le nom de famille doit faire maximum 150 caractères.</p>";
        lnameError.classList.remove("success");
        lnameError.classList.add("error");
    } else {
        lnameError.innerHTML = "<p>Le champs est valide :)</p>";
        lnameError.classList.remove("error");
        lnameError.classList.add("success");
    }

if(email1.value == "" || email1.value.trim() == "") 
{
    email1Error.innerHTML = "<p>Ce champs est requis</p>";
    // Enleve la classe success
    email1Error.classList.remove("success");
    email1Error.classList.add("error");
} else if (email1.value.trim().length < 2) {
    email1Error.innerHTML = "<p>L'adresse email doit faire minimum 2 caractères.</p>";
    email1Error.classList.remove("success");
    email1Error.classList.add("error");
} else if (email1.value.trim().length > 150){
    email1Error.innerHTML = "<p>L'adresse email doit faire maximum 150 caractères.</p>";
    email1Error.classList.remove("success");
    email1Error.classList.add("error");
} else {
    email1Error.innerHTML = "<p>Le champs est valide :)</p>";
    email1Error.classList.remove("error");
    email1Error.classList.add("success");
}

if(subject1.value == "" || subject1.value.trim() == "") 
{
    subject1Error.innerHTML = "<p>Ce champs est requis</p>";
    // Enleve la classe success
    subject1Error.classList.remove("success");
    subject1Error.classList.add("error");
} else if (subject1.value.trim().length < 2) {
    subject1Error.innerHTML = "<p>Ce texte doit faire minimum 2 caractères.</p>";
    subject1Error.classList.remove("success");
    subject1Error.classList.add("error");
} else if (subject1.value.trim().length > 4000){
    subject1Error.innerHTML = "<p>Ce texte doit faire maximum 4000 caractères.</p>";
    subject1Error.classList.remove("success");
    subject1Error.classList.add("error");
} else {
    subject1Error.innerHTML = "<p>Le champs est valide :)</p>";
    subject1Error.classList.remove("error");
    subject1Error.classList.add("success");
}
}
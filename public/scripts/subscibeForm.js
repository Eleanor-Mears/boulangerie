// https://www.codebrainer.com/blog/contact-form-in-javascript

let fields = {}

document.addEventListener("DOMContentLoaded", function () {
    fields.firstName = document.getElementById('firstName');
    fields.lastName = document.getElementById('lastName');
    fields.email = document.getElementById('email');
    fields.checkbox = document.getElementById('checkbox');
})

function isNotEmpty(value) {
    if (value == null || typeof value == 'undefined') return false;
    return (value.length > 0);
}

function isEmail(email) {
    let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    return regex.test(String(email).toLowerCase());
}

function fieldValidation(field, validationFunction) {
    if (field == null) return false;

    let isFieldValid = validationFunction(field.value)
    if (!isFieldValid) {
        field.className = 'placeholderRed';
    } else {
        field.className = '';
    }

    return isFieldValid;
}

function validEmail () {
    var valid = true;
    valid &= fieldValidation(fields.email, isEmail);

    return valid;
}   

function validName () {
    var valid=true;

valid &= fieldValidation(fields.firstName, isNotEmpty);
    valid &= fieldValidation(fields.lastName, isNotEmpty);

    return valid;
}

function isValid() {
    var valid = true;

    valid &= fieldValidation(fields.firstName, isNotEmpty);
    valid &= fieldValidation(fields.lastName, isNotEmpty);
    valid &= fieldValidation(fields.email, isEmail);

    return valid;
}

class User {
    constructor(firstName, lastName, email, checkbox) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.checkbox = checkbox;
    }
}

function sendContact() {
    if (!validEmail()) {
        alert("Please enter a valid email address.");
    } else if (!validName()) {
        alert("Please enter your full name.");
    } else if (isValid()) {
        let usr = new User(firstName.value, lastName.value, email.value, checkbox.checked);
        alert(`Hi, ${usr.firstName}! Thanks for subscribing! You can opt out at any time.`)
    } else {
        alert("Error")
    }
}
function openForm() {
    document.getElementById("myForm").style.display = "block";
    document.getElementById("overlay").style.display = "block";

}

function closeForm() {
    if (!isValid()) {
        document.getElementById("myForm").style.display = "block";
    document.getElementById("overlay").style.display = "block";
    } else {
    document.getElementById("myForm").style.display = "none";
    document.getElementById("overlay").style.display = "none";}
}

function closeForm1() {
    document.getElementById("myForm").style.display = "none";
    document.getElementById("overlay").style.display = "none";}

const fullNameElement = document.getElementById("name");
const dateOfBirthElement = document.getElementById("dateofbirth");
const emailElement = document.getElementById("email");
const numberElement = document.getElementById("number");
const genderElement = document.getElementById("gender");
const occupationElement = document.getElementById("occupation");
const idTypeElement = document.getElementById("idtype");
const idNumberElement = document.getElementById("idnumber");
const issueAuthorityElement = document.getElementById("issueauthority");
const issueDateElement = document.getElementById("issuedate");
const issueStateElement = document.getElementById("issuestate");
const expiryDateElement = document.getElementById("expirydate");

function handleForm() {
    let isValid = true;

    clearErrors();

    if (!fullNameElement.value) {
        showError("nameError", "Full Name is required.");
        isValid = false;
    }

    if (!dateOfBirthElement.value) {
        showError("dobError", "Date of Birth is required.");
        isValid = false;
    }

    if (!emailElement.value || !validateEmail(emailElement.value)) {
        showError("emailError", "Valid Email is required.");
        isValid = false;
    }

    if (!numberElement.value || !validatePhoneNumber(numberElement.value)) {
        showError("numberError", "Valid Phone Number is required.");
        isValid = false;
    }

    if (!genderElement.value) {
        showError("genderError", "Gender is required.");
        isValid = false;
    }

    if (!occupationElement.value) {
        showError("occupationError", "Occupation is required.");
        isValid = false;
    }

    if (!idTypeElement.value) {
        showError("idtypeError", "ID Type is required.");
        isValid = false;
    }

    if (!idNumberElement.value) {
        showError("idnumberError", "ID Number is required.");
        isValid = false;
    }

    if (!issueAuthorityElement.value) {
        showError("issueauthorityError", "Issue Authority is required.");
        isValid = false;
    }

    if (!issueDateElement.value) {
        showError("issuedateError", "Issue Date is required.");
        isValid = false;
    }

    if (!issueStateElement.value) {
        showError("issuestateError", "Issue State is required.");
        isValid = false;
    }

    if (!expiryDateElement.value) {
        showError("expirydateError", "Expiry Date is required.");
        isValid = false;
    }

    if (isValid) {
        console.log("Form submitted successfully.");
        // Perform the form submission or further processing here
    }

    return isValid; // This will prevent form submission if the form is not valid
}

function clearErrors() {
    document.querySelectorAll(".error").forEach(errorSpan => {
        errorSpan.textContent = "";
    });
}

function showError(elementId, errorMessage) {
    document.getElementById(elementId).textContent = errorMessage;
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

function validatePhoneNumber(number) {
    const re = /^\d{11}$/;
    return re.test(String(number));
}
function validation() {
    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let businessOS = document.getElementById("businessOS").value;
    let freqby = document.getElementById("freqby").value;
    let lreqby = document.getElementById("lreqby").value;
    let emailR = document.getElementById("emailR").value;
    let phone = document.getElementById("phone").value;
    let fholders = document.getElementById("fholders").value;
    let lholders = document.getElementById("lholders").value;
    let add1 = document.getElementById("add1").value;
    let add2 = document.getElementById("add2").value;
    let city = document.getElementById("city").value;
    let state = document.getElementById("state").value;
    let postalcode = document.getElementById("Postalcode").value;
    let country = document.getElementById("country").value;
    let emailC = document.getElementById("emailC").value;
    let project = document.getElementById("project").value;
    let jobdes = document.getElementById("jobdes").value;

    if (fname == "" || lname == "" || businessOS == "" || freqby == "" || lreqby =="" || emailR=="" || phone=="" || fholders == "" || lholders =="" || add1=="" || add2=="" || city=="" || state=="" || postalcode=="" || country=="" || emailC=="" || project=="" || jobdes=="") {
        alert("Please fill in all the fields !");
        return false;
    }


    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!emailC.match(emailpattern)) {
        alert('Email of "Certificate Holder" is not in proper format !');
        return false
    }

    if (!emailR.match(emailpattern)) {
        alert('Email of "Requested By" is not in proper format !');
        return false;
    }

    var numberpattern = /^\d{10}$/; //checks if the input is 10 digit numeric, no comma, no spaces
    if (!phone.match(numberpattern)) {
        alert('The phone number for "requested by" should contain only numbers !');
        return false;
    }
}
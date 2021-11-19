var wallet = document.getElementById("wallet");
var card = document.getElementById("card");

var currentChoice = document.getElementById("choose-method");
var method = document.getElementById("methods");

function dropMethods() {
    method.classList.toggle("show");
}

function chooseWallet() {
    method.classList.toggle("show");
    if (wallet.innerHTML === "--Chọn phương thức--") {
        currentChoice.innerHTML = "--Chọn phương thức--";
        wallet.innerHTML = "Ví điện tử";
        card.innerHTML = "Thẻ ngân hàng";
        document.getElementById("wallet-info").style.display = "none";
        document.getElementById("card-info").style.display = "none";
        document.getElementById("conf-btn").style.display = "none";
    }
    else {
        currentChoice.innerHTML = "Ví điện tử";
        wallet.innerHTML = "--Chọn phương thức--";
        card.innerHTML = "Thẻ ngân hàng";
        document.getElementById("wallet-info").style.display = "block";
        document.getElementById("card-info").style.display = "none";
        document.getElementById("conf-btn").style.display = "block";
        document.getElementById("conf-btn").style.bottom = "5%";
        document.getElementById("conf-btn").style.right = "5%";
    }
}

function chooseCard() {
    method.classList.toggle("show");
    if (card.innerHTML === "--Chọn phương thức--") {
        currentChoice.innerHTML = "--Chọn phương thức--";
        wallet.innerHTML = "Ví điện tử";
        card.innerHTML = "Thẻ ngân hàng";
        document.getElementById("wallet-info").style.display = "none";
        document.getElementById("card-info").style.display = "none";
        document.getElementById("conf-btn").style.display = "none";
    }
    else {
        currentChoice.innerHTML = "Thẻ ngân hàng";
        wallet.innerHTML = "Ví điện tử";
        card.innerHTML = "--Chọn phương thức--";
        document.getElementById("wallet-info").style.display = "none";
        document.getElementById("card-info").style.display = "block";
        document.getElementById("conf-btn").style.display = "block";
        document.getElementById("conf-btn").style.bottom = "19%";
        document.getElementById("conf-btn").style.right = "21%";
    }
}

function chooseCardType(type) {
    if (type.id === "master") {
        document.getElementById("master-card").style.border = "3px solid #8D68F4";
        document.getElementById("visa-card").style.border = "0px solid #8D68F4";
    }
    if (type.id === "visa") {
        document.getElementById("visa-card").style.border = "3px solid #8D68F4";
        document.getElementById("master-card").style.border = "0px solid #8D68F4";
    }
}

// Định dạng số thẻ ngân hàng
document.getElementById('numb').addEventListener('keydown', function (typeNumb) {
    var validForm = typeNumb.target.value.length;
    if (typeNumb.key === 'Backspace' && (typeNumb.target.value.length === 5 || typeNumb.target.value.length === 10 || typeNumb.target.value.length === 15)) {
        typeNumb.target.value = typeNumb.target.value.slice(0, -1);
    }
    console.log(typeof typeNumb.target.value);
    if (typeNumb.key === '0' || typeNumb.key === '1' || typeNumb.key === '2' || typeNumb.key === '3' || typeNumb.key === '4' || typeNumb.key === '5' || typeNumb.key === '6' || typeNumb.key === '7' || typeNumb.key === '8' || typeNumb.key === '9') {
        if (validForm === 4 || validForm === 9 || validForm === 14)
            typeNumb.target.value = typeNumb.target.value + ' ';
    } 
});

// Định dạng tháng và năm hết hạng
document.getElementById('expire').addEventListener('keydown', function (typeExpiry) {
    var month = typeExpiry.target.value;
    if (typeExpiry.key === 'Backspace' && typeExpiry.target.value.length === 3) {
        typeExpiry.target.value = typeExpiry.target.value.slice(0, -1);
    }
    if (typeExpiry.key === '0' || typeExpiry.key === '1' || typeExpiry.key === '2' || typeExpiry.key === '3' || typeExpiry.key === '4' || typeExpiry.key === '5' || typeExpiry.key === '6' || typeExpiry.key === '7' || typeExpiry.key === '8' || typeExpiry.key === '9') {
        if (month.length === 2) 
            typeExpiry.target.value = typeExpiry.target.value + "/";
    }
});

//Định dạng CVV
document.getElementById('CVV').addEventListener('input', function (securityCode) {
    var CVV = securityCode.target.value;
    if (parseInt(CVV) >= 0 || parseInt(CVV) <= 9) {
        return;
    }
    else {
        securityCode.target.value = "";
    }
})
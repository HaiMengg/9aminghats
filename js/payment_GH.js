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

function confirmWalletPurchase() {
    var walletMainInfo = document.getElementById("w-main-info");
    walletMainInfo.innerHTML = "Thanh toán thành công";
    setTimeout(function(){
        window.location.href = "index.php";
    }, 1000);
}

function confirmCardPurchase() {
    var cardMainInfo = document.getElementById("c-main-info");
    cardMainInfo.innerHTML = "Đang chờ đợi giao dịch từ người dùng...";
    setTimeout(function(){
        cardMainInfo.innerHTML = "Giao dịch thành công";
        setTimeout(function(){
            window.location.href = "index.php";
        }, 1000);
    }, 2000);
}

// Định dạng số thẻ ngân hàng
document.getElementById('numb').addEventListener('input', function (cNumber) {
    var validForm = cNumber.target.value.length;
    if (parseInt(cNumber.target.value) >= 0 || parseInt(cNumber.target.value) <= 9) {
        if (validForm === 4 || validForm === 9 || validForm === 14)
            cNumber.target.value = cNumber.target.value + " ";
    } 
    else {
        cNumber.target.value = "";
    }
});
document.getElementById('numb').addEventListener('keydown', function (retypeNumb) {
    if (retypeNumb.key === 'Backspace' && (retypeNumb.target.value.length === 5 || retypeNumb.target.value.length === 10 || retypeNumb.target.value.length === 15)) {
        retypeNumb.target.value = retypeNumb.target.value.slice(0, -1);
    }
});

// Định dạng tháng và năm hết hạng
document.getElementById('expire').addEventListener('input', function (expireMonth) {
    var month = expireMonth.target.value;
    if (parseInt(month) >= 0 || parseInt(month) <= 9) {
        if (month.length === 2) 
            expireMonth.target.value = expireMonth.target.value + "/";
    } 
    else {
        expireMonth.target.value = "";
    }
});
document.getElementById('expire').addEventListener('keydown', function (retypeExpiry) {
    if (retypeExpiry.key === 'Backspace' && retypeExpiry.target.value.length === 3) {
        retypeExpiry.target.value = retypeExpiry.target.value.slice(0, -1);
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
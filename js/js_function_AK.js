function CreateCarousel(elementNum, carouselID, gameDataArray) {           //elementNum: int, carouselID: String, gameDataArray: array of game data obtained from the FindGames() pHp function
    var gameNameArray = gameDataArray[0];
    var gameLogoArray = gameDataArray[1];
    var gameNumArray = gameDataArray[2];

    var carousel = document.createElement("div");    //1
    carousel.setAttribute("id", carouselID);
    carousel.setAttribute("class", "carousel slide");
    carousel.setAttribute("data-bs-slide", "carousel");
    var carouselInner = document.createElement("div");  //2
    carouselInner.setAttribute("class", "carousel-inner");
    carouselInner.style="padding: 3%";
    carousel.appendChild(carouselInner);

    var slideNum = 0;       //3
    var elementNumCount = 0;
    //3 elements per slide
    if (elementNum % 3 == 0) slideNum = elementNum / 3;              //If x number of elements is divisible by 3 then x elements can be equally split into (x/3) number of slides
    else slideNum = Math.ceil(elementNum / 3);                       //Otherwise, if x < 3 then put x elements in a single slide and leave them be, else if there are more slides than can be split
                                                                            //into (x/3) number of slides then leave the remaining elements in the next empty slide
    for (let i = 1; i <= slideNum; i++) {
        var carouselItem = document.createElement("div");
        if (i == 1) {  
            carouselItem.setAttribute("class", "carousel-item active"); //3a             //If first slide, then set it to active (primary slide)
        }
        else {
            carouselItem.setAttribute("class", "carousel-item");   //3b
        }
        var row = document.createElement("div");
        row.setAttribute("class", "row align-items-center");
        carouselInner.appendChild(carouselItem).appendChild(row);

        for (let x = 1; x <= 3; x++) {                          //Repeatedly creates different elements of the same slide
            var element = document.createElement("div");
            element.setAttribute("class", "col-4 text-center");
            element.setAttribute("style", "padding: 1%");
            var elementContent = document.createElement("img");           //The images are still unstable so LATER
            elementContent.src = gameLogoArray[elementNumCount];
            elementContent.id = "gameLogo";
            elementContent.setAttribute("onclick", "DataToPHP('" + gameNameArray[elementNumCount] + "', '" + gameNumArray[elementNumCount] + "')");
            row.appendChild(element).appendChild(elementContent);
            elementNumCount++;
        }
    }

    var carouselPrev = document.createElement("button");
    carouselPrev.setAttribute("class", "carousel-control-prev");
    carouselPrev.setAttribute("data-bs-target", "#" + carouselID);
    carouselPrev.setAttribute("role", "button");
    carouselPrev.setAttribute("data-bs-slide", "prev");
    var prevSpan = document.createElement("span");
    prevSpan.setAttribute("class", "carousel-control-prev-icon");
    prevSpan.setAttribute("aria-hidden", "true");
    carousel.appendChild(carouselPrev).appendChild(prevSpan);

    var carouselNext = document.createElement("button");
    carouselNext.setAttribute("class", "carousel-control-next");
    carouselNext.setAttribute("data-bs-target", "#" + carouselID);
    carouselNext.setAttribute("role", "button");
    carouselNext.setAttribute("data-bs-slide", "next");
    var nextSpan = document.createElement("span");
    nextSpan.setAttribute("class", "carousel-control-next-icon");
    nextSpan.setAttribute("aria-hidden", "true");
    carousel.appendChild(carouselNext).appendChild(nextSpan);

    return carousel;
}

function CreateCarouselSingle(elementNum, carouselID, gameImgArray, youtubeLink) {           //elementNum: int, carouselID: String, gameImgArray: array of game image data obtained from the GetGameImage() pHp function
    var carousel = document.createElement("div");    //1
    carousel.setAttribute("id", carouselID);
    carousel.setAttribute("class", "carousel slide");
    carousel.setAttribute("data-bs-interval", "false");
    var carouselInner = document.createElement("div");  //2
    carouselInner.setAttribute("class", "carousel-inner");
    carousel.appendChild(carouselInner);

    for (let i = 0; i <= elementNum; i++) {
        var carouselItem = document.createElement("div");
        carouselInner.appendChild(carouselItem);
        if (i == 0) {  
            carouselItem.setAttribute("class", "carousel-item active"); //3a             //If first slide, then set it to active (primary slide)
            carouselItem.style="padding: 5%"
            var iframe = document.createElement("iframe");
            iframe.src="https://www.youtube.com/embed/" + youtubeLink + "?autoplay=1&mute=1";
            iframe.style="width: 100%; height: 60vh;";
            carouselItem.appendChild(iframe);
        }
        else {
            carouselItem.setAttribute("class", "carousel-item");   //3b
            var row = document.createElement("div");
            row.setAttribute("class", "row");
            carouselItem.appendChild(row);
                            //Repeatedly creates different elements of the same slide
            var element = document.createElement("div");
            element.setAttribute("class", "col-12");
            element.setAttribute("style", "padding: 5%");
            var elementContent = document.createElement("img");           //The images are still unstable so LATER
            elementContent.src = gameImgArray[i - 1];
            elementContent.id = "gameImg";
            row.appendChild(element).appendChild(elementContent);
        }
    }

    var carouselPrev = document.createElement("button");
    carouselPrev.setAttribute("class", "carousel-control-prev");
    carouselPrev.setAttribute("data-bs-target", "#" + carouselID);
    carouselPrev.setAttribute("role", "button");
    carouselPrev.setAttribute("data-bs-slide", "prev");
    var prevSpan = document.createElement("span");
    prevSpan.setAttribute("class", "carousel-control-prev-icon");
    prevSpan.setAttribute("aria-hidden", "true");
    carousel.appendChild(carouselPrev).appendChild(prevSpan);

    var carouselNext = document.createElement("button");
    carouselNext.setAttribute("class", "carousel-control-next");
    carouselNext.setAttribute("data-bs-target", "#" + carouselID);
    carouselNext.setAttribute("role", "button");
    carouselNext.setAttribute("data-bs-slide", "next");
    var nextSpan = document.createElement("span");
    nextSpan.setAttribute("class", "carousel-control-next-icon");
    nextSpan.setAttribute("aria-hidden", "true");
    carousel.appendChild(carouselNext).appendChild(nextSpan);

    return carousel;
}

function DisplayGames(divID, gameDataArray) {                              //divID: String
    var categorySpan = document.createElement("span");
    var categoryP = document.createElement("p");
    var categoryRing = document.createElement("img");
    categoryRing.src="resources/Homepage/ring.png";
    categoryRing.id="categoryRing";
    categorySpan.appendChild(categoryRing);
    categoryP.appendChild(categorySpan);
    
    var carouselID = "";
    if (divID.includes("new")) {
        categoryP.innerHTML += " GAME MỚI";
        carouselID = "gameCarouselNew";
    }
    else if (divID.includes("free")) {
        categoryP.innerHTML += " GAME MIỄN PHÍ";
        carouselID = "gameCarouselFree";
    }
    else if (divID.includes("recommended")) {
        categoryP.innerHTML += " GAME HAY";
        carouselID = "gameCarouselRecom";
    }
    else if (divID == "moreGamesRow") {
        categoryP.innerHTML += " NHỮNG GAME HAY KHÁC";
        carouselID = "gameCarouselMore";
    }
    var carouselLocation = document.getElementById(divID);
    carouselLocation.appendChild(categoryP);
    carouselLocation.appendChild(CreateCarousel(gameDataArray[0].length, carouselID, gameDataArray));    //Either gameDataArray[0] or gameDataArray[1] for param 1, since both
                                                                                                                    //have the same length
}

function DisplaySingleData(divID, gameData) {
    var div = document.getElementById(divID);
    if (divID != 'genre') div.innerHTML = gameData;
    else {
        var dataString = gameData.join(", ");
        div.innerHTML = dataString;
    }
}

function DisplayPurchase() {
    var price = document.getElementById("price");
    var priceString = price.innerHTML;
    var priceInt = 0;
    var purchaseButton = document.getElementById("price_2");
    if (price.innerHTML == "FREE") {
        purchaseButton.innerText = "Lưu vào thư viện";
    }
    else {
        purchaseButton.innerText = "Mua game";
        priceString = priceString.replace(" VND", "");
        priceString = priceString.replace(".", "");
        priceInt = parseInt(priceString);           //Do something with this later, like transmit it somewhere for calculation
    }
}

function DataToPHP(gameName, gameNum) {
    var formData = new FormData();
    formData.append("name", gameName);
    formData.append("num", gameNum);

    $.ajax({
        url: 'php/php_functions.php',
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(){
            window.location.href = "resources/DB_GAMES/" + gameName + "/gamepage.php";
        }
    })
}

function SetCookie(cName, cValue, expDays="") {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}
function GetCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie); //to be careful
    const cArr = cDecoded .split('; ');
    var res = "";
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) res = val.replace(name, "");
    })
    return res;
}

function ProcessLoginInfo() {
    var data = $("#login_form").serializeArray();
    var email = Object.values(data[0]);         //Output: Array = ["email", ""]
    var pwd = Object.values(data[1]);           //Output: Array = ["password", ""];
    var remem_pwd = Object.values(data[2] || "");   //Output: Array = ["remember_password", ""] || undefined
    var loginNotif = document.getElementById("login_notif");
    var allowed = true;

    loginNotif.innerHTML = ""
    
    if (email[1] == "" || pwd[1] == "") {
        loginNotif.innerHTML += "* Bạn phải điền đầy đủ email và mật khẩu để đăng nhập<br>";
        loginNotif.style = "color: red; display: block";
        allowed = false;
    }
    if (email[1].includes("@") !== true || email[1].includes(".") !== true) {
        loginNotif.innerHTML += "* Email được nhập vào không đúng định dạng<br>";
        loginNotif.style = "color: red; display: block";
        allowed = false;
    }
    if (allowed === true) {
        var formData = new FormData();
        formData.append("mode", "login");
        formData.append("emailLog", email[1]);
        formData.append("pwdLog", pwd[1]);
    
        $.ajax({
            url: 'php/account_process.php',
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(result){
                var resultArray = JSON.parse(result);
                var stateLog = resultArray.stateLog;
                switch(stateLog) {
                    case 1:
                        loginNotif.innerHTML = "* Đăng nhập thành công";
                        loginNotif.style = "color: green; display: block";
                        var loginForm = document.getElementById("login_form");
                        loginForm.style = "display: none";
                        if (remem_pwd[1] == "on") {
                            SetCookie("username", resultArray.userLog, 30);
                        }
                        else SetCookie("username", resultArray.userLog, 1);
                        setTimeout(function() {
                            window.location.href = "";
                        }, 1000)
                        break;
                    case 2:
                        loginNotif.innerHTML = "* Tài khoản này không tồn tại";
                        loginNotif.style = "color: red; display: block";
                        break;
                    case 3:
                        loginNotif.innerHTML = "* Tài khoản này chưa được kích hoạt. Một email kích hoạt tài khoản đã được gửi cho bạn, bạn vui lòng kiểm tra mail";
                        loginNotif.style = "color: red; display: block";
                        break;
                }
            }
        })
    }
}

function ProcessRegisterInfo() {
    var data = $("#register_form").serializeArray();
    var fullName = Object.values(data[0]);      //Output: Array = ["name", ""]
    var dob = Object.values(data[1]);           //Output: Array = ["DOB", ""]
    var email = Object.values(data[2]);         //Output: Array = ["email", ""]
    var username = Object.values(data[3]);      //Output: Array = ["user_name", ""]
    var pwd = Object.values(data[4]);           //Output: Array = ["password", ""];
    var pwdRecon = Object.values(data[5]);           //Output: Array = ["password_reconfirm", ""];
    var tosCheck = Object.values(data[6] || "");             //Output: Array = ["accept", "on"] || undefined
    var registerNotif = document.getElementById("register_notif");
    var allowed = true;

    registerNotif.innerHTML = ""
    if (fullName[1] == "" || dob[1] == "" || email[1] == "" || username[1] == "" || pwd[1] == "" || pwdRecon[1] == "") {
        registerNotif.innerHTML += "* Mọi thông tin đăng kí phải được nhập để tiếp tục<br>";
        registerNotif.style = "color: red; display: block";
        allowed = false;
    }
    if (pwd[1] != pwdRecon[1]) {
        registerNotif.innerHTML += "* Mật khẩu và Xác nhận mật khẩu phải giống nhau<br>";
        registerNotif.style = "color: red; display: block";
        allowed = false;
    }
    if (email[1].includes("@") !== true || email[1].includes(".") !== true) {
        registerNotif.innerHTML += "* Email được nhập vào không đúng định dạng<br>";
        registerNotif.style = "color: red; display: block";
        allowed = false;
    }
    if (tosCheck[1] == undefined) {
        registerNotif.innerHTML += "* Bạn phải chấp hành Điều khoản và Dịch vụ của 9amingHats để tiếp tục<br>";
        registerNotif.style = "color: red; display: block";
        allowed = false;
    }
    if (allowed === true) {
        var formData = new FormData();
        formData.append("mode", "register");
        formData.append("fullNameReg", fullName[1]);
        formData.append("dobReg", dob[1]);
        formData.append("emailReg", email[1]);
        formData.append("userReg", username[1]);
        formData.append("pwdReg", pwd[1]);

        $.ajax({
            url: 'php/account_process.php',
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(result){
                var resultArray = JSON.parse(result);
                var stateReg = resultArray.stateReg;
                switch(stateReg) {
                    case 1:
                        registerNotif.innerHTML = "* Một email kích hoạt tài khoản đã được gửi tới địa chỉ email " + email[1] + ". Bạn vui lòng kiểm tra mail";
                        registerNotif.style = "color: green; display: block";
                        var registerForm = document.getElementById("register_form");
                        registerForm.style = "display: none";
                        break;
                    case 2:
                        registerNotif.innerHTML = "* Tài khoản với địa chỉ email " + email[1] + " đã tồn tại. Bạn vui lòng check lại thông tin";
                        registerNotif.style = "color: red; display: block";
                        break;
                    case 3:
                        registerNotif.innerHTML = "* Tài khoản với tên đăng nhập " + username[1] + " đã tồn tại. Bạn vui lòng check lại thông tin";
                        registerNotif.style = "color: red; display: block";
                        break;
                    case 4:
                        registerNotif.innerHTML = "* Tài khoản với địa chỉ email và tên đăng nhập này đã được đăng kí từ trước. Bạn vui lòng check lại thông tin";
                        registerNotif.style = "color: red; display: block";
                        break;
                }
            }
        })
    }
}


function UserButtons() {
    var anonButtons = document.getElementById("user_buttons_anon");
    var userButton = document.getElementById("user_button_user");
    var sideBar3AnonButtons = document.getElementById("sidebar_mobile_3_logInOut");
    var sideBar3UserButton = document.getElementById("sidebar_mobile_3_userprofile");
    if (GetCookie("username") != "") {
        anonButtons.style = "display: none";
        userButton.style -= "display: none";
        var userNameDisplay = document.getElementById("user_button_username");
        userNameDisplay.innerHTML = GetCookie("username");

        sideBar3AnonButtons.style = "display: none";
        sideBar3UserButton.style -= "display: none";
    }
}
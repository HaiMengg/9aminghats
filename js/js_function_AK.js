function CreateCarousel(elementNum, carouselID, gameDataArray) {           //elementNum: int, carouselID: String, gameDataArray: array of game data obtained from the FindGames() pHp function
    var gameNameArray = gameDataArray[0];
    var gameLogoArray = gameDataArray[1];

    var carousel = document.createElement("div");    //1
    carousel.setAttribute("id", carouselID);
    carousel.setAttribute("class", "carousel slide");
    carousel.setAttribute("data-bs-slide", "carousel");
    var carouselInner = document.createElement("div");  //2
    carouselInner.setAttribute("class", "carousel-inner");
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
        row.setAttribute("class", "row");
        carouselInner.appendChild(carouselItem).appendChild(row);

        for (let x = 1; x <= 3; x++) {                          //Repeatedly creates different elements of the same slide
            var element = document.createElement("div");
            element.setAttribute("class", "col-4 text-center");
            element.setAttribute("style", "padding: 1%")
            /*var elementContent = document.createElement("p");           //Temporary solution      
            elementContent.innerHTML = gameNameArray[elementNumCount];*/
            var elementContent = document.createElement("img");           //The images are still unstable so LATER
            elementContent.src = gameLogoArray[elementNumCount];
            elementContent.id = "gameLogo";
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
    var carouselLocation = document.getElementById(divID);
    carouselLocation.appendChild(categoryP);
    carouselLocation.appendChild(CreateCarousel(gameDataArray[0].length, carouselID, gameDataArray));    //Either gameDataArray[0] or gameDataArray[1] for param 1, since both
                                                                                                                    //have the same length
}
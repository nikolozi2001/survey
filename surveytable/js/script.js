
const btn = document.querySelector("#my-btn");
const container = document.querySelector("#table-second");

btn.addEventListener("click", function () {
    if (container.style.display === "block") {
        container.style.display = "none";
        btn.innerHTML = "მეორე თეიბლის გამოჩენა"
    } else {
        container.style.display = "block";
        btn.innerHTML = "მეორე თეიბლის დამალვა"
    }
} );


const btnn = document.querySelector("#my-btnn");
const containerr = document.querySelector("#table-third");

btnn.addEventListener("click", function () {
    if (containerr.style.display === "block") {
        containerr.style.display = "none";
        btnn.innerHTML = "მესამე თეიბლის გამოჩენა"
    } else {
        containerr.style.display = "block";
        btnn.innerHTML = "მესამე თეიბლის დამალვა"
    }
} );


const btnnn = document.querySelector("#my-btnnn");
const containerrr = document.querySelector("#table-fourth");

btnnn.addEventListener("click", function () {
    if (containerrr.style.display === "block") {
        containerrr.style.display = "none";
        btnn.innerHTML = "მეოთხე თეიბლის გამოჩენა"
    } else {
        containerrr.style.display = "block";
        btnnn.innerHTML = "მეოთხე თეიბლის დამალვა"
    }
} );


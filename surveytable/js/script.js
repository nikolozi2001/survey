
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


document.addEventListener("DOMContentLoaded", () => {
    // Script for Account Button 1
    const accountBtn1 = document.getElementById("accountBtn1");
    const accountLinks1 = document.getElementById("accountLinks1");

    accountBtn1.addEventListener("click", () => {
        accountLinks1.classList.toggle("hidden");
    });

    // Script for Account Button 2
    const accountBtn2 = document.getElementById("accountBtn2");
    const accountLinks2 = document.getElementById("accountLinks2");

    accountBtn2.addEventListener("click", () => {
        accountLinks2.classList.toggle("hidden");
    });
});

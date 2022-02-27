/*  login form sliding  */
const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("containerr");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

/*             PopUp                 */
let modalBtns = [...document.querySelectorAll(".button")];
modalBtns.forEach(function (btn) {
  btn.onclick = function () {
    let modal = btn.getAttribute('data-modal');
    document.getElementById(modal)
      .style.display = "block";
  }
});
window.onclick = function (event) {
  if (event.target.className === "modal") {
    event.target.style.display = "none";
  }
}





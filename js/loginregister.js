"use strict";
// login validation
// const email = document.getElementById("email");
// const emailMessage = document.getElementById("emailM");
// const password = document.getElementById("password");
// const passwordMessage = document.getElementById("passwordM");
// const signinbtn = document.getElementById("btn");
// signinbtn.addEventListener("click", function (e) {
//   // e.preventDefault();
//   if (email.value === "") {
//     email.placeholder = "Please fill this field!!";
//   }
//   if (password.value === "") {
//     password.placeholder = "Please fill this field!!";
//   } else if (password.value.length < 8) {
//     password.placeholder = "Password length should be greater than 8";
//     passwordMessage.style.display = "block";
//   } else {
//     passwordMessage.style.display = "none";
//   }
// });
// sigup validation
// const name = document.getElementById("name");
// const emailR = document.getElementById("emailR");
// const passwordR = document.getElementById("passwordR");
// const signupbtn = document.getElementById("signupR");

// signupbtn.addEventListener("click", function () {
//   if (name.value === "") {
//     name.placeholder = "Please fill this field";
//   }

//   if (emailR.value === "") {
//     emailR.placeholder = "Please fill this field!!";
//   }
//   if (passwordR.value === "") {
//     passwordR.placeholder = "Please fill this field!!";
//   } else if (passwordR.value.length < 8) {
//     passwordR.placeholder = "Password length should be greater than 8";
//     passwordMessage.style.display = "block";
//   } else {
//     passwordMessage.style.display = "none";
//   }
// });

// overlay animation

const signup = document.querySelector(".signup");
const signin = document.querySelector(".signin");
const overlay = document.querySelector(".overlay");
signup.addEventListener("click", function () {
  overlay.style.transform = "translateX(-60vh)";
  overlay.style.transition = "all 1s";
});
signin.addEventListener("click", function () {
  overlay.style.transform = "translateX(0vh)";
  overlay.style.transition = "all 1s";
});

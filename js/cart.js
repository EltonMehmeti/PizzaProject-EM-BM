let cart = document.querySelector(".shopping-cart");

document.querySelector("#cart-btn").onclick = () => {
  cart.classList.add("active");
};

document.querySelector("#close-cart").onclick = () => {
  cart.classList.remove("active");
};

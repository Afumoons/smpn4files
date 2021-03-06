// Components initialization
const nav = document.querySelector("#site-header");
const burger = document.querySelector(".navbar_burger");
const dot = document.querySelector(".navbar_bar_dot");
const varname = document.querySelector(".classname");

const configaos = {
  duration: 1200,
};
const configglide = {
  type: "carousel",
  autoplay: 2500,
};

// Scroll method
const scrollPage = function () {
  window.onscroll = function () {
    scrollFunction();
  };
  function scrollFunction() {
    if (
      document.body.scrollTop > 700 ||
      document.documentElement.scrollTop > 700
    ) {
    } else if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      nav.classList.add("navbar_scroll");
      nav_links.classList.add("navbar_nav-links_scroll");
    } else {
      nav.classList.remove("navbar_scroll");
      nav_links.classList.remove("navbar_nav-links_scroll");
    }
  }
};

// Burger method
const burgerClick = () => {
  burger.addEventListener("click", () => {
    nav_links.classList.toggle("navbar_nav-links_click");
    burger.classList.toggle("navbar_burger_click");
  });
};

// Dot method
const dotClick = () => {
  dot.addEventListener("click", () => {
    nav_links.classList.toggle("navbar_nav-links_click");
    dot.classList.toggle("navbar_bar_dot_click");
  });
};

// Fancy method
const fancy = () => {
  const text = document.querySelector(".fancy");
  const strText = text.textContent;
  const splitText = strText.split("");
  text.textContent = "";

  for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += '<span class="animate">' + splitText[i] + "</span>";
  }

  let char = 0;
  let timer = setInterval(onTick, 50);

  function onTick() {
    const span = text.querySelectorAll("span")[char];
    span.classList.add("fade");
    char++;
    if (char === splitText.length) {
      complete();
      return;
    }
  }

  function complete() {
    clearInterval(timer);
    timer = null;
  }
};

AOS.init(configaos);
scrollPage();
burgerClick();
dotClick();
fancy();

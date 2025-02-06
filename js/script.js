window.addEventListener("load", () =>{
  // page loader
  document.querySelector(".js-page-loader").classList.add("fade-out");
  setTimeout(() => {
document.querySelector(".js-page-loader").style.display = "none";

  }, 600);
});
function redirect() {
  window.location.href = "details.html"; // Redirection vers details.html
}
  // Get the header element
  const header = document.getElementById('main-header');

  // Function to handle scroll events
  function handleScroll() {
    if (window.scrollY > 0) {
      header.classList.add('fixed-header');
    } else {
      header.classList.remove('fixed-header');
    }
  }

  // Listen for scroll events and call the handleScroll function
  window.addEventListener('scroll', handleScroll); 


  function testSlider(){
   const carouselOne = document.getElementById('carouselOne');
   if(carouselOne){
    carouselOne.addEventListener('slid.bs.carousel' , function(){
        const activeItem = this.querySelector(".active");
        document.querySelector(".js-test-img").src =
        activeItem.getAttribute("data-js-test-img");
    })
   }
  }
  testSlider();

  // Course video
  function coursePreviewVideo(){
    const coursePreviewModal = document.querySelector(".js-course-preview-modal");
    if(coursePreviewModal){
        coursePreviewModal.addEventListener("shown.bs.modal", function(){
            this.querySelector("video").play();
            this.querySelector("video").currentTime = 0;
        });
        coursePreviewModal.addEventListener("hide.bs.modal", function(){
            this.querySelector("video").pause();
        });
    }
}
coursePreviewVideo();







function setupSignupForm() {
  var signup_here = document.querySelector(".sign_up_here");
  var main_form = document.querySelectorAll(".main");
  var submit = document.querySelector(".submit_here");
  var user_name = document.querySelector("#user-name");
    var user_name = document.querySelector("#name");
  var shown_name = document.querySelector("#shown-name");
  var forumnumber = 0;
  signup_here.addEventListener('click', function () {
    if (!validateform()) {
      return false;
    }
    forumnumber++;
    updateforum();
  });
  
  

  var submit = document.querySelector('[name="register"]');
  submit.addEventListener('click', function () {    if (!validateform()) {
      return false;
    }

    shown_name.innerHTML = user_name.value;

    forumnumber++;
    updateforum();

  });

  function updateforum() {
    main_form.forEach(function (update_forum_number) {
      update_forum_number.classList.remove('active');
    });
    main_form[forumnumber].classList.add('active');
  }

  function validateform() {
    var validatesignupinputs = document.querySelectorAll(".main.active input");
    validate = true;
    validatesignupinputs.forEach(function (val_in) {
      val_in.classList.remove('warning');
      if (val_in.hasAttribute('require')) {
        if (val_in.value.length == 0) {
          validate = false;
          val_in.classList.add('warning');
        }
      }
    });
    return validate;
  }
}

function setupSigninForm() {
  var signin_here = document.querySelector(".sign_in_here");
  var main_form_login = document.querySelectorAll(".main_login");
  var sform = document.querySelectorAll(".s_form");
  var signin_submit = document.querySelector(".signin_submit");
  var signinnumber = 0;

  signin_here.addEventListener('click', function () {
    sform.forEach(function (s_form) {
      s_form.classList.toggle('d-none');
    });
  });

  signin_submit.addEventListener('click', function () {
    if (!validateform_login()) return false;
    signinnumber++;
    update_signin();
  });

  function update_signin() {
    main_form_login.forEach(function (update_forum_number) {
      update_forum_number.classList.remove('active');
    });
    main_form_login[signinnumber].classList.add('active');
  }

  function validateform_login() {
    var validatesigininputs = document.querySelectorAll(".main_login.active input");
    console.log(validatesigininputs);
    validate_signin = true;

    validatesigininputs.forEach(function (valid_in) {
      valid_in.classList.remove('warning');
      if (valid_in.hasAttribute('require')) {
        if (valid_in.value.length == 0) {
          validate_signin = false;
          valid_in.classList.add('warning');
        }
      }
    });
    return validate_signin;
  }
}

function setupStyleSwitcher() {
  const styleSwitcher = document.querySelector(".js-style-switcher");
  const styleSwitcherToggler = document.querySelector(".js-style-switcher-toggler");

  styleSwitcherToggler.addEventListener("click", function () {
    styleSwitcher.classList.toggle("open");
  });
}

document.addEventListener("DOMContentLoaded", function () {
  setupSignupForm();
  setupSigninForm();
  setupStyleSwitcher();
});




// style switcher

function styleSwitcherToggle() {
  const styleSwitcher = document.querySelector(".js-style-switcher");
  const styleSwitcherToggler = document.querySelector(".js-style-switcher-toggler"); // Correction du nom de la variable

  styleSwitcherToggler.addEventListener("click", function () {
    styleSwitcher.classList.toggle("open");
    this.querySelector("i").classList.toggle("fa-times");
    this.querySelector("i").classList.toggle("fa-cog");

  });
}

styleSwitcherToggle();

// theme colors
function themeColors(){
  const colorStyle = document.querySelector(".js-color-style"),
    themeColorContainer = document.querySelector(".js-theme-colors");

  themeColorContainer.addEventListener("click", ({target}) => {
    if(target.classList.contains("js-theme-color-item")){
      localStorage.setItem("color", target.getAttribute("data-js-theme-color"));
      setColor();
    }
  });

  function setColor(){
    let path = colorStyle.getAttribute("href").split("/");
    path = path.slice(0, path.length-1);
    colorStyle.setAttribute("href", path.join("/") + "/" + localStorage.getItem("color") + ".css");
 
    if(document.querySelector(".js-theme-color-item.active")){
      document.querySelector(".js-theme-color-item.active"),classList.remove("active");
    }
    document.querySelector("[data-js-theme-color=" + localStorage.getItem("color") + "]").classList.add("active");
  }
  if(localStorage.getItem("color") != null){
    setColor();
  }
  else{
    const defaultColor = colorStyle.getAttribute("href").split("/").pop().split(".").shift();
    document.querySelector("[data-js-theme-color=" + defaultColor + "]").classList.add("active");
  }
}

themeColors();

//dark mood
function themeLightDark() {
  const darkModeCheckbox = document.querySelector(".js-dark-mode");

  darkModeCheckbox.addEventListener("click", function () {
    if (this.checked) {
      localStorage.setItem("theme-dark", true);
    } else {
      localStorage.setItem("theme-dark", false);
    }
    themeMode();
  });

  function themeMode() {
    if (localStorage.getItem("theme-dark") === "true") {
      document.body.classList.add("t-dark");
    } else {
      document.body.classList.remove("t-dark");
    }
  }

  // Vérifiez si le mode sombre est activé en chargeant la page
  if (localStorage.getItem("theme-dark") === "true") {
    themeMode();
    darkModeCheckbox.checked = true; // Cochez la case du mode sombre si activé
  }
}

themeLightDark();


//theme glass effect

function themeGlassEffect(){
const glassEffectCheckbox = document.querySelector(".js-glass-effect"),
glassStyle = document.querySelector(".js-glass-style");

glassEffectCheckbox.addEventListener("click", function(){
  if(this.checked){
    localStorage.setItem("glass-effect", "true");
  }
  else{
    localStorage.setItem("glass-effect", "false");

  }
  glass();
});

function glass(){
  if(localStorage.getItem("glass-effect") === "true"){
    glassStyle.removeAttribute("disabled");
  }
  else{
    glassStyle.disabled = true;
  }
}
if(localStorage.getItem("glass-effect") !== null){
  glass();
}
if(!glassStyle.hasAttribute("disabled")){
  glassEffectCheckbox.checked =true;
}
}
themeGlassEffect();

// header menu
function headerMenu(){
  const menu = document.querySelector(".js-header-menu"),
  backdrop = document.querySelector(".js-header-backdrop"),
  menuCollapseBreakepoint = 991;

  function toggleMenu(){
menu.classList.toggle("open");
backdrop.classList.toggle("active");
document.body.classList.toggle("overflow-hidden");
  }
  document.querySelectorAll(".js-header-menu-toggler").forEach((item) =>{
item.addEventListener("click", toggleMenu)
  });
// close by clicking outside of it
backdrop.addEventListener("click", toggleMenu)
  function collapse(){
    menu.querySelector(".active .js-sub-menu").removeAttribute("style");
    menu.querySelector(".active").classList.remove("active");
  
  }
  menu.addEventListener("click", (event) =>{
    const { target } = event;

    if(target.classList.contains("js-toggle-sub-menu") && 

   window.innerWidth <= menuCollapseBreakepoint){
    event.preventDefault();
// if menu-iem already expanded
    if(target.parentElement.classList.contains("active")){
      collapse();
      return;
    }

  if(menu.querySelector(".active")){
    collapse();
  }
    target.parentElement.classList.add("active");
    target.nextElementSibling.style.maxHeight =
    target.nextElementSibling.scrollHeight + "px";
   }
  });
  //whene resizingt window
  window.addEventListener("resize", function() {
    if(this.innerWidth > menuCollapseBreakepoint && menu.classList.contains("open")){
      toggleMenu();
    }
    if(this.innerWidth > menuCollapseBreakepoint && menu.querySelector(".active")){
      collapse();
    }
  });
}
headerMenu();

// sign-up tools


var hamburger = document.querySelector(".hamburger");
var nav = document.querySelector(".top-nav");
var postLink = document.querySelector(".post-container");
var link = null;
var logoBox = document.querySelector(".logo__box");

function hambMenu(){
  nav.classList.toggle("height-none");
  hamburger.classList.toggle("close");
};

function getPost(link) {
   window.location = 'view_post.php?id=' + link;
};

function getHomePage() {
  window.location = "index.php";
};

hamburger.addEventListener("click", hambMenu);
logoBox.addEventListener("click", getHomePage);



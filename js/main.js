var hamburger = document.querySelector(".hamburger");
var nav = document.querySelector(".top-nav");
var titlePost = document.querySelector(".post__title");
var textPost = document.querySelector(".post__preview-text");
var imgPost = document.querySelector(".post-image img");

var dataText = {
  title : "Новое обновление для приемника GS B520/B522/B521",
  text : "",
  img: "img/post_1.jpg"
};

function hambMenu(){
  nav.classList.toggle("height-none");
  hamburger.classList.toggle("close");
 };

hamburger.addEventListener("click", hambMenu);

function loadContent() {
  titlePost.innerHTML = dataText.title;
  console.log("Заголовок загружен!");
  textPost.innerHTML = dataText.text;
  console.log("Превью-текст загружен!");
  imgPost.setAttribute("src", dataText.img);
  
};

// (function(){
//   loadContent();
// }());
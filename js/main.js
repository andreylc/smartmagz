var hamburger = document.querySelector(".hamburger");
var nav = document.querySelector(".top-nav");
var titlePost = document.querySelector(".post__title");
var textPost = document.querySelector(".post__preview-text");
var imgPost = document.querySelector(".post-image img");

var dataText = {
  title : "Новое обновление для приемника GS B520/B522/B521",
  text : "Уважаемый абонент, спасибо, что вы пользуетесь услугами оператора \"Триколор ТВ!\" Превратите ваш телевизор в домашний кинотеатр благодаря бесплатному* сервису «Кинозалы «Триколор ТВ»! При этом мы не только оставили все преимущества существующего сервиса «Кинозалы «Триколор ТВ», но и добавили новые возможности! Проверьте, поддерживает ли ваше приёмное оборудование работу сервиса «Кинозалы «Триколор ТВ».",
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

(function(){
  loadContent();
}());
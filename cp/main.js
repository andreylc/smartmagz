var notice = document.querySelector(".notice");

function forbidden(){
  notice.innerHTML = "Вам запрещен доступ";
};

function invalid(){
  notice.innnerHTML = "Неверный логин или пароль";
};
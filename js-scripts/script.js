/* Seleciona os elementos  HTML do chat.php */
const sendBtn = document.querySelector(".send-form");
const form = document.querySelector(".typing-area");
const originalImage = form.querySelector("#original-image").value;
const prefixer = form.querySelector("#prefixer").value;

var cards = document.querySelectorAll(".send-form");
for (var i = 0; i < cards.length; i++) {
  var card = cards[i];
  formre = card.parentNode;
  card.onclick = function () {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php-scripts/alter-image.php", true);
    formre = this.parentNode;
    // console.log(this.parentNode);
    xhr.onload = () => {
      console.log(xhr.readyState);
      if (xhr.status == 404) {
        console.log("error");
        var failed = formre.querySelector("#failed");
        var suc = formre.querySelector("#succes");
        suc.style.display = "none";
        failed.style.display = "inline";
        return 0;
      }
      if (xhr.readyState === XMLHttpRequest.DONE) {
        console.log("success");
        var suc = formre.querySelector("#succes");
        suc.style.display = "inline";
        formre.parentNode.previousElementSibling.style.display = "none";
        // formre.nextElementSibling.style.display = 'inline'
        formre.style.display = "none";
        // if(xhr.status === 200){
        // 	inputField.value = "";
        // 	scrollToBottom();
        // }
      } else {
      }
    };

    let formData = new FormData(formre);
    console.log(formData);
    for (const [key, value] of formData) {
      console.log(`!!!${key}: ${value}\n`);
    }
    if (formData.get("prefixer") != "") {
      xhr.send(formData);
    }
  };
}

// Faz a mesma coisa mas vai inserir a tag no elemento
var cardsTag = document.querySelectorAll(".send-form-taged");
for (var i = 0; i < cardsTag.length; i++) {
  var cardComTag = cardsTag[i];
  let formre = cardComTag.parentNode;
  let valorAssociado = cardComTag.getAttribute("data-valor");

  cardComTag.onclick = function () {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php-scripts/alter-image.php", true);
    formre = this.parentNode;
    // console.log(this.parentNode);
    xhr.onload = () => {
      console.log(xhr.readyState);
      if (xhr.status == 404) {
        console.log("error");
        var failed = formre.querySelector("#failed");
        var suc = formre.querySelector("#succes");
        suc.style.display = "none";
        failed.style.display = "inline";
        return 0;
      }
      if (xhr.readyState === XMLHttpRequest.DONE) {
        console.log("success");
        var suc = formre.querySelector("#succes");
        suc.style.display = "inline";
        formre.parentNode.previousElementSibling.style.display = "none";
        // formre.nextElementSibling.style.display = 'inline'
        formre.style.display = "none";
        // if(xhr.status === 200){
        // 	inputField.value = "";
        // 	scrollToBottom();
        // }
      } else {
      }
    };

    console.log(formre);
    let formData = new FormData(formre);

    for (const [key, value] of formData) {
      console.log(`!!!${key}: ${value}\n`);
    }
    console.log("valorAssociado", valorAssociado);
    console.log(formData);
    formData.set("prefixer", valorAssociado);
    if (formData.get("prefixer") != "") {
      xhr.send(formData);
    }
  };
}

/* Seleciona os elementos  HTML do chat.php */
const sendBtn = document.querySelector(".send-form");
const form = document.querySelector(".typing-area");
const originalImage = form.querySelector("#original-image").value;
const prefixer = form.querySelector("#prefixer").value;

var cards = document.querySelectorAll(".send-form");
for (var i = 0; i < cards.length; i++) {
    var card = cards[i];
    formre = card.parentNode
    card.onclick = function () {
    	let xhr = new XMLHttpRequest();
			xhr.open("POST", "php-scripts/alter-image.php", true);
			formre = this.parentNode
			// console.log(this.parentNode);
			xhr.onload = () => {
				if(xhr.readyState === XMLHttpRequest.DONE){
					console.log('success')
					// if(xhr.status === 200){
					// 	inputField.value = "";
					// 	scrollToBottom();
					// }
				} else {
					console.log('error')
				}
			}

			let formData = new FormData(formre);
			for (const [key, value] of formData) {
			  console.log(`${key}: ${value}\n`);
			}	
			xhr.send(formData);
    };
}

// sendBtn.onclick = () => {
// 	console.log('entrou')
// 	let xhr = new XMLHttpRequest();
// 	xhr.open("POST", "php-scripts/alter-image.php", true);
// 	console.log(form);
// 	xhr.onload = () => {
// 		if(xhr.readyState === XMLHttpRequest.DONE){
// 			console.log('success')
// 			// if(xhr.status === 200){
// 			// 	inputField.value = "";
// 			// 	scrollToBottom();
// 			// }
// 		}
// 	}

// 	let formData = new FormData(form);
// 	for (const [key, value] of formData) {
// 	  console.log(`${key}: ${value}\n`);
// 	}	
// 	xhr.send(formData);
// }
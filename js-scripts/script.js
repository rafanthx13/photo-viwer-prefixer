/* Seleciona os elementos  HTML do chat.php */
const sendBtn = document.querySelector(".send-form");
const form = document.querySelector(".typing-area");
const originalImage = form.querySelector("#original-image").value;
const prefixer = form.querySelector("#prefixer").value;

let listPrefixers = [
	'italo', 'icaro'
];

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
				console.log(xhr.readyState)
				if(xhr.status == 404){
					console.log('error')
					var failed = formre.querySelector("#failed")
					var suc = formre.querySelector("#succes")
					suc.style.display = "none"
					failed.style.display = "inline"
					return 0
				}
				if(xhr.readyState === XMLHttpRequest.DONE){
					console.log('success')
					var suc = formre.querySelector("#succes")
					suc.style.display = "inline"
					formre.parentNode.previousElementSibling.style.display = 'none'
					// formre.nextElementSibling.style.display = 'inline'
					formre.style.display = 'none'
					// if(xhr.status === 200){
					// 	inputField.value = "";
					// 	scrollToBottom();
					// }
				} else {
					
				}
			}

			let formData = new FormData(formre);
			for (const [key, value] of formData) {
			  console.log(`${key}: ${value}\n`);
			}
			if(formData.get('prefixer') != ''){
				xhr.send(formData);	
			}
			
    };
/*
    listPrefixers.forEach(function(element) {
        let sendButton = document.createElement('button');
        sendButton.innerHTML = element;
        sendButton.classList.add('custom-button');
        sendButton =  '<button class="btn btn-secondary send-form">' + element + '</button>'

		// const customButton = document.createElement('button');
		// customButton.innerHTML = 'Botão Personalizado';
		// customButton.classList.add('custom-button');

		// const buttonWrapper = document.createElement('div');
		// buttonWrapper.classList.add('button-wrapper');

		// buttonWrapper.appendChild(sendButton);
        card.insertAdjacentHTML('afterbegin', sendButton);
		// buttonWrapper.appendChild(customButton);

		// buttonContainer.appendChild(buttonWrapper);
      });
*/

    // adicionar o enter
    
    // console.log(card)
    // var input = formre.querySelector("#prefixer");
	  // var button = formre.querySelector("#send-form");
	  // console.log(input)
	  // console.log(button)

	  // input.addEventListener("keypress", function(event) {
	  //   if (event.key === "Enter") {
	  //     // event.preventDefault();
	  //     button.click();
	  //   }
	  // });

}

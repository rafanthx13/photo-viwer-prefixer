/* Seleciona os elementos  HTML do chat.php */
const sendBtn = document.querySelector("#send-form");
const form = document.querySelector(".typing-area");
// const originalImage = document.querySelector("#original-image").value;
// const prefixer = document.querySelector("#prefixer").value;

sendBtn.onclick = () => {
	console.log('entrou')
	let xhr = new XMLHttpRequest();
	xhr.open("POST", "php-scripts/alter-image.php", true);
	xhr.onload = () => {
		if(xhr.readyState === XMLHttpRequest.DONE){
			console.log('success')
			// if(xhr.status === 200){
			// 	inputField.value = "";
			// 	scrollToBottom();
			// }
		}
	}
	let formData = new FormData(form);
	xhr.send(formData);
}
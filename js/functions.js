// verifica se a senha e a confirmação de senha são iguais
function validaSenha(input) {
	if (input.value != document.getElementById("senha").value) {
		input.setCustomValidity("Repita a senha corretamente");
		console.log("funcionou1");
	} else {
		input.setCustomValidity("");
	}
}

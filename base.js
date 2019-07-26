
function renderErrors(errors) {
	document.getElementById('errors').innerHTML = ''
	for (var i=0; i < errors.length; i++) {
		$("#errors").append("<div> " + errors[i] + "</div>").show();
	};
}

function validateForm() {
	result = true;
	var errors = [];

	var requiredInput = ["name", "phone", "message"];
	requiredInput.forEach(checkInput);

	function checkInput(item, index) {
		if (document.getElementById(item).value == '') {
			var el = document.getElementById(item);
			var label = el.dataset.label
			errors.push("Lauks '" + label + "' ir jānorāda obligāti");
			result = false;
		}
	}

	if (errors[0] == undefined) {
		return true;
	} else {
		renderErrors(errors);
		return false;
	}
}

window.addEventListener('DOMContentLoaded', (event) => {
	var form = document.getElementById("contactForm");

	document.getElementById("submit").addEventListener("click", function () {
		if (validateForm()) {
			form.submit();
		}
	});
});

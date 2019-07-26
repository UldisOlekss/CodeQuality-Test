// Displays errors in first block of page if any of required fields are empty
function renderErrors(errors) {
	document.getElementById('errors').innerHTML = ''
	for (var i=0; i < errors.length; i++) {
		$("#errors").append("<div> " + errors[i] + "</div>").show();
	};
}

// Looping check for all required input fields
function validateForm() {
	result = true;
	var errors = [];

	var requiredInput = ["name", "phone", "message"];
	requiredInput.forEach(checkInput);

	function checkInput(item, index) {
		if (document.getElementById(item).value == '') {
			var el = document.getElementById(item);
			var label = el.dataset.label
			// Creates error message specific to input data-label defined name
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

// Event listener for contact form being submited
window.addEventListener('DOMContentLoaded', (event) => {
	var form = document.getElementById("contactForm");

	document.getElementById("submit").addEventListener("click", function () {
		// Checking if input fields are valid before submiting
		if (validateForm()) {
			form.submit();
		}
	});
});

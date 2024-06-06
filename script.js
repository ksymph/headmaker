const output = document.getElementById("output-code");
const testButton = document.getElementById("test");
const items = document.getElementById("headmaker").children;

function buildOutput() {
	const input = items;
	let final = "<head>\n";
	for (let i = 0; i < input.length; i++) {
		const currentFieldList = input[i];
		// const category = currentFieldList.querySelector("legend");
		for (let it = 1; it < currentFieldList.children.length; it++) {
			const currentField = currentFieldList.children[it];

			const labels = currentField.querySelectorAll("label");
			const inputs = currentField.querySelectorAll(".input-container input");

			if (inputs[0].value) {
				final += "<";
				for (let iz = 0; iz < labels.length; iz++) {
					final += `${labels[iz].innerText}"${inputs[iz].value}"`;
				}
				final += ">\n";
			}

		}
	}

	final = final + "</head>";
	output.innerText = final;
}

let timeoutId

function addInputListeners () {
	const input = items;
	for (let i = 0; i < input.length; i++) {
		const currentFieldList = input[i];
		for (let it = 1; it < currentFieldList.children.length; it++) {
			const currentField = currentFieldList.children[it];

			const labels = currentField.querySelectorAll("label");
			const inputs = currentField.querySelectorAll(".input-container input");

			for (let ix = 0; ix < inputs.length; ix++) {
				inputs[ix].addEventListener("keyup", function(event) {
					clearTimeout(timeoutId);
					timeoutId = setTimeout(buildOutput, 500);
				})
			}

		}
	}
}

function addListListeners () {
	const tagList = document.querySelectorAll(".tag");
	for (let i = 0; i < tagList.length; i++) {
		const inputElement = tagList[i].querySelector(".input-container input");
		const suggestedValues = tagList[i].querySelectorAll("li code");
		for (let valuePos = 0; valuePos < suggestedValues.length; valuePos++){
			suggestedValues[valuePos].addEventListener("click", function() {
				inputElement.value = suggestedValues[valuePos].innerText;
				buildOutput();
			});
		}
	}
}

addListListeners();
addInputListeners();

buildOutput();

// I need to get the parent fieldset legend, add it to the string as e.g. <meta then add the label, then the input wrapped in quotes
// then close the tag
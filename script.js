const output = document.getElementById("output");
const testButton = document.getElementById("test");
const items = document.getElementById("headmaker").children;

testButton.addEventListener("click", buildOutput);

function buildOutput() {
	const input = items;
	let final = "<head>";
	for (var i = 0; i < input.length; i++) {
		const currentFieldList = input[i];
		const category = currentFieldList.querySelector("legend");
		for (var it = 1; it < currentFieldList.children.length; it++) {
			const currentField = currentFieldList.children[it];

			const labels = currentField.querySelectorAll("label");
			const inputs = currentField.querySelectorAll(".input-container input");

			if (inputs[0].value) {
				final += `<${category.innerText} `;
				for (var iz = 0; iz < labels.length; iz++) {
					final += ` ${labels[iz].innerText}"${inputs[iz].value}"`;
				}
				final += ">";
			}

		}
	}

	final = final + "</head>";

	output.innerText = final;
}

buildOutput();

// I need to get the parent fieldset legend, add it to the string as e.g. <meta then add the label, then the input wrapped in quotes
// then close the tag
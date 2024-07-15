let tags;

async function generateForms() {
	const response = await fetch("tags.json");
	tags = await response.json();

	for (let i = 0; i < tags.length; i++) {
		tags[i].index = i;
	}

	// clear everything for a reset
	const categoryContents = document.querySelectorAll(".category-content");
	for (const content of categoryContents) {
		content.innerHTML = "";
	}

	populateForms(tags);
	buildOutput();
	addInputListeners();
	addExpandListeners();
	addAutofillListeners();
}


function populateForms(tags) {
	const categories = {};
	categories["core"] = document.querySelector("#core .category-content");
	categories["content"] = document.querySelector("#content .category-content");
	categories["application"] = document.querySelector("#application .category-content");
	categories["social"] = document.querySelector("#social .category-content");
	categories["other"] = document.querySelector("#other .category-content");


	for (const category in categories) {
		categories[category].innerHTML += `<div class="subcategory null"></div>`;
	}
	for (const tag of tags) {
		const subcategoryString = tag.subcategory;
		tag.subcategory = tag.subcategory ? tag.subcategory.replace(/\s+/g, '-') : null;
		if (!categories[tag.category].querySelector(`.${tag.subcategory}`)) {
			categories[tag.category].innerHTML += `<div class="subcategory ${tag.subcategory}"><div class="subcategory-header"><span>${subcategoryString}</span></div></div>`;
		}
	}



	for(const tag of tags) {
		const selectedCategory = categories[tag.category];
		const selectedSubcategory = selectedCategory.querySelector(`.${tag.subcategory}`);

		// inputs
		let tagInputs = "";
		if (tag.type === "text" || tag.type === "inset") {
			tagInputs += `<div class="tag-input">`;
			for(const hint of tag.hint) {
				tagInputs += `<input type="text" placeholder="${hint}"`;
				tagInputs += (tag.autofill) ? ` value="${hint}"` : "";
				tagInputs += ">";
			}
			tagInputs += `</div>`;
		} else if (tag.type === "check") {
			tagInputs += `<div class="tag-input input-check">`;
			for(const hint of tag.hint) {
				tagInputs += `<input type="checkbox">`;
				tagInputs += `<input type="text" placeholder="${hint}"`;
				tagInputs += (tag.autofill) ? ` value="${hint}"` : "";
				tagInputs += " readonly>";
			}
			tagInputs += `</div>`;
		}

		// label
		const tagLabel = tag.tag.map(function (tagText) {
			return `<span class="label-text">${tagText}</span>`;
		}).join("");

		// description
		let tagDescription = "";
		for(const description of tag.description) {
			tagDescription += `<p>${description}</p>`;
		}

		// suggestions
		let tagSuggestions = "";
		if (tag.suggested) {
			tagSuggestions += "<ul>";
			for(const suggestion of tag.suggested) {
				tagSuggestions += `<li><span class="link">${suggestion.value}</span><span>//${suggestion.description}</span></li>`;
			}
			tagSuggestions += "</ul>";
		}

		// links
		let tagLinks = "";
		if (tag.links){
			for(const link of tag.links) {
				tagLinks += `<p><a href="${link.href}">${link.text}</a></p>`;
			}
		}

		// standard
		let tagStandardText = "";
		if (tag.standard) {
			tagStandardText = `<div class="standard-text">Part of the HTML standard</div>`;
		}

		selectedSubcategory.innerHTML += `
			<details class="tag${(tag.standard) ? " standard" : ""} type-${tag.type}">
				<summary class="tag-main"">
					<div class="tag-label">
						${tagLabel}
					</div>

						${tagInputs}

				</summary>

				<div class="tag-details">
					${tagDescription}
					${tagSuggestions}
					${tagLinks}
					${tagStandardText}
				</div>

			</details>
		`;
	}
}

function buildOutput() {
	const tagsHtml = document.querySelectorAll(".tag");

	let output = "<head>\n";

	for (const tagHtml of tagsHtml) {
		if (tagHtml.classList.contains("type-text")) {
			const inputs = tagHtml.querySelectorAll(".tag-input input");
			const labels = tagHtml.querySelectorAll(".tag-label span");

			let isFilled = false;
			let tagContent = "";

			for (let i = 0; i < inputs.length; i++) {
				if (inputs[i].value) {
					isFilled = true;
					tagContent += `<${labels[i].innerText}"${inputs[i].value}">\n`
				}
			}
			output += isFilled ? tagContent : "";
		} else if (tagHtml.classList.contains("type-check")) {
			const checkbox = tagHtml.querySelector("input[type='checkbox']");
			const label = tagHtml.querySelector(".tag-label span");
			const value = tagHtml.querySelector("input[type='text']");
			if (checkbox.checked) {
				output += `<${label.innerText}"${value.value}">\n`;
			}
		} else if (tagHtml.classList.contains("type-inset")) {
			const label = tagHtml.querySelector(".tag-label span");
			const value = tagHtml.querySelector("input[type='text']");
			if (value.value) {
				output += `<${label.innerText}>${value.value}</${label.innerText}>\n`;
			}
		}
	}

	output += `</head>`;

	document.getElementById("output-code").innerText = output;
}

let timeoutId;

function addInputListeners() {
	const textInputs = document.querySelectorAll(".tag-input input[type='text']");
	const checkInputs = document.querySelectorAll(".tag-input input[type='checkbox']");

	for (const inputItem of textInputs) {
		inputItem.addEventListener("keyup", function(event) {
			clearTimeout(timeoutId);
			timeoutId = setTimeout(buildOutput, 500);
		})
	}

	for (const inputItem of checkInputs) {
		inputItem.addEventListener("click", function(event) {
			buildOutput();
		})
	}
}

function addExpandListeners() {
	const categories = document.querySelectorAll(".category");
	for (const category of categories) {
		const tagList = category.querySelectorAll("details");
		const expandButton = category.querySelector(".collapse");
		expandButton.addEventListener("click", function() {
			const isChecked = expandButton.dataset.checked;
			const toBeCollapsed = (isChecked === "true") ? true : false;

			expandButton.dataset.checked = !toBeCollapsed;
			expandButton.innerText = toBeCollapsed ? "expand all" : "collapse all";
			for (const tag of tagList) {
				tag.open = !toBeCollapsed;
			}
		});
	}
}

function addAutofillListeners() {
	const tags = document.querySelectorAll(".tag");
	for (const tag of tags) {
		const input = tag.querySelector(".tag-input input");
		const autofillList = tag.querySelectorAll(".tag-details li .link");
		for (const autofillItem of autofillList) {
			autofillItem.addEventListener("click", function() {
				input.value = autofillItem.innerText;
				buildOutput();
			});
		}
	}
}



const copyButton = document.getElementById("copy-code");
const output = document.getElementById("output-code");
function resetCopyButton () {
	copyButton.innerText = "copy";
}
function copyOutput () {
	navigator.clipboard.writeText(output.innerText);
	copyButton.innerText = "copied!";
	setTimeout(resetCopyButton, 1000);
}
copyButton.addEventListener("click", copyOutput);




const resetButton = document.getElementById("reset");
resetButton.addEventListener("click", generateForms);

generateForms();
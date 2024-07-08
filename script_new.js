// type can be: text | inset | check


async function generateForms() {
	const response = await fetch("tags.json");
	const tags = await response.json();

	populateForms(tags);

}

function parseTag(tag) {

}

function populateForms(tags) {
	// const categories = document.querySelectorAll(".category");
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
		if (!categories[tag.category].querySelector(`.${tag.subcategory}`)) {
			categories[tag.category].innerHTML += `<div class="subcategory ${tag.subcategory}"><div class="subcategory-header"><span>${tag.subcategory}</span></div></div>`;
		}
	}



	for(const tag of tags) {
		const selectedCategory = categories[tag.category];
		const selectedSubcategory = selectedCategory.querySelector(`.${tag.subcategory}`);

		// inputs
		let tagInputs = "";
		if (tag.type === "text") {
			for(const hint of tag.hint) {
				tagInputs += `<input type="text" placeholder="${hint}"`;
				tagInputs += (tag.autofill) ? ` value="${hint}"` : "";
				tagInputs += ">";
			}
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
			tagStandardText = `<div class="standard-text">Part of the WHATWG HTML standard</div>`;
		}




		selectedSubcategory.innerHTML += `<details class="tag${(tag.standard) ? " standard" : ""}">

							<summary class="tag-main">
								<div class="tag-label">
									${tagLabel}
								</div>
								<div class="tag-input">
									${tagInputs}
								</div>
							</summary>

							<div class="tag-details">
								${tagDescription}
								${tagSuggestions}
								${tagLinks}
								${tagStandardText}
							</div>

						</details>`;
	}
}


generateForms();

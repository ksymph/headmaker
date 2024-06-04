<?php require "head.php"; ?>

<body>
	<main>
		<form id="headmaker">
			<fieldset class="category">
				<legend>meta</legend>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="charset">charset=</label></div>
					<div class="input-container"><input id="charset" type="text" value="utf-8" placeholder="utf-8"></div>
					<p>defines the encoding of the website, <code>utf-8</code> is the standard</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="viewport">name="viewport" content=</label></div>
					<div class="input-container"><input id="viewport" type="text" placeholder="width=device-width, initial-scale=1" value="width=device-width, initial-scale=1"></div>
					<p>
						sets viewport properties<br>
						<code>width=device-width</code> makes its width the same as the physical device<br>
						<code>initial-scale=1</code> sets the initial scale to 1 (no zoom)
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container">
						<label for="http-equiv">http-equiv=</label>
						<label for="http-content">content=</label>
					</div>
					<div class="input-container">
						<input id="http-equiv" type="text" placeholder="Content-Security-Policy">
						<input id="http-content" type="text" placeholder="default-src 'self'">
					</div>
					<p>
						allows control over where resources are loaded from<br>
						<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta">mdn web docs</a><br>
						<a href="https://www.w3schools.com/tags/att_meta_http_equiv.asp">w3schools</a>
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="app-name">name="application-name" content=</label></div>
					<div class="input-container"><input id="app-name" type="text" placeholder="Application Name"></div>
					<p>
						for SPAs (single page applications)
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="theme-color">name="theme-color" content=</label></div>
					<div class="input-container"><input id="theme-color" type="text" placeholder="#FFFFFF"></div>
					<p>
						theme color for browser styling
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="description">name="description" content=</label></div>
					<div class="input-container"><input id="description" type="text" placeholder="App that generates HTML <head> tags."></div>
					<p>
						describe the site for search engines<br>
						maximum 150 characters
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="robots">name="robots" content=</label></div>
					<div class="input-container"><input id="robots" type="text" placeholder="index,follow"></div>
					<p>
						instructions for crawlers<br>
						robots.txt is site-wide, use this for per-page
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="generator">name="generator" content=</label></div>
					<div class="input-container"><input id="generator" type="text" placeholder="WordPress 3.0.1"></div>
					<p>
						identify the software used to build the site
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="subject">name="subject" content=</label></div>
					<div class="input-container"><input id="subject" type="text" placeholder="HTML Head Generator"></div>
					<p>
						short description of the subject of the page
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="rating">name="rating" content=</label></div>
					<div class="input-container"><input id="rating" type="text" placeholder="General"></div>
					<p>
						appropriate age for page content<br>
						possible values:<br>
						- general<br>
						- mature<br>
						- adult<br>
						- restricted<br>
						- 14 years<br>
						- safe for kids<br>
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="referrer">name="subject" content=</label></div>
					<div class="input-container"><input id="referrer" type="text" placeholder="no-referrer"></div>
					<p>
						how to handle referrer information
					</p>
				</fieldset>
			</fieldset>
			<fieldset class="category">
				<legend>link</legend>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="stylesheet">rel="stylesheet" href=</label></div>
					<div class="input-container"><input id="stylesheet" type="text" placeholder="style.css"></div>
					<p>points to an external stylesheet</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="canonical">rel="canonical" href=</label></div>
					<div class="input-container"><input id="canonical" type="text" placeholder="http://example.com/article"></div>
					<p>
						for preventing duplicate content in search engines<br>
						set the link to the main page the content lives<br>
						<a href="https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls#rel-canonical-link-method">google dev docs</a>
					</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container">
						<label for="alternate">rel="alternate" href=</label>
						<label for="hreflang">hreflang=</label>
					</div>
					<div class="input-container">
						<input id="alternate" type="text" placeholder="https://es.website.com">
						<input id="hreflang" type="text" placeholder="es">
					</div>
					<p>test</p>
				</fieldset>
			</fieldset>
		</form>
		<div id="right">
			<button id="test">Check</button>
			<div id="output">
				<code id="output-code">
					some output
				</code>
			</div>
		</div>
	</main>
	https://html.spec.whatwg.org/multipage/semantics.html#standard-metadata-names
</body>


<?php require "foot.php"; ?>
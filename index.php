<?php require "head.php"; ?>

<body>
	<main>
		<form id="headmaker">
			<fieldset class="category">
				<legend>core metadata</legend>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="charset">meta charset=</label></div>
					<div class="input-container"><input id="charset" type="text" value="utf-8" placeholder="utf-8"></div>
					<div class="description">
						defines the character encoding
						<ul>
							<li><code>utf-8</code> //standard</li>
						</ul>
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="viewport">meta name="viewport" content=</label></div>
					<div class="input-container"><input id="viewport" type="text" placeholder="width=device-width, initial-scale=1" value="width=device-width, initial-scale=1"></div>
					<div class="description">
						sets viewport properties
						<ul>
							<li><code>width=device-width, initial-scale=1</code>//sets document width to device width, and not zoomed in by default</li>
						</ul>
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container">
						<label for="content-security-policy">meta http-equiv="content-security-policy" content=</label>
					</div>
					<div class="input-container">
						<input id="content-security-policy" type="text" placeholder="default-src">
					</div>
					<div class="description">
						allows control over where resources are loaded from<br>
						helps prevent cross-site scripting attacks
						<ul>
							<li><code>default-src 'self'</code>//only allow content from same origin</li>
							<li><code>script-src 'self' www.google-analytics.com ajax.googleapis.com;</code>//allow scripts from same origin, plus google analytics & google ajax cdn</li>
							<li><code>default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self'; style-src 'self';base-uri 'self';form-action 'self'</code>//allows only images, scripts, ajax, form actions, and css from same origin</li>
						</ul>
						<a href="https://w3c.github.io/webappsec-csp/#content-security-policy-object>">w3 consortium docs</a><br>
						<a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy">mdn web docs</a><br>
						<a href="https://content-security-policy.com">content security policy quick reference</a>
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="theme-color">meta name="theme-color" content=</label></div>
					<div class="input-container"><input id="theme-color" type="text" placeholder="#FFFFFF"></div>
					<div class="description">
						theme color for browser styling
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="description">meta name="description" content=</label></div>
					<div class="input-container"><input id="description" type="text" placeholder="App for generating HTML <head> tags."></div>
					<div class="description">
						describe the site for search engines<br>
						maximum 150 characters
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="robots">meta name="robots" content=</label></div>
					<div class="input-container"><input id="robots" type="text" placeholder="index,follow"></div>
					<div class="description">
						instructions for crawlers<br>
						robots.txt is site-wide, use this for per-page
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="subject">meta name="subject" content=</label></div>
					<div class="input-container"><input id="subject" type="text" placeholder="HTML Head Generator"></div>
					<div class="description">
						short description of the subject of the page
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="referrer">meta name="subject" content=</label></div>
					<div class="input-container"><input id="referrer" type="text" placeholder="no-referrer"></div>
					<div class="description">
						how to handle referrer information
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="format-detection">meta name="format-detection" content=</label></div>
					<div class="input-container"><input id="format-detection" type="text" placeholder="telephone=no"></div>
					<div class="description">
						disable automatic detection and formatting of addresses and whatnot<br>
						browser support is mixed<br>
						possible values:<br>
						- date=no/yes<br>
						- telephone=no/yes<br>
						- address=no/yes<br>
						- email=no/yes
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="subject">meta name="subject" content=</label></div>
					<div class="input-container"><input id="subject" type="text" placeholder="HTML Head Generator"></div>
					<div class="description">
						short description of the subject of the page
					</div>
				</fieldset>
			</fieldset>
			<fieldset class="category">
				<legend>other metadata</legend>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="app-name">meta name="application-name" content=</label></div>
					<div class="input-container"><input id="app-name" type="text" placeholder="Application Name"></div>
					<div class="description">
						for single page applications
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="generator">meta name="generator" content=</label></div>
					<div class="input-container"><input id="generator" type="text" placeholder="WordPress 3.0.1"></div>
					<div class="description">
						identify the software used to build the site
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="rating">meta name="rating" content=</label></div>
					<div class="input-container"><input id="rating" type="text" placeholder="General"></div>
					<div class="description">
						appropriate age for page content<br>
						possible values:<br>
						- general<br>
						- mature<br>
						- adult<br>
						- restricted<br>
						- 14 years<br>
						- safe for kids<br>
					</div>
				</fieldset>
			</fieldset>
			<fieldset class="category">
				<legend>SEO</legend>
			</fieldset>
			<fieldset class="category">
				<legend>social media embeds</legend>
			</fieldset>
			<fieldset class="category">
				<legend>browsers</legend>
			</fieldset>
			<fieldset class="category">
				<legend>app links</legend>
			</fieldset>
			<fieldset class="category">
				<legend>link</legend>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="stylesheet">link rel="stylesheet" href=</label></div>
					<div class="input-container"><input id="stylesheet" type="text" placeholder="style.css"></div>
					<div class="description">
						points to an external stylesheet
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="canonical">link rel="canonical" href=</label></div>
					<div class="input-container"><input id="canonical" type="text" placeholder="http://example.com/article"></div>
					<div class="description">
						for preventing duplicate content in search engines<br>
						set the link to the main page the content lives<br>
						<a href="https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls#rel-canonical-link-method">google dev docs</a>
					</div>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container">
						<label for="alternate">link rel="alternate" href=</label>
						<label for="hreflang">hreflang=</label>
					</div>
					<div class="input-container">
						<input id="alternate" type="text" placeholder="https://es.website.com">
						<input id="hreflang" type="text" placeholder="es">
					</div>
					<div class="description">
						test
					</div>
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
	https://wiki.whatwg.org/wiki/MetaExtensions
</body>


<?php require "foot.php"; ?>
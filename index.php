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
					<p>test</p>
				</fieldset>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="viewport">name="viewport" content=</label></div>
					<div class="input-container"><input id="viewport" type="text" placeholder="width=device-width, initial-scale=1" value="width=device-width, initial-scale=1"></div>
					<p>test</p>
				</fieldset>
			</fieldset>
			<fieldset class="category">
				<legend>link</legend>
				<fieldset class="tag">
					<input type="checkbox" class="show-hidden">
					<div class="label-container"><label for="stylesheet">rel="stylesheet" href=</label></div>
					<div class="input-container"><input id="stylesheet" type="text" placeholder="style.css"></div>
					<p>test</p>
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
			<code id="output">
				some output
			</div>
		</div>
	</main>
</body>


<?php require "foot.php"; ?>
<?php require "head.php"; ?>

<body>
	<main>
		<form id="headmaker">
			<fieldset>
				<legend>meta</legend>
				<fieldset>
					<label for="charset">charset=</label>
					<input id="charset" type="text" value="utf-8" placeholder="utf-8">
				</fieldset>
				<fieldset>
					<label for="viewport">name="viewport" content=</label>
					<input id="viewport" type="text" placeholder="width=device-width, initial-scale=1" value="width=device-width, initial-scale=1">
				</fieldset>
			</fieldset>
			<fieldset>
				<legend>link</legend>
				<fieldset>
					<label for="stylesheet">rel="stylesheet" href=</label>
					<input id="stylesheet" type="text" placeholder="style.css">
				</fieldset>
				<fieldset>
					<label for="alternate">rel="alternate" href=</label>
					<input id="alternate" type="text" placeholder="https://es.website.com">
					<label for="hreflang">hreflang=</label>
					<input id="hreflang" type="text" placeholder="es">
				</fieldset>
			</fieldset>
		</form>
		<div id="right">
			<button id="test">Check</button>
			<div id="output">
				here's a bunch of output'
			</div>
		</div>
	</main>
</body>


<?php require "foot.php"; ?>
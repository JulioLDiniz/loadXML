<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Upload XML archive</title>
</head>
<body>
	<h1>Selecionar XML</h1>
	<form action="loadXml.php" method="POST" enctype="multipart/form-data">
		<label for="archive">Select archive</label>
		<input type="file" name="archive"><br>
		<input type="submit" value="Load">
	</form>
</body>
</html>
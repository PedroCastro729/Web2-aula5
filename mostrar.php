<!DOCTYPE html>
<html>
<body>
<?php
$arquivo = fopen("diario.md", "r");
echo fread($arquivo, filesize("diario.md"));
fclose($arquivo);
?>
</body>
</html>

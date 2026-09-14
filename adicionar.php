<!DOCTYPE html>
<html>
<body>
<form method="post">
<textarea name="texto" rows="10" cols="50"></textarea>
<br>
<input type="submit" value="Salvar">
</form>

<?php
if (isset($_POST["texto"])) {
    $arquivo = fopen("diario.md", "a");
    fwrite($arquivo, $_POST["texto"] . "\n");
    fclose($arquivo);
    echo "Diário salvo!";
}
?>
</body>
</html>

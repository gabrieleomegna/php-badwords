<h1>Badwords</h1>

<?php 
    $paragraph = 'Oggi Gino è andato al mare, perché preferisce l\'ambiente marino piuttosto che quello di montagna. Gino ha trascorso questa vacanza in compagnia di sua moglie e sua figlia';
    echo $paragraph; 
?>

<p><?php $paragraph ?></p>
<p>The paragraph is <?php echo strlen($paragraph) ?>characters</p>

<form action="./index.php" method="GET">
    <label for="wordFilter">Please enter a word to censor</label>
    <input type="text" name="wordFilter" id="wordFilter">
    <button type="submit">Invia</button>
</form>

<?php 
    $userWord = $_GET['wordFilter'];
    echo $userWord;
?> <br>
<?php
    $newParagraph = str_ireplace ($userWord, '***', $paragraph);
    echo $newParagraph;
?>
<br>
<p>New paragraph's length is: <?php echo strlen($newParagraph) ?></p>
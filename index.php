<?php 

$bannedWord = $_GET['bannedWord'];
$paragraph = 'And that, kids, is how I met your mother.';
$censoredParagraph = str_replace($bannedWord, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <h2>Paragrafo originale: 
    <span style="color: red">
      <?php echo $paragraph ?>
    </span> 
  </h2>
  <h2>********</h2>
  <h2>
    Paragrafo censurato: (parola censurata: <?php echo $bannedWord ?>)
    <span style="color: cornflowerblue">
      <?php echo $censoredParagraph ?>
    </span>
  </h2>
  <h2>
    Il paragrafo originale è lungo
    <span style="color: tomato">
      <?php echo strlen($paragraph) ?>
    </span>
    caratteri, mentre quello censurato 
    <span style="color: tomato">
      <?php echo strlen($censoredParagraph) ?>
    </span>.
  </h2>
</body>
</html>
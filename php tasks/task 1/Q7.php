<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $word = $_POST["word"];
        $first_letter = substr($word,0,1);
        $word = substr($word,1);
        $new_element = "<p style=\"font-size:3rem;\"><span style=\"color:red;\">$first_letter</span>$word</p>";
        echo $new_element;
    ?>
</body>
</html>
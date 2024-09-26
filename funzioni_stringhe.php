<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni stringhe</title>
</head>
<body>
    <?php
     $str = "Proin sed dignissim justo. Suspendisse egestas cursus iaculis. Mauris et dui dapibus, semper diam non, auctor lorem. Vivamus aliquam egestas nunc, eu rhoncus tortor dictum in. Vestibulum justo lorem, faucibus et ipsum ut, congue blandit velit. Quisque eros ante, molestie id rhoncus ut, gravida quis nulla. Praesent feugiat nisi eu metus placerat, vitae fringilla nunc vestibulum. Aenean imperdiet hendrerit est in auctor. Proin egestas laoreet consectetur. Sed id risus nulla. In ultricies gravida interdum. Sed tempus posuere elit. Nam sagittis massa in massa luctus, quis vulputate purus semper. Mauris varius lacus ut nulla auctor, quis mattis sem vehicula.";
    
     echo "<p style= 'color: green;'>$str</p>";

     $maiuscola = strtoupper($str);

     echo "<p style= 'color: blue;'>$maiuscola</p>";

     $caratteri = strlen($str);

     echo "<span style= 'color: red;'>$caratteri</span>";

     $parole = str_word_count($str);

     echo "<span style= 'color: yellow;'>$parole</span>";


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
</head>

<body>
    <!-- PHP TEXT -->
    <?php
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ratione soluta? Voluptatum perferendis ab aspernatur. Porro quaerat, dolorum cumque similique consequatur exercitationem repellat eum blanditiis? Aliquid itaque optio maxime dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis assumenda dolores doloremque possimus commodi et exercitationem tempora officiis distinctio cupiditate quod sapiente libero expedita a soluta, magnam iste hic animi.';
        $length = strlen($text); 
    ?>
    <h1>PHP BADWORDS</h1>
    <!-- Print text php -->
    <P><?php echo $text; ?></P>
    <!-- Text length -->
    <P>La lunghezza del paragrafo è <strong><?php echo $length;?></strong> caratteri </P>
   
    <!-- REPLACE BADWORD -->
    <?php
        $badword_word = $_GET['badword'];                           # badword in URL - example: http://localhost/php-badwords/?badword=Lorem  
        $replaced_text = str_replace($badword_word, '***', $text)   # replaced text 
    ?>

    <!-- Print replaced_text -->
    <h2>Replace Text</h2>
    <h3>In url digit: http://localhost/php-badwords/?badword=Lorem </h3>
    <a href=""></a>
    <p><?php echo $replaced_text; ?></p>
</body>
</html>
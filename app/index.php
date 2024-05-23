<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];

        // $a = 1;
        // $b = 9;
    ?>
    <form action="./index.php" method="post">
        <input type="text" name="a" value="<?php echo $a; ?>">
        <input type="text" name="b" value="<?php echo $b; ?>">
        <input type="submit" value="Aprēķins">
    </form>
    <h1>Summa: <?php echo $a + $b; ?></h1>
    <h1>Summa2: <?= $a + $b ?></h1>
    <h1>Starpība: <?php echo $a - $b; ?></h1>
    <h1>Reizinājums: <?php echo $a * $b; ?></h1>
    <h1>Dalījums: <?php 
    
    if ($b != 0) {
        echo $a / $b;
    } else {
        echo 'ar nulli nedalam';
    }

    ?></h1>
    <h1>Kāpinājums: <?php echo $a ** $b; ?></h1>
    <h1>Mod: <?php echo $a % $b; ?></h1>
    <h2>3 == '3' <?php echo 3 == '3' ? 'vienādi' : 'dažādi'; ?></h2>
    <h2>3 === '3' <?php echo 3 === '3' ? 'vienādi' : 'dažādi'; ?></h2>
    <h2>3 != '3' <?php echo 3 != '3' ? 'dažādi' : 'vienādi'; ?></h2>
    <h2>3 !== '3' <?php echo (3 !== '3' ? 'dažādi' : 'vienādi'); ?></h2>

    <?php for ($i=0; $i<10; $i++) { ?>
        <h5><?= $i+1 ?>. virsraksts</h5>
        <p>Teksta bloks</p>
    <?php } ?>

    <?php 
    
    for ($i=5; $i<10; $i++) { 
        echo '<h5>'.$i.'. virsraksts</h5>';
    } 

    ?>
</body>
</html>
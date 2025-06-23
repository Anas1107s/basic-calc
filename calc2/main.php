<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ss/edit.css">
    <link rel="stylesheet" href="ss/reset/reset.css">
    <link rel="stylesheet" href="ss/main.css">
    <link rel="icon" href="images/favicon(calc).jpg" type="image/jpg">
    <title>Document</title>
</head>
<body>
    <script src="js/checkingValid.js"></script>
    <script src="js/maincalc.js"></script>
    <form action="includes/calchandler.php" method="POST">
        <div class="main-box">
            <input type="text" name="main_value" id="main_value" placeholder="Enter">
            
            <?php
                $button = [
                    ['7','8','9','/'],
                    ['4','5','6','*'],
                    ['1','2','3','-'],
                    ['.','0','=','+']
                ];
            ?>
            <div class="button-grid">
            <button type="Button" class='calc-btn' id="clear-btn">C</button>
            <button type='button'class='calc-btn' value='(' >(</button>
            <button type='button'class='calc-btn' value=')' >)</button>
            <button type='button'class='calc-btn' id='backspace-btn'>⌫</button>
            <?php
                foreach ($button as $row){
                    foreach ($row as $btn) {
                        echo "<button type='button' class='calc-btn' value='$btn' >$btn</button>";
                    }
                  
                };
            ?>
            </div>            
        </div>
    </form>
</body>
</html>
<?php
//pengulangan php
//for /foreach
$angka = [11,46,7,8,94,63,12,77];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>latihan pengulangan foreach  </title>
        <style>
            div{
                width: 50px;
                height: 50px;
                background-color: skyblue;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
            }
        </style>
    </head>
    <body>
        <?php foreach ( $angka as $key) { ?>
            <div><?php echo $key; ?></div>
            <?php }?>
    </body>
</html>
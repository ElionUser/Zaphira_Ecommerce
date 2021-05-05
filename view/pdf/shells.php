<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .bor { border:1px solid black; }
    .bor-b { border-bottom:1px solid black; }
    .pd { padding:10px; }
    .th , td { padding:20px; }
</style>
<body>
    <?php
        $total = 0; 
        $f = -1;
    ?>

    <table class="bor pd">
        <tr>
            <th>Descripcion</th>
            <th>Precio / u</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach($products as $p): ?>
            <?php $f++; ?>
            <tr>
                <td><?php echo $p->name ; ?></td>
                <td><?php echo '$ '.$p->price ; ?></td>
                <td><?php echo $p->name_brands ; ?></td>
                <td><?php echo 'cant.:'.$cuantities[$f]; ?></td>
                <td><?php echo '$ '.$p->price * $cuantities[$f]; ?></td>
            </tr>
            <?php $total = $p->price;?>
        <?php endforeach; ?>
        <tr>
            <td>Total</td>
            <td><?php echo $total;?></td>
        </tr>
    </table>
</body>
</html>
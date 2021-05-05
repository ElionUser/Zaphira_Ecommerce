<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdf - Marcas</title>
</head>
<body>
    <style>
        .bor { border:1px solid black; }
        .bor-b { border-bottom:1px solid black; }
        .pd { padding:10px; }
        .th , td { padding:5px; }
    </style>
    <table class="bor pd">
        <tr>
            <th>#</th>
            <th>Nombre</th>
        </tr>
        <?php foreach($brands as $brand): ?>
        <tr>
            <th><?php echo $brand->brands_id; ?></th>
            <td><?php echo $brand->name_brands; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
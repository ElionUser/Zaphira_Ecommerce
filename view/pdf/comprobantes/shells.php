<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * { font-size:.9rem; }
    table {
        border-collapse: separate;
        border-spacing:0px;
        width:700px;
    }
    .bor { border:1px solid black; }
    .bor-b { border-bottom:1px solid black; }
    .pd-0 { padding:0px; }
    .pd-1 { padding:5px; }
    .pd-2 { padding:10px; }
    
    .bg-1 { background-color:rgb(139, 177, 248); }

    .text-right { float:right;}
    td , th { text-align:center; }
    
</style>
<body>
    <?php

        $total = 0; 
        $f = -1;
    ?>
    <table>
        <tr>
            <td style="width:350px;height:150px;">
                <h1 style="font-size:2rem;"><?php echo $this->compact['company']->name; ?></h1>
            </td>
            <td>
               <span><strong>Orden de compra N°:</strong> 1251s44d</span><br><br>
               <span><strong>Fecha de pedido: </strong> <?php echo $this->compact['time']; ?></span>
            </td>
        </tr>
        <tr>
            <td class="pd-1" style="width:350px;">
                <span style="margin-right:15px;"><strong>Telefono: </strong><?php echo $this->compact['company']->phone; ?></span> 
                <span><strong>WhatsApp:</strong> <?php echo $this->compact['company']->cel; ?> </span><br><br>
                <?php echo $this->compact['company']->adress.' , '.$this->compact['company']->location.' - '.$this->compact['company']->dis; ?>  
            </td>
            <td>
               <strong>Direccion de envio :</strong> <br> <?php echo $this->compact['company']->locateToSend; ?><br>
            </td>
        </tr>
        <tr>
            <td class="pd-1" style="width:350px;">
                <span style="margin-right:15px;"><strong>Responsable:</strong> <?php echo $_SESSION['name']; ?></span>
                <strong>Telefono:</strong> 1123609768 <br>
            </td>
        </tr>
    </table>

    <br>
    <br>
    <table class="bor" style="height:600px;">
        <tr class="bg-1">
            <th class="pd-0">Cant.</th>
            <th class="pd-0">Descripcion</th>
            <th class="pd-0">Item</th>
            <th class="pd-0">Precio / u</th>
            <th class="pd-0">Impuesto</th>
            <th class="pd-0">Descuento</th>
            <th class="pd-0">Marca</th>
            <th class="pd-0">Subtotal</th>
        </tr>
        
        <?php foreach($this->compact['products'] as $p): ?>
            <?php 
                $f++;
                $tax_partial = ($p->price / 100) * $p->tax;
                $p->price = $p->price + $tax_partial; 

                $subtotal = $p->price * $p->quantities;

                if($p->descount_active == 1 ) {

                    $descount = ($subtotal / 100) * $p->descount;
                    $subtotal = $subtotal - $descount;
                }
            ?>
            <tr>
                <td class="pd-2"><?php echo $p->quantities; ?></td>
                <td class="pd-2" style="font-size:.8rem;"><?php echo $p->description ; ?></td>
                <td class="pd-2"><?php echo $p->name ; ?></td>
                <td class="pd-2"><?php echo '$ '.round($p->price,2); ?></td>
                <td class="pd-2"><?php echo $p->tax.' %' ; ?></td>
                <?php if($p->descount_active == 0): ?>
                    <td class="pd-2"><?php echo 'Sin descuento' ; ?></td>    
                <?php else: ?>    
                    <td class="pd-2"><?php echo $p->descount.' %'; ?></td> 
                <?php endif; ?>
                
                <td class="pd-2"><?php echo $p->name_brands ; ?></td>
                
                <td class="pd-2"><?php echo '$ '. round($subtotal,2); ?></td>
            </tr>
            <?php 
                $total = $total + round($subtotal,2); ?>
        <?php endforeach; ?>
            
    </table>
    <div class="bor bg-1" style="width:120px;float:right;margin-right:25px;padding:10px 15px;">
        <strong style="font-size:1rem;"><?php echo '$ '.$total;?></strong>
    </div>
    <div style="width:120px;float:right;padding:10px 15px;">
        <strong style="font-size:1rem;">Total</strong>
    </div>
</body>
</html>
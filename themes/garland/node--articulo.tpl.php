
<?php
    //*print_r($node);*//

?>

<div class="contProducto">
<div>
    <img class="imagenProducto" src="<?=file_create_url($node->field_imagen_articulo['und'][0]['uri']); ?>"> </img>
</div>

<div>
    <p class="textoProducto">  <?= $node->field_detalles_articulo['und'][0]['value'] ?> </p>
</div>

<div>
    <p class="precioProducto">  <?= $node->field_precio_articulo['und'][0]['value'] ?> </p>
</div>

</div>

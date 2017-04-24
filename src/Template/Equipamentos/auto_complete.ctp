<ul>
<?php
    foreach($equipamentos as $equipamento)
        echo '<li>' . $equipamento['Equipamento']['nome'] . '</li>';
?>
</ul>
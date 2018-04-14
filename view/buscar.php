<div class="formI">
    <h1>Menu para Buscar</h1>
    <form action="../php/querys.php" method="post">

        <div class="group">
            <label for="ci">Cedula</label>
            <input type="text" name="ciB" id="" placeholder="Cedula">
        </div>

        <input class="group" type="submit" name="submitB" value="Procesar">
        <input class="group" type="reset" value="Limpiar">
    </form>
<pre>


</pre>
<?php if(isset($_POST["submitB"])): ?>
    <form action="" method="post">
        <h1>Consultado</h1>
        <div class="group">
    <?php

    ?>
        </div>
    </form>
<?php endif ?>
</div>
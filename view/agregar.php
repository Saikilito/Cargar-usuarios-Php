<div class="formI">
    <h1>Menu Agregar</h1>
    <form action="./php/querys.php" method="post">

        <div class="group">
            <label for="ci">Cedula</label>
            <input type="text" name="ciA" id="" placeholder="Cedula de identidad" >
        </div>
        <div class="group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="" placeholder="Ingrese su nombre" >
        </div>
        <div class="group">
            <label for="last">Apellido</label>
            <input type="text" name="last" id="" placeholder="Ingrese su apellido" >
        </div>
        <div class="group">
            <label for="user">Usuario</label>
            <input type="text" name="user" id="" placeholder="Usuario a mostrar" >
        </div>
        <div class="group">
            <label for="cont">Contrasena</label>
            <input type="text" name="cont" id="" placeholder="Contraseña" >
        </div>
        <div class="group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="" placeholder="Direccion de email" >
        </div>
        <div class="groupC">
            <label for="logica">Logica</label>
            <input type="checkbox" value="1" name="logica" id="">
        
        
            <label for="tele">Teleprocesos</label>
            <input type="checkbox" value="1" name="tele" id="">
        
        
            <label for="c">Lenguaje C</label>
            <input type="checkbox" value="1" name="c" id="">
        
        
            <label for="elect">Electiva</label>
            <input type="checkbox" value="1" name="elect" id="">
        
        
            <label for="estad">Estadistica</label>
            <input type="checkbox" value="1" name="estad" id="">
        
        
            <label for="mat">Matematicas</label>
            <input type="checkbox" value="1" name="mat" id="">
        </div>

        <input class="group" name="submitA" type="submit" value="Procesar">
        <input class="group" type="reset" value="Limpiar">
    </form>
</div>
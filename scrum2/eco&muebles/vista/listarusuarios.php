<!DOCTYPE html>
<html lang="es">
<head>
	<title>ECO&MUEBLES</title>	
	<link rel="stylesheet" type="text/css" href="../css/estilocrud.css">
	<meta charset="utf-8">
	<meta name="keywords" content="reparacion,muebles">
	<meta name="description" content="Pagina de muebles">
	<meta name="author" content="TATIANA VARGAS">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>    	
<div class="contenido">
<a href="../vista/administrador.php"><input type="button" value="Inicio administrador" class="boton1"></a>
<a href="../vista/registrousuarios.php"><input type="button" value="Registrar" class="boton1"></a>
<h1 id="subt" align="center">Lista de usuarios</h1>
<table class="table">
            <thead>
                <tr>
                    <th>IdUsuarios</th>
                    <th>Idtipos</th>
                    <th>Documentos de usuarios</th>
                    <th>Nombres Usuarios</th>
					<th>Apellidos Usuarios</th>
					<th>Correo Usuario</th>
					<th>Telefono</th>
					<th>clave usuario</th>
					<th>Direccion</th>
					<th>IdMunicipios</th>
					<th>IdRol</th>
					<th>Nombre Comuna</th>
					<th>Acciones</th>
                </tr>
            </thead>
			<tbody>		
			<?php
			    include('../controlador/controladorlistar.php');
                foreach ($Usuarios as $key) {
            ?>
			<tr>
            <td><?php echo  $key->getid_usuarios() ?></td>
			<td><?php echo  $key->getid_tipos() ?></td>
			<td><?php echo  $key->getdocumento_usuarios() ?></td>
			<td><?php echo  $key->getnombres_usuarios() ?></td>
			<td><?php echo  $key->getapellidos_usuario() ?></td>
			<td><?php echo  $key->getcorreo_usuario() ?></td> 
			<td><?php echo  $key->gettelefono() ?></td>  
			<td><?php echo  $key->getpass_usuarios() ?></td>  
			<td><?php echo  $key->getdireccion() ?></td>  
			<td><?php echo  $key->getid_municipios() ?></td>  
			<td><?php echo  $key->getid_rol() ?></td>  
			<td><?php echo  $key->getnom_comuna() ?></td>       
			<td>		
			<a href="../controlador/controladoreliminar.php?id_usuarios=<?php echo $key->getid_usuarios();?>"><input type="submit" value="Eliminar" ></a>
			<a href="../vista/actualizarusuarios.php?id_usuarios=<?php echo $key->getid_usuarios();?>"><input type="submit" value="Actualizar" name="update"></a>
			</td>
			</tr>
			<?php
			}
			?>
			</tbody> 
			
    </table>
	
	
	
</div>
</body>
</html>
<?php  
 //action.php  
 if(isset($_POST["action"]))  
 {  
      $output = '';  
    $connect = mysqli_connect('localhost', 'id13394599_administrator', '->f9qDQwGDM7Fqq=') or 
    die ('Unable to connect. Check your connection parameters.');
    mysqli_select_db($connect, 'id13394599_usuarios') or die(mysqli_error($connect));
      if($_POST["action"] =="Add")  
      {  
           $administrador = mysqli_real_escape_string($connect, $_POST["administrador"]);  
           $tutor = mysqli_real_escape_string($connect, $_POST["tutor"]); 
           $nombre = mysqli_real_escape_string($connect, $_POST["nombre"]);  
           $apellidos = mysqli_real_escape_string($connect, $_POST["apellidos"]); 
           $curso = mysqli_real_escape_string($connect, $_POST["curso"]);  
           $grupo = mysqli_real_escape_string($connect, $_POST["grupo"]); 
           $query = 'INSERT INTO
            usuarios
                (administrador, tutor, nombre, apellidos, curso, grupo)
            VALUES
                ('. $_POST['administrador'] .' ,
                  '. $_POST['tutor'] .' ,
                 "' . $_POST['nombre'] . '",
                 "' . $_POST['apellidos'] . '",
                 ' . $_POST['curso'] . ',
                 "' . $_POST['grupo'] . '")'; 
           if (isset($query)) {
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                echo 'Datos insertados correctamente'; 
            } 
      }  
      if($_POST["action"] == "Edit")  
      {  
           $administrador = mysqli_real_escape_string($connect, $_POST["administrador"]);  
           $tutor = mysqli_real_escape_string($connect, $_POST["tutor"]); 
           $nombre = mysqli_real_escape_string($connect, $_POST["nombre"]);  
           $apellidos = mysqli_real_escape_string($connect, $_POST["apellidos"]); 
           $curso = mysqli_real_escape_string($connect, $_POST["curso"]);  
           $grupo = mysqli_real_escape_string($connect, $_POST["grupo"]);   
           $query = 'UPDATE usuarios SET
                administrador = ' . $_POST['administrador'] . ',
                tutor = ' . $_POST['tutor'] . ',
                nombre = "' . $_POST['nombre'] . '",
                apellidos = "' . $_POST['apellidos'] . '",
                curso = ' . $_POST['curso'] . ',
                grupo = "' . $_POST['grupo'] . '"
            WHERE
                id_alumno = ' . $_POST['id'];
           if (isset($query)) {
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                echo 'Datos editados correctamente'; 
            }    
      }  
      if($_POST["action"] == "Delete")  
      {  
           $query = 'DELETE FROM usuarios  WHERE id_alumno =  ' . $_POST['id'];
        $result = mysqli_query($connect, $query) or die(mysqli_error($connect)); 
        echo 'Datos eliminados correctamente';
      }  
 }  
 ?>  
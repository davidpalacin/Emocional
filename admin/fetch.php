<?php  
 //fetch.php  
$connect = mysqli_connect('localhost', 'id13394599_administrator', '->f9qDQwGDM7Fqq=') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($connect, 'id13394599_usuarios') or die(mysqli_error($connect));
 if(isset($_POST["id"]))  
 {  
      $output = array(); 
      $query = 'SELECT * FROM usuarios WHERE id_alumno =  ' . $_POST['id'];
        $result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
                if(mysqli_num_rows($result) > 0)  
                {  
                     while ($row = mysqli_fetch_assoc($result))
                     {  
                     $output['administrador'] = $row["administrador"];  
                     $output['tutor'] = $row["tutor"]; 
                     $output['nombre'] = $row["nombre"];  
                     $output['apellidos'] = "cas"; 
                     $output['curso'] = $row["curso"];  
                     $output['grupo'] = $row["grupo"]; 
                     
                }  
                echo json_encode($output);  
           }  
      }  
 
 ?>  
<?php  
 //select.php  
 $output = '';  
$connect = mysqli_connect('localhost', 'id13394599_administrator', '->f9qDQwGDM7Fqq=') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($connect, 'id13394599_usuarios') or die(mysqli_error($connect));
 if(isset($_POST["action"]))  
 {  
      $query = 'SELECT * FROM usuarios';
        $result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
                $output .= '  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="35%">Administrador</th>  
                               <th width="35%">Tutor</th>
                               <th width="35%">Nombre</th>  
                               <th width="35%">Apellidos</th> 
                               <th width="35%">Curso</th>  
                               <th width="35%">Grupo</th> 
                               <th width="15%">Update</th>  
                               <th width="15%">Delete</th>  
                          </tr>  
                ';  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while ($row = mysqli_fetch_assoc($result))
                     {  
                          $output .= '  
                               <tr>  
                                    <td>'.$row["administrador"].'</td>  
                                    <td>'.$row["tutor"].'</td> 
                                    <td>'.$row["nombre"].'</td>  
                                    <td>'.$row["apellidos"].'</td> 
                                    <td>'.$row["curso"].'</td>  
                                    <td>'.$row["grupo"].'</td> 
                                    <td><button type="button" name="update" id="'.$row["id_alumno"].'" class="update btn btn-success btn-xs">Update</button></td>  
                                    <td><button type="button" name="delete" id="'.$row["id_alumno"].'" class="delete btn btn-danger btn-xs">Delete</button></td>  
                               </tr>  
                          ';  
                     }  
                }  
                else  
                {  
                     $output .= '  
                          <tr>  
                               <td colspan="4">Data not Found</td>  
                          </tr>  
                     ';  
                }  
                $output .= '</table>';  
                echo $output;  
           }  
        
  
 ?>  
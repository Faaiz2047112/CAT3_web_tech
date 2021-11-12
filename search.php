<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form action="" method="post">  
Search: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  
<?php
if (!empty($_REQUEST['term'])) {

$term = $_REQUEST['term'];     

$sql = "SELECT * FROM stuinfo WHERE stu_id LIKE '%".$term."%'"; 
$result =mysqli_query($con,$sql); 

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['stu_id'];
        $name=$row['name'];
        $age=$row['age'];
        $gender=$row['gender'];
        $course=$row['course'];
        $address=$row['address'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$age.'</td>
        <td>'.$gender.'</td>
        <td>'.$course.'</td>
        <td>'.$address.'</td>
        <td>
         <button><a href="update.php?updateid='.$id.'">Update</a></button>
        <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>  
      </tr>';
    }
}




}
?>
    </body>
</html>

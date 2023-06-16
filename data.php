<?php require 'connection.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Data</title>
</head>
<body>
    <table>
        <tr>
           <td>#</td>
           <td>vegetable</td>
           <td>sort</td>
           <td>image</td>
</tr>
<?php
$i=1;
$rows=mysqli_query($conn, "SELECT*FROM vegetablebot ORDER BY id DESC");
?>
<?php foreach($rows as $row): ?>
    <tr>

    <td><?php echo $i++; ?></td>
    <td><?php echo $row["vegetable"];  ?></td>
    <td><?php echo $row["sort"];  ?></td>
    <td>  <img src="img/<?php echo $row['image'];?>" alt=""> </td>
</tr>
<?php endforeach; ?>
        </table>
</body>
</html>
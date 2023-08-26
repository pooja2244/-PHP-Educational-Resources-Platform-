<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn= new mysqli('localhost','root','','prj2');
    $sql= "select * from sign_up_table order by id desc";
    $result= mysqli_query($conn,$sql) or die("Error");
    if(mysqli_num_rows($result)>0){
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th> Name</th>
            <th>username</th>
            <th>Edit</th>
        </tr>
        <?php
        
        while( $rows= mysqli_fetch_assoc($result)){ 
            $name= $rows['first_name'].$rows['last_name'];
            $username= $rows['username'];
            $user_id= $rows['id'];
            ?>
            <tr>
            <td><?php
            echo $user_id;
            ?></td>
            <td><?php
            echo $name;
            ?></td>
            <td><?php
            echo $username;
            ?>
            </td>
            <td><?php
            echo $name;
            ?></td>
            </tr>
            <?php
        }
            ?>
    </table>
    <?php }
    else {
        echo "No user available";
    }
    ?>
    
</body>
</html>
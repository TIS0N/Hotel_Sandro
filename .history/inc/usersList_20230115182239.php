<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    while($row = $result->fetch_array()){?>
        <tr>
            <td><?php echo $row["firstName"];?></td>
            <td><?php echo  $row["lastName"];?></td>
            <td><?php echo  $row["usersUid"];?></td>
            <td><?php echo  $row["usersEmail"];?></td>
        </tr>
    <?php
    }
    ?>
    
</table>
<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "std_form");

$query = "SELECT * FROM `email` ";

$result = mysqli_query($link, $query);
?>


<table border="2" width="70%">
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>Date</td>
    </tr>

    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['created']?></td>

            <td>
                <a href="view_email.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit_email.php ?id=<?php echo $row['id']?>">Edit</a> |

                <a href="delete_email.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>




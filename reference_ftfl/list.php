<?php


$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "SELECT * FROM `reference`";

$result = mysqli_query($link, $query);
?>



<ul>
    <li><a href="#">Download as XL</a></li>
    <li><a href="https://github.com/Afreenjoarder">Go to Github</a></li>
    <li><a href="create_ref.html">Create New</a></li>
</ul>








<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Reference Name</td>
        <td>Organization</td>
        <td>Address</td>
        <td>mobile No</td>

        <td>Relation</td>

    </tr>

    <?php

    foreach($result as $row){



        ?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['referenceName']?></td>
        <td><?php echo $row['Organization']?></td>
        <td><?php echo $row['Address']?></td>
        <td><?php echo $row['mobileNo']?></td>

        <td><?php echo $row['Relation']?></td>

        <td>
            <a href="view.php?ID=<?php echo $row['ID']?>">View</a> |
            <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> |

            <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> |

        </td>
    </tr>


    <?php
    }



    ?>

</table>




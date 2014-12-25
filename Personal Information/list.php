<?php

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "ftfl_db");

$query = "SELECT * FROM `personal_info`";

$result = mysqli_query($link, $query);
?>

<ul>
    <li><a href="#">Download as XL</a></li>
    <li><a href="https://github.com/Afreenjoarder">Go to Github</a></li>
    <li><a href="create_form.html">Create New</a></li>
</ul>

<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Name</td>

        <td>Father's Name</td>

        <td>Mother's Name</td>

        <td>Religion</td>

        <td>Date of Birth</td>
        <!--
        <td>Gender</td>
        <td>Nationality</td>
        <td>National ID</td>-->
    </tr>

    <?php

    foreach($result as $row){



        ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['name']?></td>

            <td><?php echo $row['father_Name']?></td>
            <td><?php echo $row['mother_Name']?></td>
            <td><?php echo $row['Religion']?></td>
            <td><?php echo $row['Date_of_Birth']?></td>
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



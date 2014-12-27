<?php


$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_training");

$query = "SELECT * FROM `training_skills`";

$result = mysqli_query($link, $query);
?>

<ul>
    <li><a href="#">Download as XL</a></li>
    <li><a href="#">Download as PDF</a></li>
    <li><a href="create.html">Create New</a></li>
</ul>

<table border="1" width="60%">
    <tr>
        <td>ID</td>
        <td>Training Title</td>
        <td>Training Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Training Year</td>
        <td>Duration</td>
        <td>Experience category</td>
        <td>skill Description</td>
        <td>Extracurricular activities</td>
    </tr>

    <?php

    foreach($result as $row){



    ?>

    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['titletraining']?></td>
        <td><?php echo $row['training_Description']?></td>
        <td><?php echo $row['institute_name']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['training_Year']?></td>
        <td><?php echo $row['Duration']?></td>
        <td><?php echo $row['Experience_category']?></td>
        <td><?php echo $row['skill_Description']?></td>
        <td><?php echo $row['Extracurricular_activities']?></td>
        <td>
            <a href="view.php?ID=<?php echo $row['ID']?>">View</a> |
            <a href="edit.php?ID=<?php echo $row['ID']?> ">Edit</a> |

            <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> |

        </td>
    </tr>


    <?php
    }



    ?>

</table>




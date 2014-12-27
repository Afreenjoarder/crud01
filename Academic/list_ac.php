<?php

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "SELECT * FROM `Academic`";

$result = mysqli_query($link, $query);
?>

<ul>
    <li><a href="#">Download as XL</a></li>
    <li><a href="#">Download as PDF</a></li>
    <li><a href="create_form.html">Create New</a></li>
</ul>

<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>level_of_education</td>
        <td>Exam_title</td>
        <td>Group_sub</td>
        <td>Institution</td>
        <td>Resulttype</td>
        <td>Result</td>

        <td>Scale</td>

        <td>Passing_year</td>
        <td>Duration</td>
        <td>Achievement</td>

    </tr>

    <?php

    foreach($result as $row){



        ?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Level_of_education']?></td>
        <td><?php echo $row['Exam_title']?></td>
        <td><?php echo $row['Group_sub']?></td>
        <td><?php echo $row['Institution']?></td>
        <td><?php echo $row['Resulttype']?></td>
        <td><?php echo $row['Result']?></td>
        <td><?php echo $row['Scale']?></td>
        <td><?php echo $row['Passing_year']?></td>
        <td><?php echo $row['Duration']?></td>
        <td><?php echo $row['Achievement']?></td>
        <td>
            <a href="view_ac.php?ID=<?php echo $row['ID']?>">View</a> |
            <a href="edit_ac.php?ID=<?php echo $row['ID']?>">Edit</a> |

            <a href="delete_ac.php?ID=<?php echo $row['ID']?>">Delete</a> |

        </td>
    </tr>


    <?php
    }



    ?>

</table>





<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "std_form");

$query = "SELECT * FROM `Form`";

$result = mysqli_query($link, $query);
?>

<ul>
    <li><a href="#">Download as XL</a></li>
    <li><a href="https://github.com/Afreenjoarder/crud01">Go to github</a></li>
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
        <td>Gender</td>
        <td>Nationality</td>
        <td>National ID</td>
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>District</td>
        <td>Mobile</td>
        <td>Email</td>
        <td>Preferred Track</td>
        <td>S.S.C Roll</td>
        <td>S.S.C Board</td>
        <td>H.S.C Roll</td>
        <td>H.S.C Board</td>
        <td>Preferred Exam Center</td>
        <td>last level of education</td>
        <td>Exam title</td>
        <td>Group sub</td>
        <td>Institution</td>
        <td>Result</td>
        <td>Passing year</td>
        <td>Experience category</td>
        <td>skill Description</td>
        <td>Extracurricular activities</td>
        <td>Reference Name</td>
        <td>Organization</td>
        <td>Address</td>
        <td>mobile No</td>
        <td>Email id</td>
        <td>Relation</td>

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
            <td><?php echo $row['Gender']?></td>
            <td><?php echo $row['Nationality']?></td>
            <td><?php echo $row['National_ID']?></td>
            <td><?php echo $row['Present_Address']?></td>
            <td><?php echo $row['Permanent_Address']?></td>
            <td><?php echo $row['District']?></td>
            <td><?php echo $row['Mobile']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['Preferred_Track']?></td>
            <td><?php echo $row['S.S.C_Roll']?></td>
            <td><?php echo $row['S.S.C_Board']?></td>
            <td><?php echo $row['H.S.C_Roll']?></td>
            <td><?php echo $row['H.S.C_Board']?></td>
            <td><?php echo $row['Preferred_Exam_Center']?></td>
            <td><?php echo $row['last_level_of_education']?></td>
            <td><?php echo $row['Exam_title']?></td>
            <td><?php echo $row['Group_sub']?></td>
            <td><?php echo $row['Institution']?></td>
            <td><?php echo $row['Result']?></td>
            <td><?php echo $row['Passing_year']?></td>
            <td><?php echo $row['Experience_category']?></td>
            <td><?php echo $row['skill_Description']?></td>
            <td><?php echo $row['Extracurricular_activities']?></td>
            <td><?php echo $row['Reference_Name']?></td>
            <td><?php echo $row['Organization']?></td>
            <td><?php echo $row['Address']?></td>
            <td><?php echo $row['mobile_No']?></td>
            <td><?php echo $row['Email_id']?></td>
            <td><?php echo $row['Relation']?></td>

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





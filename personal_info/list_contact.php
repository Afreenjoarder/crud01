<?php

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "SELECT * FROM `contact_info`";

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
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>District</td>
        <td>Mobile</td>
        <td>Email</td>
    </tr>

    <?php

    foreach($result as $row){



        ?>



        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['Present_Address']?></td>
            <td><?php echo $row['Permanent_Address']?></td>
            <td><?php echo $row['District']?></td>
            <td><?php echo $row['Mobile']?></td>
            <td><?php echo $row['Email']?></td>
        <td>
            <a href="view_contact.php?ID=<?php echo $row['ID']?>">View</a> |
            <a href="edit_contact.php?ID=<?php echo $row['ID']?>">Edit</a> |

            <a href="delete_contact.php?ID=<?php echo $row['ID']?>">Delete</a> |

        </td>
    </tr>


    <?php
    }



    ?>

</table>




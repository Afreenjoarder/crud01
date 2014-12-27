<?php


$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl_db");

$query = "select * from contact_info WHERE ID = $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<form action="update_contact.php" method="post">
    <h1 style="color: cadetblue" align="center" >Contact Information</h1>

    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>"
    <br><br>

    <label>Present Address:</label>
    <input type="text" name="presentAddress" value="<?php echo $row['Present_Address'];?>" /><br>
    <br>

    <label>Permanent Address:</label>
    <input type="text" name="permanentAddress" value="<?php echo $row['Permanent_Address'];?>" /><br>
    <br>
    <label>District:</label>

    <select name ="District">

        <option <?php if ($row['District']=="Dhaka") echo 'selected'; ?> value ="Dhaka">Dhaka</option>
        <option <?php if ($row['District']=="comilla") echo 'selected'; ?> value ="comilla">comilla</option>
        <option <?php if ($row['District']=="chittagong") echo 'selected'; ?> value ="chittagong">chittagong</option>
        <option <?php if ($row['District']=="shylet") echo 'selected'; ?> value ="Shylet">shylet</option>
        <option <?php if ($row['District']=="Rajshahi") echo 'selected'; ?> value ="Rajshahi">Rajshahi</option>
        <option <?php if ($row['District']=="Rangpur") echo 'selected'; ?> value ="Rangpur">Rangpur</option>
        <option <?php if ($row['District']=="Barishal") echo 'selected'; ?> value ="Barishal">Barishal</option>

    </select>


    <br>
    <br>
    <label>Mobile:</label>
    <input type="text" name="Mobile" value="<?php echo $row['Mobile'];?>" /><br>
    <br>
    <label>Email:</label>
    <input type="text" name="Email" value="<?php echo $row['Email'];?>" /><br>

    <br>




    <button type="submit">Update</button>
</form>

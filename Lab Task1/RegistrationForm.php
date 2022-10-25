<?php include "DocValidation.php"; ?>



<!DOCTYPE html>

<html>

    <body>

        <h2>Registration Form</h2>

        <form action="" method="post">

        <table>

            <tr>

                <td>Name:</td>

                <td><input type="text" name="Name"></td>

                <td><?php echo $validatename; ?></td>

            </tr>

            <tr>

                <td>Age:</td>

                <td><input type="number" name="Age"></td>

                <td><?php echo $validateage; ?></td>

            </tr>

            <tr>

                <td>Gender:</td>

                <td><input type="checkbox" name="Qualification" value= "abc"> Male

                <td><input type="checkbox" name="Qualification" value= "bcd"> Female

            </tr>

            <tr> 
                <td>Contact:</td>

                <td><input type="textarea" name="Contact"></td>

                
            </tr>

            <tr>

                <td>Qualification:</td>

                <td><input type="radio" name="Qualification" value= "abc"> MBBS

                <td><input type="radio" name="Qualification" value= "bcd"> FCPS

</td>

<td>

    <?php echo $validateradio; ?>

</td>

               

></?>



</tr>

</table>

        <input type="submit" value="Submit">

</body>

</html>
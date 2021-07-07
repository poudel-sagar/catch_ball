<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="form1" action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Select images</td>
                <td><input type="file" name="f1"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit1" value="upload"></td>
                <td><input type="submit" name="submit2" value="display"></td>
            </tr>
        </table>
    </form>
    <?php
   $con= mysqli_connect("localhost","root","");
    mysqli_select_db($con,"sms");
    if(isset($_POST["submit1"])){

        $image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
        mysqli_query($con,"insert into tabla values('','$image')");

    }
    if(isset($_POST["submit2"])){
        echo"<table>";
        echo "<tr>";
        
        $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"sms");
        $qry="select * from tabla";
        $result=mysqli_query($con,$qry);
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image1']).'"height="100" width="100"/>';

            echo"</td>";

        }
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>

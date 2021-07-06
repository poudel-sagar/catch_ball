<?php
 ini_set('mysql.connect_timeout',300);
 ini_set('default_socket_timeout',300);
?>
<html>
    <body>
    <form method="POST" enctype="multipart/form-data">
    <br/><br/>
    <input type="file" name="image">
    <br/><br/>
    <input type="submit" name="submit" value="Upload"/>

    </form>
    <?php
    if(isset($_POST['submit'])){
        if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
        {
            echo "please select an image";
        } else {
            $image=addslashes($_FILES['image']['tmp_name']);
            $name=addslashes($_FILES['image']['name']);
            $image=file_get_contents($image);
            $image=base64_encode($image);
            saveimage($name,$image);
        }
    }
    displayimage();
    function saveimage($name,$image)
    {
        $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"sms");
        $qry="insert into images(name,image) values('$name','$image')";
        $result=mysqli_query($con,$qry);
        if($result){
            echo "<br/>Images Uploaded.";
        }else{
            echo "<br/>Image not Uploaded";
        }
       
    }
     function displayimage(){
         $con=mysqli_connect("localhost","root","");
         mysqli_select_db($con,"sms");
         $qry="select * from images";
         $result=mysqli_query($con,$qry);
         while($row = mysqli_fetch_array($result))
         {
           echo '<img height="400" width="200" src="data:image;base64,'.$row[2].'">';
         }
         mysqli_close($con);

     }

    ?>
    </body>
</html>

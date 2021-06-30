<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard </title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1-dist/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <style type="text/css">
    #header{
        height: 10%;
        width: 100%;
        top: 2%;
        background-color: black;
        position:fixed;
        color: white;
    }
    #left_side{
        height: 75%;
        width: 15%;
        top: 10%;
        position:fixed;
    }
    #right_side{
        height: 75%;
        width: 80%;
        background-color: whitesmoke;
        position:fixed;
        left: 17%;
        top: 21%;
        color: red;
        border: solid 1px black;
    }
    #top_span{
        top:15%;
        width:80%;
        left:17%;
        position:fixed;


    }

    </style>


    <script></script>
</head>
<body><br>
    <div id="header">
        <h3><strong>Student Management System</strong>Email: admin@gmail.com
        <a href="logout.php">Logout</a>
    
    </h3>

        </div>
        <span id="top_span"><marquee>This portal is developed by Sagar Poudel</marquee></span>

        <div id="left_side"><br>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>
                            <input type="submit" name="search_student" value="search student">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="edit_student" value="Edit student">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="add_new_student" value="Add student">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="delete_student" value="Delete student">
                            
                        </td>
                    </tr>
                </table>
                
            </form>
        </div>
        <div id="right_side">

        </div>


   
 
</body>
</html>

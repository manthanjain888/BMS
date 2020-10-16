<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<body style="background-color: darkseagreen;">
    <h1 style="text-align: center;">Library Management System</h1>
    <br>
    <br>
    <?php
    include("databaseconnection.php");

    $search = $_REQUEST["search"];

    $query = "select number,title,author,edition,publication from bookdetail where title like '%$search%'";
    $result = mysqli_query($db,$query);

    //if(mysqli_num_rows($result)>0)
    if(mysqli_num_rows($result)>0)

    {
    ?>

    <table border="2" align="center" cellpadding="5" cellspacing="5">

    <tr>
    <th>Number</th>
    <th>Title</th>
    <th>Author</th>
    <th>Edition</th>
    <th>Publication</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
    <td><?php echo $row["number"];?> </td>
    <td><?php echo $row["title"];?> </td>
    <td><?php echo $row["author"];?> </td>
    <td><?php echo $row["edition"];?> </td>
    <td><?php echo $row["publication"];?> </td>
    </tr>
    <?php
    } 
   }
    else
    echo "<center>No books found in the library by the name $search </center>" ;
   ?>
    </table>
    </body>
</html>
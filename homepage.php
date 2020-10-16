<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>
<body style="background-color: darkseagreen;">
    <h1 style="text-align: center;">Library Management System</h1>
    <form action="insertbooks.php" method="POST">
        <table border="2" align="center" cellpadding="10" cellspacing="5">
            <tr>
                <td>Book number :</td>
                <td><input type="text" name="number" size="60"></td>
            </tr>
            <tr>
                <td>Book Title :</td>
                <td><input type="text" name="title" size="60"></td>
            </tr>
            <tr>
                <td>Book Author :</td>
                <td><input type="text" name="author" size="60"></td>
            </tr>
            <tr>
                <td>Book Edition :</td>
                <td><input type="text" name="edition" size="60"></td>
            </tr>
            <tr>
                <td>Book Publication :</td>
                <td><input type="text" name="publication" size="60"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
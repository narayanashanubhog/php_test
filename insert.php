<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="container">
            <h1>
                Student Database Project</h1>

            <nav>
                <ul>
                    <li>
                        <a href="homepage.html" class="active">Home</a>
                    </li>
                    <li>
                        <a href="insert.php" target="_top">Add</a>
                    </li>
                    <li>
                        <a href="select.php" target="_top">Display</a>
                    </li>
                    <li>
                        <a href="contact.html">AboutUs</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <br><br><br>
<?php

//readfile('homepage.html');


   $firstname = '';
   $lastname = '';
   $marks = '';


if (isset($_GET['submit']))
{
    $ok=true;
    if (!isset($_GET['firstname']) || $_GET['firstname'] === '')
    {$ok = false;}
    else{
        $firstname = $_GET['firstname'];
    }
    if (!isset($_GET['lastname']) || $_GET['lastname'] === '')
    {$ok = false;}
    else{
        $lastname = $_GET['lastname'];
    }
    if (!isset($_GET['marks']) || $_GET['marks'] === '')
    {$ok = false;}
    else{
        $marks = $_GET['marks'];
    }

    if ($ok){
$db = mysqli_connect('localhost','root','','practice');
$sql = sprintf("insert into student (firstname,lastname,marks) values ('%s' , '%s' , '%s')",
mysqli_real_escape_string($db,$firstname),
mysqli_real_escape_string($db,$lastname),
mysqli_real_escape_string($db,$marks));
mysqli_query($db,$sql);
mysqli_close($db);
echo'<p> User added.</p>';
}
}

?>

    <form class="inserting" action="" method="get">
    FirstName: <input type="text" name="firstname" placeholder="Enter your First Name" value="<?php echo htmlspecialchars($firstname); ?>"><br>
    LastName: <input type="text" name="lastname" placeholder="Enter your Last Name" value="<?php echo htmlspecialchars($lastname); ?>"><br>
    Marks:<input type="number" name="marks" min="0" max="100"placeholder="Enter your Marks" value="<?php echo htmlspecialchars($marks); ?>">
    <input type="submit" name="submit" value="Submit">
    
    
    
    
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
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
printf('Firstname: %s
<br>Lastname: %s
<br>Marks: %s',
htmlspecialchars($firstname),
htmlspecialchars($lastname),
htmlspecialchars($marks));
}
}
?>

    <form action="" method="get">
    FirstName: <input type="text" name="firstname" placeholder="Enter your First Name" value="<?php echo htmlspecialchars($firstname); ?>"><br>
    LastName: <input type="text" name="lastname" placeholder="Enter your Last Name" value="<?php echo htmlspecialchars($lastname); ?>"><br>
    Marks:<input type="number" name="marks" min="0" max="100"placeholder="Enter your Marks" value="<?php echo htmlspecialchars($marks); ?>">
    <input type="submit" name="submit" value="Submit">
    
    
    
    
    </form>
</body>
</html>
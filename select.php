<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <ul>
    <?php 
//readfile('homepage.html');

    $db = mysqli_connect('localhost','root','','practice');

   $sql = 'select * from student';
    $result = mysqli_query($db, $sql);


    while($row = mysqli_fetch_array($result))
    {
        $i = 0;
    printf('<li> %s  %s  %s </li>',
    $row[$i],
    $row[++$i],
    $row[++$i]
    );
      
    }
    mysqli_close($db); 
    ?>
    
    </ul>
</body>
</html>
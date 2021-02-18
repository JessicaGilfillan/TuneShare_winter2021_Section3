<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuneshare</title>
</head>
<body>
    <header>
        <h1> Tuneshare - Share Your Favourite Tunes & Join The Community </h1> 
    </header>
    <?php

    //connect to the database 
    require('connect.php'); 

    //set up SQL statement 
    $sql = "SELECT * FROM songs;"; 

    //prepare 
    $statement = $db->prepare($sql); 

    //execute 
    $statement->execute(); 

    //use fetchAll to store results 

    $records = $statement->fetchAll();
    
    //creating the top of the table 
    echo "<table><tbody>"; 

    foreach($records as $record) {
        echo "<tr><td>" . $record['first_name'] . "</td><td>" . $record['last_name'] . "</td><td>" . $record['age'] . "</td><td>". $record['genre'] . "</td><td>" . $record['location'] . "</td><td>" . $record['email'] . "</td><td>" . $record['favsong'] . "</td></tr>"; 
    }

    echo "</tbody></table>"; 

    //close the DB connection 
    $statement->closeCursor(); 
    ?>
    <footer>
        <p>&copy; TuneShare <?php echo getdate()['year']; ?> </p>
    </footer>
</body>
</html>
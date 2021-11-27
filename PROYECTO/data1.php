<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>JABEXP_DB</title>
</head>
<style>
    #titulo {
        background-color: greenyellow;
    }

    #titulo .titu {
        text-align: center;

    }
</style>

<body>
    <div id="titulo">
        <h1 class="titu">Tabla de registro</h1>
    </div>



    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">First_name</th>
                <th scope="col">Last_name</th>
                <th scope="col">Gender</th>
                <th scope="col">Password</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <div> 
                <?php

                $user = "root";
                $pass = "123";
            

                try {
                    $conn = new PDO('mysql:host=localhost;dbname=jobexp', $user, $pass);
                    foreach ($conn->query('SELECT * from user_details') as $fila) {
                        //echo "<div>" . $fila[1] . "</div>";

                ?>
                        <tr>
                            <th scope="row"><?php echo $fila[0]; ?></th>
                            <td><?php echo $fila[1]; ?></td>
                            <td><?php echo $fila[2]; ?></td>
                            <td><?php echo $fila[3]; ?></td>
                            <td><?php echo $fila[4]; ?></td>
                            <td><?php echo $fila[5]; ?></td>
                            <td><?php echo $fila[6]; ?></td>
                            <td><?php echo $fila[7]; ?></td>
                            <td><?php echo $fila[8]; ?></td>
                            <td><?php echo $fila[9]; ?></td>
                            <td><?php echo $fila[10]; ?></td>
                        </tr>
                <?php
                    }
                    $conn = null;
                } catch (PDOException $e) {
                    print "¡Error!: " . $e->getMessage() . "<br/>";
                    die();
                }
                ?>
        </tbody>
    </table>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
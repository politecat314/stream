<?php
include "db_connection.php";

function sendToDb($title, $path)
{
    $conn = OpenCon();

    $path = mysqli_real_escape_string($conn,$path);

    $sql = "INSERT INTO stream (title, path)
            VALUES ('$title', '$path')";

    if (!$conn->query($sql) === TRUE) { // echo error message if failed to save in database
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}

function removeFromDb($pk)
{
    $conn = OpenCon();

    $sql = "DELETE FROM stream 
            WHERE pk = $pk";

    if (!$conn->query($sql) === TRUE) { // echo error message if failed to save in database
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}

// sendToDb('Parks and Recreation S02','C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf');

$encodedHtmlPost = array_map('htmlspecialchars', $_POST);
if (!empty($encodedHtmlPost)) {
    sendToDb($encodedHtmlPost['title'],$encodedHtmlPost['path']);
}

?>


<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome css -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->



    <!-- <link rel="icon" type="image/svg" href="/components/logo.svg"/> -->
    <title>Stream: add</title>

</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Stream</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse d-sm-none" id="navbarText">
                <ul id="link_list" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Add</a>
                    </li>
            </div>
        </div>
    </nav>


    <div class="container top-2-rem">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Path to folder</label>
                        <input type="text" name="path" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Add to database</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container top-2-rem">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">pk</th>
                            <th scope="col">Title</th>
                            <th scope="col">Path</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $conn = OpenCon();

                            $sql = "SELECT * FROM stream
                                    ORDER BY pk DESC";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo   '<tr>
                                                <th scope="row">'.$row['pk'].'</th>
                                                <td>'.$row['title'].'</td>
                                                <td>'.$row['path'].'</td>
                                            </tr>';
                                }
                              } else {
                                echo "No titles in the database";
                              }
                            
                            
                            CloseCon($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        if (window.history.replaceState) { // prevent resubmission of form
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
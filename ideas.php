<?php
include 'db_connection.php';


// print_r($_POST);

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $conn = OpenCon();

    $title = mysqli_real_escape_string($conn,$title);
    $description = mysqli_real_escape_string($conn,$description);

    $sql = "INSERT INTO ideas (title, description)
            VALUES ('$title', '$description')";

    if (!$conn->query($sql) === TRUE) { // echo error message if failed to save in database
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}

if (isset($_POST['close'])) { // close the thing with pk
    $close = $_POST['close'];

    $conn = OpenCon();

    $sql = "DELETE FROM ideas
            WHERE pk=$close";

    if (!$conn->query($sql) === TRUE) { // echo error message if failed to save in database
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    CloseCon($conn);
}



?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="ideaStyle.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">



    <link rel="icon" href="iconfinder_play_alt_118620.ico" />
    <title>Stream</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Stream</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse d-sm-none" id="navbarText">
                <ul id="link_list" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php"><i class="fas fa-database"></i> Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-lightbulb"></i> Ideas</a>
                    </li>
            </div>
        </div>
    </nav>

    <div class="container containerN">
        <div class="row">
            <div class="mx-auto col-lg-6 col-sm-12 justify-content-center">
                <form method="post">
                    <div class="form-group mb-2">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title here">
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description here"></textarea>
                    </div>
                    <div class="form-group mb-2" style="padding-top:0.5rem">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container containerN">
        <div class="row">
            <div class="col">
                <h3>Current Ideas</h3>
            </div>
        </div>
        <form method="post">
            <div class="row">

                <?php
                $conn = OpenCon();

                $sql = "SELECT * FROM ideas
                        ORDER BY pk DESC";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $pk = $row['pk'];
                        $t = $row['title'];
                        $d = $row['description'];
                        $checked = $row['checked'];
                        $c = "";
                        $date = date("F j", strtotime($row['date']));
                        if ($checked) {
                            $c = "checked";
                        }

                        echo

                    '<div class="col-lg-3 col-sm-12 mb-3">
                        <div class="card text-white bg-dark" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h5 class="card-title">'.$t.'</h5>
                                    </div>
                                    <div class="col-2 text-end">
                                        <button type="submit" name="close" value="'.$pk.'" class="close">
                                            <i class="far fa-times-circle"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="card-text">'.$d.'</p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input id="'.$pk.'" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" '.$c.'>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Finished
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="card-text text-end"><small class="text-muted">'.$date.'</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';                        
                    }
                  } else {
                    echo "No titles in the database";
                  }
                
                
                CloseCon($conn);
                
                ?>


            </div>
        </form>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }


        


        function sendToDatabase(name, data) {
            url = "ideasCheckbox.php";
            let formData = new FormData();
            formData.append('x', ['hello', 2, 3]);
            fetch(url, {
                    method: 'POST',
                    body: formData
                })
                .then(function(response) {
                    return response.text();
                })
                .then(function(body) {
                    console.log(body);
                });
        }
    </script>


</body>



</html>
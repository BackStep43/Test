<?php
        require_once('db.php');
        require_once('checksave.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Place</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <div class = "container-fluid">
    <div class = "row">
    <div class="col-sm-4 p-5 bg-danger text-dark text-left">
            <h1 class="display-1">Traveling</h1>
    </div>
    <div class="col-sm-8 p-5 bg-dark text-white text-end">
        <h2>ADD INFORATION PAGE</h2>
    </div>
    </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Province :</label>
                <select name="province" id="" class="form-control">
                <optgroup label="Select Province">
                    <option value="">-Select Province-</option>
                    <?php
                        function province(){
                            $con = Dbconnect();
                            $paces = $con->prepare("SELECT * FROM province ORDER by NAME");
                            $paces->execute();
                            $ans = $paces->setFetchMode(PDO::FETCH_ASSOC);

                            while($pace = $paces->fetch()){
                                extract($pace);
                                echo "<option value='$ID'>$Name</option>>";
                            }
                        }
                        province();
                    ?>
                </optgroup>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Type :</label>
                <select name="type" id="" class="form-control">
                <optgroup label="Select Type">
                    <option value="">-Select Type-</option>
                    <?php
                        function type(){
                            $con = Dbconnect();
                            $paces = $con->prepare("SELECT * FROM attraction_type");
                            $paces->execute();
                            $ans = $paces->setFetchMode(PDO::FETCH_ASSOC);

                            while($pace = $paces->fetch()){
                                extract($pace);
                                echo "<option value='$ID'>$Name</option>>";
                            }
                        }
                        type();
                    ?>
                </optgroup>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Name :</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Enter Place Name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description :</label>
                <textarea  name="description" id="" class="form-control" placeholder="Enter Description" cols="100" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label ">Image URL :</label>
                <input type="text" name="image" id="" class="form-control" placeholder="Enter URL">
                <!-- <input type="submit"  name="add" id="" value="add">
                <input type="submit" href="index.php" name="back" id="" value="back"> -->
            </div>
            <div class="form-group text-center">
                <div class="col-md-12">
                    <input type="submit"  class="btn btn-success mb-3" name="add" id="" value="Add">
                    <a href="index.php" class="btn btn-dark mb-3">Back</a>   
                </div>
            </div>
        </form>
    </div>
    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
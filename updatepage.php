<?php
        require_once('db.php');
        require_once('update.php');
        $con = Dbconnect(); 

        // show Name Province
        
        $select_stmt = $con->prepare("SELECT * FROM province WHERE ID = $ProvinceID");
        $select_stmt->execute();
        $row_pro = $select_stmt->fetch(PDO::FETCH_ASSOC);


        // show Name Type
        $stmt = $con->prepare("SELECT * FROM attraction_type WHERE ID = $AttractionTypeID");
        $stmt->execute();
        $row_type = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CogfigPage</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <div class = "container-fluid">
    <div class = "row">
    <div class="col-sm-4 p-5 bg-danger text-dark text-left">
            <h1 class="display-1">Traveling</h1>
    </div>
    <div class="col-sm-8 p-5 bg-dark text-white text-end">
        <h2>UPDATE PAGE</h2>
    </div>
    </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Province :</label>
                <select name="province" value="" class="form-control">
                <optgroup label="Select Province">
                <option value='<?= $row_pro['ID']; ?>'><?= $row_pro['Name']?></option>
                        <?php
                            function provinceID(){
                                $con = Dbconnect();
                                $paces = $con->prepare("SELECT * FROM province ORDER by NAME");
                                $paces->execute();
                                $ans = $paces->setFetchMode(PDO::FETCH_ASSOC);
                                
                                while($pace = $paces->fetch()){
                                    extract($pace);      
                                    echo "<option value='$ID'>$Name</option>";
                                }
                            }
                            provinceID();
                        ?>
                </optgroup>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Type :</label>
                <select name="type" id="" class="form-control">
                <optgroup label="Select Type">
                    <option value='<?= $row_type['ID'] ?>'><?= $row_type['Name']?></option>
                    <?php
                        function typeID(){
                            $con = Dbconnect();
                            $paces = $con->prepare("SELECT * FROM attraction_type");
                            $paces->execute();
                            $ans = $paces->setFetchMode(PDO::FETCH_ASSOC);

                            while($pace = $paces->fetch()){
                                extract($pace);
                                echo "<option value='$ID'>$Name</option>>";
                            }
                        }
                        typeID();
                    ?>
                </optgroup>
                </select>
            </div>
                <div class="mb-3">
                    <label for="" class="form-label">Name :</label>
                    <input type="text" name="name"  class="form-control" value="<?= $Name; ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description :</label>
                    <textarea name="description" class="form-control" cols="100" rows="10"><?= $Description;?></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Image URL :</label>
                    <input type="text" name="image" class="form-control" value="<?= $ImageURL; ?>">
                
                </div>
            <div class="form-group text-center">
                <div class="col-md-12">
                    
                    <button type="submit"  name="update" class="btn btn-success mb-3">Update</button>
                    <button type="submit"  class="btn btn-danger mb-3" name="delete">Delete</button>
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
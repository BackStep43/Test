<?php
    require_once('db.php');
    require_once('get.php');
    require_once('getcheckbox.php');
    $con = Dbconnect();

    $stmt  = $con->prepare("SELECT * FROM region");
    $stmt->execute();
    $row_region = $stmt->fetchAll();
    foreach($row_region as $region_row){
        $regionID = $region_row['ID'];
        $regionName = $region_row['Name'];
        $regionNamearr[]= $region_row['Name'];
        
    }
    if(!empty($_POST['region'])){
        foreach($_POST['region'] as $regionRow_check){
            $re[]=$regionRow_check;
        }
    }
    else{
        $re=[];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <div class="container-fluid ">
    <div class = "row">
    <div class="col-sm-4 p-5 bg-danger text-dark text-left">
            <h1 class="display-1">Traveling</h1>
        </div>
    <div class="col-sm-8 p-5 bg-dark text-white"></div>
    </div>
        <form action="" method="post">
        <a href="pageadd.php" class="btn btn-success col-2 col-sm-2  col-md-2 col-lg-2 col-xl-2 mb-2 mt-2">ADD</a>
        <div class="form-group mb-1  col-xl-12 col-lg-12  col-sm-12 text-end blockquote">
            <?php
                foreach($row_region as $region_row){
                    ?>
                    <input type="checkbox" class="mx-1" name="region[]" value="<?= $region_row['ID']?>"><?= $region_row['Name']?>
                    <?php
                    } ?>
                    <input type="submit" class= "btn btn-primary " value="Submit">
        </div>
        <div class="row ">
                <?php
                    foreach($regionNamearr as $region_Name){
                        ?><div class="bg-danger mb-2"><?= $region_Name ?> :</div>
                    <?php
                        if(!empty($re)){
                            $arr_pro = getProvincecheck($region_Name,$re);
                        }
                        else{$arr_pro = getProvince($region_Name);}
                            if(!empty($arr_pro)){
                                foreach($arr_pro as $proID){
                                    $select_stmt = $con->prepare("SELECT * FROM attraction WHERE ProvinceID = $proID");
                                    $select_stmt->execute();
                                    $row = $select_stmt->fetchAll();
                                    foreach ($row as $res) {
                        ?>
                        <div class="col">
                                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <a href="updatepage.php?id=<?= $res['ID'];?>"><img src='<?php echo $res['ImageURL'] ?>' class="img-fluid rounded" alt=''></a>
                                </div>
                                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <a href="updatepage.php?id=<?= $res['ID'];?>"><?php echo $res['Name'];?></a>
                                </div>
                        </div>
                <?php }}}} ?>
        </div>
        </form>
    </div>
    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
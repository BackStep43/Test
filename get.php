<?php
    require_once('db.php');  

    function getProvince($Name){
    $con = Dbconnect();
    $stmt  = $con->prepare("SELECT * FROM region");
    $stmt->execute();
    $row_region = $stmt->fetchAll();
    foreach($row_region as $region_row){
        $regionID = $region_row['ID'];
        $regionName = $region_row['Name'];
        $stmtPro  = $con->prepare("SELECT * FROM province WHERE RegionID = $regionID");
        $stmtPro->execute();
        $row_provin = $stmtPro->fetchAll();
        foreach($row_provin as $pro_row ){
            if($regionName == $Name && $Name == "Northern"){
                $proID_arr[] = $pro_row['ID'];
            }
            elseif($regionName == $Name && $Name == "Southern"){
                $proID_arr[] = $pro_row['ID'];
            }
            elseif($regionName == $Name && $Name == "Central"){
                $proID_arr[] = $pro_row['ID'];
            }
            elseif($regionName == $Name && $Name == "Northeastern"){
                $proID_arr[] = $pro_row['ID'];
            }
            elseif($regionName == $Name && $Name == "Eastern"){
                $proID_arr[] = $pro_row['ID'];
            }
            elseif($regionName == $Name && $Name == "Western"){
                $proID_arr[] = $pro_row['ID'];
            }
    
        }

    }
    return $proID_arr;
}
?>
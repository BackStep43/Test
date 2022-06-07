<?php
    require_once('db.php');  

    function getProvincecheck($Name, $checkbox){
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
        if(!empty($checkbox)){
            foreach($row_provin as $pro_row ){
                if($regionName == $Name && $Name == "Northern" && in_array($regionID, $checkbox)){
                    $proID_arr[] = $pro_row['ID'];
                }
                elseif($regionName == $Name && $Name == "Southern"  && in_array($regionID, $checkbox)){
                    $proID_arr[] = $pro_row['ID'];
                }
                elseif($regionName == $Name && $Name == "Central"  && in_array($regionID, $checkbox)){
                    $proID_arr[] = $pro_row['ID'];
                }
                elseif($regionName == $Name && $Name == "Northeastern"  && in_array($regionID, $checkbox)){
                    $proID_arr[] = $pro_row['ID'];
                }
                elseif($regionName == $Name && $Name == "Eastern"  && in_array($regionID, $checkbox)){
                    $proID_arr[] = $pro_row['ID'];
                }
                elseif($regionName == $Name && $Name == "Western" && in_array($regionID, $checkbox)){
                    $proID_arr[] = $pro_row['ID'];
                }
                else{
                    $proID = [];
                }
        
            }
        }
        
    }
    if(!empty($proID_arr)){
        return $proID_arr;
    }
    else{
        return $proID;
    }
}
?>
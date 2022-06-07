<?php
    require_once('db.php');
    $name_err = "";
    $description_err = "";
    $image_err = "";

    if(isset($_REQUEST['add']) == "POST"){
        function check(){
            // เชื่อมต่อ db
            $con = Dbconnect();
            
            $province = $_POST['province'];
            $type = $_POST['type'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $image = $_POST['image'];

            // นับข้อมูล
            $query = $con->prepare("SELECT Name FROM attraction WHERE Name= ?");
            $query->execute([$name]);
            $result = $query->rowCount();
            if(empty(trim($name)) && empty(trim($description)) && empty(trim($image)) && empty(trim($type)) && empty(trim($province))){
                echo "<script>alert('Please Enter All information');
                window.location='pageadd.php';</script>"; 
            }
            if(empty(trim($_POST['name']))){
                $name_err = "Please Enter Place Name";
                echo "<script>alert('Please Enter Place Name');
                window.location='pageadd.php';</script>";
            }
            if(empty(trim($_POST['description']))){
                $description_err = "Please Enter Description";
                echo "<script>alert('Please Enter Description');
                window.location='pageadd.php';</script>";  
            }
            if(empty(trim($_POST['image']))){
                $image_err = "Please Enter Image URL";
                echo "<script>alert('Please Enter Image URL');
                window.location='pageadd.php';</script>";  
            }
            if(empty(trim($_POST['province']))){
                echo "<script>alert('Please Choose Province');
                window.location='pageadd.php';</script>";  
            }
            if(empty(trim($_POST['type']))){
                echo "<script>alert('Please Choose Type');
                window.location='pageadd.php';</script>";  
            }
            //ที่ชื่อสถานที่ซ้ำ
            if($result >  0){
                echo "<script>alert('Duplicate Place');
                window.location='pageadd.php';</script>";
            }
            if(empty($name_err) && empty($description_err) && empty($image_err) && $result == 0){
                $paces = "INSERT INTO attraction(ProvinceID, AttractionTypeID, ImageURL, Name, Description, Created, Modified) 
                            VALUES (:province, :type, :image, :name, :description, NOW(), NULL)";

                if($pace = $con->prepare($paces)){
                    $pace->bindParam(':province', $province);
                    $pace->bindParam(':type', $type);
                    $pace->bindParam(':image', $image, PDO::PARAM_STR);
                    $pace->bindParam(':name', $name, PDO::PARAM_STR);
                    $pace->bindParam(':description', $description, PDO::PARAM_STR);
                
                if($pace->execute()){
                    echo "<script>alert('DATA SAVE');
                    window.location='index.php';</script>";
                }
                else{
                    echo "<script>alert('DATA NOT SAVE');
                    window.location='pageadd.php';</scriptalert>";
                } 
                    
            }
            unset($pace);
        }
        unset($con);
    }
    check();
    }
?>
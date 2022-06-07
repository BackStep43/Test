<?php
    require_once('db.php');    
    $con = Dbconnect();
    $name_err = "";
    $description_err = "";
    $image_err = "";

    if(isset($_REQUEST['id'])){
        try{
            $id = $_REQUEST['id'];
            $select_stmt  = $con->prepare("SELECT * FROM attraction WHERE ID = :id");
            $select_stmt->bindParam(':id', $id);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }


    if(isset($_REQUEST['update']) == "POST"){
        $province = $_POST['province'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        if(empty(trim($name)) && empty(trim($description)) && empty(trim($image)) && empty(trim($type)) && empty(trim($province))){
            echo "<script>alert('Please Enter All information')</script>";
            echo '<a href="updatepage.php?id=$res["id"]"></a>'; 
        }
        if(empty(trim($_POST['name']))){
            $name_err = "Please Enter Place Name";
            echo "<script>alert('Please Enter Place Name')</script>";
            echo '<a href="updatepage.php?id=$res["id"]"></a>';
        }
        if(empty(trim($_POST['description']))){
            $description_err = "Please Enter Description";
            echo "<script>alert('Please Enter Description')</script>";
            echo '<a href="updatepage.php?id=$res["id"]"></a>';  
        }
        if(empty(trim($_POST['image']))){
            $image_err = "Please Enter Image URL";
            echo "<script>alert('Please Enter Image URL')</script>";
            echo '<a href="updatepage.php?id=$res["id"]"></a>';  
        }
        if(empty(trim($_POST['province']))){
            echo "<script>alert('Please Choose Province')</script>";
            echo '<a href="updatepage.php?id=$res["id"]"></a>';  
        }
        if(empty(trim($_POST['type']))){
            echo "<script>alert('Please Choose Type')</script>";  
            echo '<a href="updatepage.php?id=$res["id"]"></a>';
        }

        if(empty($name_err) && empty($description_err) && empty($image_err)){
            $paces = "UPDATE attraction SET ProvinceID = :province, AttractionTypeID = :type, ImageURL = :image, Name = :name, Description = :description, Created = Created, Modified = NOW() WHERE ID = :id";
            
            if($pace = $con->prepare($paces)){
                $pace->bindParam(':id', $id);
                $pace->bindParam(':province', $province);
                $pace->bindParam(':type', $type);
                $pace->bindParam(':image', $image, PDO::PARAM_STR);
                $pace->bindParam(':name', $name, PDO::PARAM_STR);
                $pace->bindParam(':description', $description, PDO::PARAM_STR);
            
            if($pace->execute()){
                echo "<script>alert('UPDATE SUCCESSFUL')</script>";
                header("Refresh:0");
                echo '<a href="updatepage.php?id=$res["id"]"></a>';
            }
            else{
                echo "<script>alert('UPDATE NOT SUCCESSFUL')</script>";
                echo '<a href="updatepage.php?id=$res["id"]"></a>';
            } 

            }
        }
    }


    if(isset($_REQUEST['delete']) == "POST"){
        $id = $_GET['id'];
        $stmt  = $con->query("DELETE FROM attraction WHERE ID = $id");
        if($stmt->execute()){
            echo "<script>alert('DELETE SUCCESSFUL');
            window.location='index.php';</script>";
        }
        else{
            echo "<script>alert('DELETE NOT SUCCESSFUL')</script>";
            echo '<a href="updatepage.php?id=$res["id"]"></a>';
        } 
    }

?>
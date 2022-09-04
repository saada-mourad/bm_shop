<?php 
    include("config.php");
    if(isset($_POST['upload'])){
    $product = $_POST['product'];
    $price = $_POST['price'];
    $fileName = $_FILES['image']["name"];
    $fileType = $_FILES['image']["type"];
    $file = $_FILES['image']["tmp_name"];
    move_uploaded_file($file, "images/".$fileName);
    $position = "images/".$fileName;  
    $uploa = $database->prepare("INSERT INTO shop(product, price,  name, type ,position,) 
    VALUES(:product, :price, :name, :type, :position)");
    $uploa->bindParam("product",$product);
    $uploa->bindParam("price",$price);
    $uploa->bindParam("name",$fileName);
    $uploa->bindParam("type",$fileType);
    $uploa->bindParam("position",$position);
    if($uploa->execute()){
      echo '<h1>تم إضافة بيانات بنجاح</h1>';
      include("BM-Shop.php");
    }else{
      echo '<h1>فشل إضافة بيانات</h1>';
      include("BM-Shop.php");
    }
  }
?>
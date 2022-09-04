<?php include("include/header.php") ?>

<?php
    include("config.php");

    if(isset($_GET['edit'])){
    $getProduct = $database->prepare("SELECT *  FROM shop WHERE id = :id");
    $getProduct->bindParam("id", $_GET['edit']);
    $getProduct->execute();

    foreach($getProduct AS $data){
        echo 
            '<form>
                price:<input type="text" name="product" value="'.$data['price'].'"/>
                <button name="upload"> Mise à jour </a></button>
            </form>';
        }
    }
?>
<?php include("include/footer.php")?>
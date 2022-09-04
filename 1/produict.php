<?php include("include/header.php") ?>
<main>
    <?php

        include("config.php");
        $addProduct = $database->prepare("SELECT *  FROM shop");
        $addProduct->execute(); 

       


        foreach($addProduct AS $data){
        $getFiles = "data:" . $data['type'].";base64,".base64_encode($data['name']);
        echo
        '<div class="cards">'.
            '<img src="'.$getFiles.'"/>'.
            "<H3>".$data['product']."</H3>".
            "<H3>".$data['price']."</H3>".
            "<form method='post'>
                <button name='remove' value='".$data['id']."'> Delete</button>
                <button><a href='update.php?edit=".$data['id']."'> Mise à jour </a></button>
            </form>".
        '</div>';
        }
// remove 
        if(isset($_POST['remove'])){
            $removeProduct = $database->prepare("DELETE *  FROM shop WHERE id = :id");
            $getId = $_POST['remove']; 
            $removeProduct->bindParam("id",$getId);
        
        if($removeProduct->execute()){
            echo"<h1> good </h1>";
        }else{
            echo"<h1> bad </h1>";
        }
    } 
    
// update
    $update = $database->prepare("UPDATE shop SET id = :id");



    ?>
</main>
<?php include("include/footer.php") ?>
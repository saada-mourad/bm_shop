<?php include("include/header.php") ?>
    <header>
        <nav>
            <img src="">
        </nav>
    </header>   
    <main>
        <form  class="form" action="insrte.php" method="post" enctype='multipart/form-data'>
            <img src="images/logo.PNG" alt="logo">
            <h1> Mise à jour  </h1>
            <input type="text" placeholder="Produict's  Name" name="product">
            <input type="text" placeholder="Produict's  Price" name="price">
            <input type="file" id="image" name="image">
            <br>
            <label  for="image">Image</label>
            <button name="upload"> Télécharger Produit</button>
            <br>
            <h2> <a href="produict.php"> Afficher Tous Les Produits</a></h2>
        </form>
    </main>
    <h2>Développé Par Saada Mourad</h2>

<?php include("include/footer.php") ?>

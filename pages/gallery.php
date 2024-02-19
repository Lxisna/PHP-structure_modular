<h1>Gallery</h1>
<section id="gallery" class="row">

<?php 
// $array_img =[
//    "https://cdn.pixabay.com/photo/2024/01/16/19/40/trees-8512979_640.jpg",
//    "https://cdn.pixabay.com/photo/2024/01/18/17/37/stalk-8517287_640.jpg",
//    "https://cdn.pixabay.com/photo/2024/01/18/14/26/white-8517052_1280.jpg",
//    "https://cdn.pixabay.com/photo/2024/01/10/18/33/fence-8500152_1280.jpg",
//    "https://cdn.pixabay.com/photo/2024/01/15/21/16/dog-8510901_640.jpg",
//    "https://cdn.pixabay.com/photo/2024/01/16/18/22/mushroom-8512804_640.jpg",
//    "https://cdn.pixabay.com/photo/2023/12/15/22/37/mountains-8451480_640.jpg",
//    "https://cdn.pixabay.com/photo/2024/01/25/12/30/street-8531779_640.jpg",
//    "https://cdn.pixabay.com/photo/2024/01/18/14/46/train-8517089_640.jpg",
//    ];

//le dossier contenant les images c'est bien "./assets/gallery"
$dir="./assets/gallery/";

//Le tableau $array_img est créé grace à la fonction scadir
//capable de scanner un dossier (à la recherche de fichiers)
$array_img =scandir($dir);
?>




<?php 
//pour chaque entrée dans le tableau $array_img
//pour chaque fichier se trouver dans le dossier $dir
foreach($array_img as $src):
   //On détermine la source complète avec le nom du dossier
    $file =$dir.$src;
    //Si cette source est bien un fichier on effectue le traitement
    //sinon rien
      if(is_file($file)):
      ?>
      <article class="col-12 col-sm-6 col-md-4 mb-3">
      <div class="card" >
         <img src="<?php echo $dir.$src?>" class="card-img-top" alt="...">
      <div class="card-body">
         <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-dark">Go somewhere</a>
      </div>
      </div>
      </article>  
      <?php endif ?>
      <?php endforeach;?>   
</section>

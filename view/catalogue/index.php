<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Catalogue</title>
     <!-- Bootstrap core CSS -->
    <link href="/romain/view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
    <link href="/romain/view/css/style.css" rel="stylesheet">
</head>

<body>

   <?php include("view/menu/menu.php"); ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        <!-- /.col-lg-3 -->
            <div class="col-lg-12">
                <div class="row" style="padding-top: 10px;">
                    <?php 
                        foreach ( $catalogues as $produit ) {
                            print '<div class="col-lg-4 col-md-6 mb-4">';
                            print '<div class="card h-100">'; 
                            print '<a href="#"><img class="card-img-top" heigth="150" width="150" src="/romain/view/images/' . $produit->getUrl() . '" alt="image du produit"></a>';
                            print '  <div class="card-body">';
                            print '<h4 class="card-title"> <a href="#">' .$produit->getNom() . '</a> </h4>' ; 
                            print '<h5>' . $produit->getProcesseur(). ' / '. $produit->getRam() .  ' </h5> '  ;  
                            print ' <p class="card-text">  Ecran de : ' . $produit->getEcran() . ' avec une batterie de : ' . $produit->getBatterie() . ' pour un poids de : '. $produit->getPoids() .'  </p> ';
                            print '</div>';
                            print ' <div class="card-footer"> <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>  </div> ';
                            print '</div>';
                            print '</div>';
                            
                        }
                    ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="/romain/view/vendor/jquery/jquery.min.js"></script>
    <script src="/romain/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

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
            <h4>Liste des utilisateurs connectés dernièrement</h4>
                <div class="row" style="padding-top: 10px;">
                
                <ul>
                    <?php

                    foreach ($users as $user) {
                        print '<li>' . $user . '</li>';
                    }

                    ?>
                    </ul>
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

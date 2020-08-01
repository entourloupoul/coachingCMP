<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CMPCoaching</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/cmpcoaching.css" rel="stylesheet">
  <link href="css/images.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <?php include 'sidebar.html'; ?>


    <!-- Page Content -->
    <div id="page-content-wrapper">

        <?php include 'navbar.html'; ?>
        <img src="images/logoCMP.jpg" style="display: block;margin-left:auto;margin-right:auto">
        <?php include 'content/presentation.html'; ?>
        <?php include 'content/deroulement.html'; ?>
        <?php include 'content/qui.html'; ?>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $(".logo-domaine").hover(function(){
        id = this.getAttribute("id").split("-")[0];
        $("#"+id+"-content").slideDown(1000, () => {
            $("#"+id+"-content").get(0).scrollIntoView({behavior: "smooth"});
            $("#"+id+"-text").fadeTo(500,1);
        });

        console.log(id);
    });
  </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cart</title>

    <!-- Bootstrap core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Latest compiled and minified CSS --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=“http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css”>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <style type="text/css">
      #table_heading {
        background-color: #bdbdbd;
        font-weight: bold;
      }

      .total {
        font-weight: bold;
        font-size: 18px;
      }
    </style>
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <?php require('nav_customer.php'); ?>
      <table class='table table-striped table-bordered'>
        <thead>
          <tr id='table_heading'>
            <td>Item</td>
            <td>Price</td>
            <td>Qty</td>
            <td>Total</td>
            <td>Update</td>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td>Black Belt</td>
              <td>$19.99</td>
              <td> 1 </td>
              <td>$19.99</td>
              <td><a href="#">delete</a></td>
            </tr>
            <tr>
              <td>Black Belt</td>
              <td>$19.99</td>
              <td> 1 </td>
              <td>$19.99</td>
              <td><a href="#">delete</a></td>
            </tr>
            <tr>
              <td>Black Belt</td>
              <td>$19.99</td>
              <td> 1 </td>
              <td>$19.99</td>
              <td><a href="#">delete</a></td>
            </tr>
          </tbody>
      </table>
      <div class='row'>
        <div class='col-md-7'></div>
        <div class='col-md-5 total'>Total $49.95</div>
      </div>
      
          

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
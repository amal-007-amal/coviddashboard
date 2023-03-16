<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Covid19-Kdy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!------------include files------------>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>


<!----Navigation---->
<?php include 'header.php';?>
<!---navend----->


<!----header------>
<div class="jumbotron text-center" style="margin-top:-6%;">
    <div class="on-light">
    <button class="border-gradient ButtonCAP border-gradient-green">
      <span class="CovidText">Covid Updates&nbsp;<i class="fas fa-pencil-alt"></i></span>
    </button>
  </div>
</div>
<!----headerend--->

<!---------------->
<section id="FirstSection">
  <div class="FirstBack text-center">
    <h1 class="text-center MalayalamText">കടലാശ്ശേരി ആകെ കണ്ണക്</h1>
      <hr class="style-two">
  </div>
</section>
<!---------------->

<!---------table---------->
<section id="TableSection">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover flex-fill text-center table-striped">
        <thead class="thead-light">
          <tr>
            <th>S.NO</th>
            <th>Date</th>
            <th>Total Case</th>
            <th>Death</th>      
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>1</td>
              <td>15-06-21</td>
              <td>100</td>
              <td>0</td>
          </tr>
          <tr>
              <td>2</td>
              <td>16-06-21</td>
              <td>98</td>
              <td>0</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
<!---------table---------->


<!--------chatbox------------->
<?php include 'ChatboxMalayalam.php';?>
<!-----chatboxend------------->
<script type="text/javascript" src="Chatboxscript.js"></script>

<!-----footer---------->
<?php include 'footer.php';?>
<!------footerend------>


<!--------scripting----->
<script>
  $(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 20);
});
</script>
</body>
</html>
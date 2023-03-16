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
<!-------------Graphs----------->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['week', 'ഇന്ന് രോഗബാധിതർ', 'ഇന്ന് രോഗമുക്തി', 'ഇന്ന് മരണം', 'Average'],
          ['11/06/21',  165,      938,         522,      614.6,],
          ['12/06/21',  135,      1120,        599,      682],
          ['13/06/21',  157,      1167,        587,      623],
        ]);

        var options = {
          title : 'കടലാശ്ശേരിയിലെ കോവിഡ് നിരക് 2021 ',
          legend: { position: 'bottom', maxLines: 3 },
          vAxis: {title: 'നിരക് '},
          hAxis: {title: 'മാസം'},
          bar: { groupWidth: '75%'},
          bold: true,
          italic: true,
          seriesType: 'bars',
          colors: [ '#001a33', '#00284d', '#000000', '#003566'],
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<!-------------endgraph--------->
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
    <h1 class="text-center MalayalamText">കടലാശ്ശേരി 5 -)o വാർഡ്</h1>
      <span class="text-center MalayalamTextSpan">കോവിഡ് ഡാഷ്ബോർഡ് </span>
      <br><mark class="LastUpdate">Last Update On : 11-06-2021&nbsp;12:17&nbsp;PM</mark><br>
      <mark class="LastUpdate">Source: The information available from LSGD, Gov. of Kerala in the public domain </mark>
      <hr class="style-two">
  </div>
</section>
<!---------------->

<!---------------->
<section id="SecondSection">
<div class="container py-mb-3">
    <div class="row align-content-between">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fas fa-ambulance"></i>
                </div>
                <h3>ആകെ<br>കോവിഡ് ബാധിതർ</h3>
                <span class="counter-value">7</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fas fa-user-ninja"></i>
                </div>
                <h3>ഇന്ന്<br>രോഗബാധിതർ</h3>
                <span class="counter-value">4</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3>ഇന്ന്<br>രോഗമുക്തി</h3>
                <span class="counter-value">70</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fas fa-user-circle"></i>
                </div>
                <h3>ഇന്ന്<br>മരണം</h3>
                <span class="counter-value">0</span>
            </div>
        </div>
    </div>
</div>
</section>
<!--------end----------->

<!-------------------->
<section id="ThirdSection">
  <div class="container">
    <h1 class="text-center MalayalamText">കടലാശ്ശേരിയിലെ കോവിഡ് നിരക് 2021</h1><hr class="style-two">
    <div class="row align-content-center">
      <div class="col-lg-12 col-md-12 col-sm-6">
        <div id="chart_div" class="Chart"></div>
      </div>
    </div>
  </div>
</section>
<!------------------->

<!-------------------->
<section id="FourthSection">
  <div class="container"><h1 class="text-center MalayalamText">സഹായത്തിനായി ബന്ധപ്പെടൂ... 
</h1>
    <hr class="style-two">
    <div class="row align-content-between pt-3 pb-3">
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <a href="ashaworker.php"><div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-user-md"></i>
            </div>
            <h3>ആശാ<br>വർക്കേഴ്സ്</h3>
        </div></a>    
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <a href="wardmember.php"><div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-users"></i>
            </div>
            <h3>വാർഡ്<br>മെമ്പർസ്</h3>
        </div></a>   
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <a href="rrtmember.php"><div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-reply-all"></i>
            </div>
            <h3>റാപിഡ് (RRT)<br>റെസ്‌പോണ്‍സ് ടീം</h3>
        </div></a>    
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <a href="emergency.php"><div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-ambulance"></i>
            </div>
            <h3>എമർജൻസി<br>നമ്പറുകൾ</h3>
        </div></a>   
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-hospital"></i>
            </div>
            <h3>അടുത്തുള്ള<br>ആശുപത്രികൾ </h3>
        </div>      
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <a href="helpdesk.php"><div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-hands-helping"></i>
            </div>
            <h3>ഹെല്പ് <br>ഡെസ്ക് </h3>
        </div></a>     
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-clinic-medical"></i>
            </div>
            <h3>മെഡിക്കൽ<br>ഷോപ്പുകൾ </h3>
        </div>  
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-heartbeat"></i>
            </div>
            <h3>കുടുംബാരോഗ്യ<br>കേന്ദ്രം</h3>
        </div>      
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-tty"></i>
            </div>
            <h3>ടെലി <br>കൗൺസിലിംഗ് </h3>
        </div>      
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-taxi"></i>
            </div>
            <h3>ടാക്സി</h3>
        </div>      
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-flask"></i>
            </div>
            <h3>ലബോറട്ടറി </h3>
        </div>      
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 PaddingTB">
        <div class="counterS">
            <div class="counter-iconS">
              <i class="fas fa-truck"></i>
            </div>
            <h3>ഹോം ഡെലിവറി</h3>
        </div>      
      </div>
  </div>
</div>
</section>
<!-------------------->

<!--------chatbox------------->
<?php include 'ChatboxMalayalam.php';?>
<!-----chatboxend------------->

<!-----footer---------->
<?php include 'footer.php';?>
<!------footerend------>


<!--------scripting----->
<script>
  $(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 20);
});
</script>
<script>
  $(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="Chatboxscript.js"></script>
<!---------scripting-end----->
</body>
</html>
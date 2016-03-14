<?php include("lp_source.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>رای‌گیری فیلم</title>
        <link rel="stylesheet" type="text/css" href="enbootstrap.css">
    <link rel="stylesheet" type="text/css" href="fabootstrap.css">
        <script src="jquery-2.2.0.min.js"></script>
         <script src="bootstrap.min.js"></script>
         <style type="text/css">
             body {
                 padding-top: 70px;
                 font-family: tahoma;

             }
             .jumbotron {
                 background-color: #ccffeb;
             }
             #poll {
                 text-align: center;
             }
             .navbar-inverse {
                 background-color:  #00b36b;
                 border-color:  #00804d;
             }
             .navbar-inverse .navbar-brand {
                 color: #ccffeb;
                 font-size: 14px;
}
             .navbar-inverse .navbar-nav > li > a {
                 color: #ccffeb;
             }
             .navbar-inverse .navbar-nav > .active > a,
             .navbar-inverse .navbar-nav > .active > a:hover,
             .navbar-inverse .navbar-nav > .active > a:focus {
                 color: #fff;
                 background-color: #00804d;
            }
        </style>
    </head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><strong> خانه</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="poll/"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> رای‌گیری<span class="sr-only">(current)</span></a></li>
                <li><a href="rss/"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> خبرخوان</a></li>
               </ul>
             <ul class="nav navbar-nav navbar-left">
                <li><a href="http://telegram.me/shayax">تماس با من</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
        <div class="container">
        <div class="jumbotron">
            <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <?php echo($question); ?></h2>
            <p><?php echo($totalvotes); ?> رای داده شده است.</p>
        </div>
    </div>

        <div align="center" style="width: 100%;">
        <div id="poll">
            <?php if($votingstep==1) { echo($step1str); }
            if($votingstep==2) { echo($step2str); }
            if($votingstep==3) { echo($step3str); } ?>
        </div>

    </div>
</body>

</html>


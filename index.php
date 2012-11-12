<!DOCTYPE html>
<html>
    <head>
        <title>Deepu Mohan Puthrote | A Technology enthusiast</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Personal Website of Deepu Mohan Puthrote, a Technology enthusiast." />
        <meta name="keywords" content="Deepu,Mohan,Puthrote,Deepu Mohan, Deepu Puthrote, Mohan Puthrote, Deepu Mohan Puthrote, Java Developer, Javascritpt Developer, PHP Developer, jQuery Developer, Technology enthusiast" />
        <meta name="author" content="Deepu Mohan Puthrote" />
        <meta name="copyright" content="Deepu Mohan Puthrote" />
        <meta name="classification" content="public" />
        <meta name="resource-type" content="document" />
        <meta http-equiv="X-UA-Compatible" content="chrome=1">

        <style type="text/css">@import url('http://files.deepumohan.com/css/style.css');</style>
        <style type="text/css">
          .sigma-graph { position: relative; height: 780px; width:100%; }          
          .sigma-expand { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
        </style>

        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/jquery.js"></script>
        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/jquery.center.js"></script>
        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/sigma.js"></script>
        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/sigma.fisheye.js"></script>
        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/sigmainit.js"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                 sigmaInit();
                 $('#main').center();
            });
        </script>

        <?// analytics is added by cloudflare php include "analyticsTracking.php"; ?>
    </head>
    <body>
         <div class="sigma-graph">
          <div class="sigma-parent sigma-expand">
            <div class="sigma-expand" id="sigma-1"></div>
          </div>    
         <div class="sigma-expand" id="mouselayer-sigma-1"></div>
        </div>
    
        <?php include "main.php"; ?>
        <?php //include ("quotes.php"); ?>
        <?php //include "footer.php"; ?>
    </body>
</html>

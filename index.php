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
        #sigma-graph {height:400px; width:800px;  }
        </style>

        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/jquery.js"></script>
        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/jquery.center.js"></script>
        <script type="text/javascript" charset="utf-8" src="http://files.deepumohan.com/js/sigma.js"></script>

        <script type="text/javascript" charset="utf-8">

        $(document).ready(function() {
            function getRandomColor(a, b) {
              var r = Math.random();
              return 'rgb('+
                     ((a.r+(b.r-a.r)*r)|0).toString() +
                     ','+
                     ((a.g+(b.g-a.g)*r)|0).toString() +
                     ','+
                     ((a.b+(b.b-a.b)*r)|0).toString() +
                     ')';
            };

            var colorFrom = {
              r: 32,
              g: 79,
              b: 25
            };

            var colorTo = {
              r: 180,
              g: 255,
              b: 158
            };

            /**
             * sigma.js instance 1 (banner) :
             */
            s1 = sigma.init(document.getElementById('sigma-graph')).configProperties({
              drawHoverNodes: false
            }).drawingProperties({
              labelThreshold: 10000,
              defaultEdgeType: 'curve'
            }).mouseProperties({
              mouseEnabled: false
            }).graphProperties({
              scalingMode: 'outside'
            });

            var i, N = 300, E = 600;

            for(i=0;i<N;i++){
                s1.addNode(i,{
                    'x': Math.random(),
                    'y': Math.random(),
                    'size': 0.5+5*Math.random(),
                    'color': getRandomColor(colorFrom,colorTo)
                });
            }

            for(i=0;i<E;i++){
                s1.addEdge(i,Math.random()*N|0,Math.random()*N|0);
            }

            s1.draw();        
        });        
        
        </script>

        <?php include "analyticsTracking.php"; ?>
    </head>
    <body>

    <a href="https://github.com/WarFox/deepumohan.com"><img class="github-fork" src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
    <div id="sigma-graph" class="center"></div>
    <div id="main">
        <div id="social">
            <h1>deepu mohan puthrote</h1>
            <ul class="social">
                    <li><a href="https://www.facebook.com/deepu.mohan.p" title="Deepu @ Facebook" ><img src="http://files.deepumohan.com/css/images/transparent.gif" class="social-facebook imagedropshadow" alt="Deepu @ Facebook"/></a></li>
                    <li><a href="https://www.twitter.com/deepumohanp" title="Deepu @ Twitter" ><img src="http://files.deepumohan.com/css/images/transparent.gif" class="social-twitter imagedropshadow" alt="Deepu @ Twitter"/></a></li>
                    <li><a href="https://plus.google.com/106447761403337564868" title="Deepu @ Google+"><img src="http://files.deepumohan.com/css/images/transparent.gif" class="social-buzz imagedropshadow" alt="Deepu @ Google+"/></a></li>
                    <li><a href="http://in.linkedin.com/in/deepumohanp" title="Deepu @ LinkedIn"><img src="http://files.deepumohan.com/css/images/transparent.gif" class="social-linkedin imagedropshadow" alt="Deepu @ LinkedIn"/></a></li>
                    <li><a href="http://blog.deepumohan.com" title="My Blog"><img src="http://files.deepumohan.com/css/images/transparent.gif" class="social-blogger imagedropshadow" alt="My Blog"/></a></li>
                    <li><a href="http://tech.deepumohan.com" title="Deepu's Technology Blog"><img src="http://files.deepumohan.com/css/images/transparent.gif" class="social-blogger imagedropshadow" alt="My Technology Blog"/></a></li>
                    <li><a href="https://github.com/WarFox" title="I'm on github"><img src="http://files.deepumohan.com/css/images/transparent.gif" class="social-github imagedropshadow" alt="Deepu's github page"/></a></li>
            </ul>
        </div>
    </div>
    </body>
</html>


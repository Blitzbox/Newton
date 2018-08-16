<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="./src/css/w3.css">
        <link rel="stylesheet" href="./src/css/bootstrap.min.css">
        <link rel="stylesheet" href="./src/css/pe7-icon.css">
        <link rel="stylesheet" href="./src/fa/css/font-awesome.min.css">

    </head>
    <body>
        <!-- navbar -->
        <div class="w3-top">
        	<div class="w3-bar w3-indigo w3-text-white w3-card-2">
        		<h3 class="w3-bar-item"><i class="pe-7s-science"></i>  Newton</h3>
        		    <div class="w3-right" style="padding-top:17px;padding-bottom:10px;">
        		    	<h4 class="w3-bar-item w3-hide-small"><i class="pe-7s-user"></i> Professors Portal</h4>
        		    	<h4 class="w3-bar-item w3-hide-medium w3-hide-large" style="font-size: 30px;padding-top: 0px;"><i class="pe-7s-edit"></i></h4>

        		    </div>
        	</div>
        </div>

        <div class="w3-padding" style="margin-top:90px">
           

           <center>
              <br>
              <br>
              <div class="w3-container w3-padding w3-round w3-card-4" style="max-width: 650px;">
               <form action="newton-api.php" method="POST">
                   <h3>New Module</h3>
                   <br>
                   <br>
                   <input type="text" name="title" placeholder="Module Title Here.." class="w3-input w3-border w3-round" required>
                   <br>
                   <br>
                   <textarea class="w3-input w3-border w3-round" name="description" placeholder="Module description" style="height: 250px;" required></textarea>
                   <br>
                   <br>
                   <br>
                   <button type="submit" class="w3-btn w3-indigo w3-btn-large w3-round"> Send!</button>
               </form>
           </center>
            



            </div>
        </div>
    </body>
    <script src="./src/js/jquery.js"></script>
    <script type="text/javascript">
        
    </script>
</html>
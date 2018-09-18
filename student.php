<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="./src/css/w3.css">
        <link rel="stylesheet" href="./src/css/bootstrap.min.css">
        <link rel="stylesheet" href="./src/css/pe7-icon.css">
        <link rel="stylesheet" href="./src/fa/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">  
    </head>
    <body>
        <!-- navbar -->
        <div class="w3-top">
        	<div class="w3-bar w3-black w3-text-blue w3-card-2">
        		<h3 class="w3-bar-item"><i class="pe-7s-science"></i>  Newton</h3>
        		    <div class="w3-right" style="padding-top:17px;padding-bottom:10px;">
        		    	<h4 class="w3-bar-item w3-hide-small"><i class="pe-7s-user"></i> Student portal</h4>
        		    	<h4 class="w3-bar-item w3-hide-medium w3-hide-large" style="font-size: 30px;padding-top: 0px;"><i class="pe-7s-edit"></i></h4>

        		    </div>
        	</div>
        </div>

        <div class="w3-padding" style="margin-top:90px">
            <h4 class="w3-text-grey">List of modules for student</h4>
            <br>
            <h1 id="delta" style="display: none;"></h1>
        </div>
        <div id="module" class="w3-padding">

            <div class="row" id="modular">
             
           

            



            </div>
        </div>

    </body>
     <script src="./src/js/jquery.js"></script>
    <script type="text/javascript">

       var offset = "superProps();";
       setInterval(()=>{
       	   $('#delta').load("staticDB.io");
       	      var data = document.getElementById("delta").innerHTML;
              if(data){
       	      if(offset != data){
       	         parse(data);
       	      }
             offset = data;
         }
       },200);

    function parse(data){
    	 var parsed_data = data.split("#");

    	 var m = ` <div class="col-md-3 w3-margin w3-animate-zoom">
             <div class="w3-container w3-round w3-card-2 w3-padding w3-indigo">
                <h3>`+parsed_data[0]+`</h3>
                <hr>
                <p>`+parsed_data[1]+`</p>
                <a class="w3-right w3-btn w3-blue w3-round w3-margin">View Module</a>
             </div>
            </div>`;

         var app = document.getElementById("modular");
          app.innerHTML += m;    
    }
       
    </script>
    
</html>
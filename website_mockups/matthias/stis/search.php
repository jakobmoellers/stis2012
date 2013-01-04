<?php
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $lang['STIS_PAGE_TITLE']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php echo $lang['STIS_LANGUAGE']; ?>

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <style type="text/css">
      html, body, #map {
          width: 100%;
          height:  300px;
          margin: 0;
          
      }
      img {max-width:none}
		
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    
    
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.css" />
	
	 <script src="http://cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>
	
    <script>
      function init() {
		  
        // set up the map
			map = new L.Map('map');

			 L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>'
                }).addTo(map);	

			map.setView(new L.LatLng(51.966667, 7.633333),9);
		
      }
	  
	  function test(id, content) {
		$(id).value=content;
	  }
	  
	  
    </script>

   <script src="query.js" type="text/javascript"></script>

  </head>
  
  <body onload="init();">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo $lang['STIS_PAGE_TITLE']; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="stis.php"><?php echo $lang['MENU_HOME']; ?></a></li>
              <li class="active"><a href="#"><?php echo $lang['MENU_SEARCH']; ?></a></li>
              <li><a href="explore.php"><?php echo $lang['MENU_EXPLORE'];?></a></li>
              <li><a href="results.php"><?php echo $lang['MENU_RESULTS'];?></a></li>
			  <li><a href="sparql.php">SPARQL</a></li>
<!--
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
-->
            </ul>
			<div style="padding: 10px 20px 10px;" align="right" class="text"><?php echo $lang['SELECT LANGUAGE']; ?> <a href="?lang=de"><img src="languages/flags/de.png" alt="Deutsch"/></a> <a href="?lang=en"><img src="languages/flags/gb.png" alt="English"/></a></div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<div class="container">
		
	<?php echo $lang['SEARCH_MAP']; ?>
	</div>
	
	 <div id="map"></div>
	
    <div class="container">
	<?php echo $lang['SEARCH_FORM']; ?> 
			<form>
				<fieldset>
				<legend>Search form</legend>
				<label>Person</label>
				<input id="person" type="text" placeholder="Person">	
				<input type="text" placeholder="Insert text here...">
				<label>Event</label>
				<input type="text" placeholder="Event description">
				<input type="text" placeholder="Happened at which location?">
				<input type="text" placeholder="Insert timestamp or event here">
				<label>Author</label>
				<input type="text" placeholder="Author">
				<input type="text" placeholder="Co-Author">
				<label>Publication</label>
				<input type="text" placeholder="Publication">
				<label>Period/Timestamp</label>
				<input type="text" placeholder="Period/Timestamp">
				<label>Place</label>
				<input type="text" placeholder="Place">
				</fieldset>
			</form>
	<button type="submit" class="btn btn-primary" onclick="buildQuery()">Submit</button>
	<div id="error" style="color:red"></div>
	<div id="resultdiv"></div>
			
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>

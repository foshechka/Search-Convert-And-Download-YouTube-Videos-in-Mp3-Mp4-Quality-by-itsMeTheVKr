<!DOCTYPE html>
<html>
<head>
	<title>Search, Convert and Download YouTube Videos By @itsMeTheVKr </title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="js/main.js"></script>
	  <script src="js/viewcount.js"></script>
	  <script src="js/videoduration.js"></script>
	  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="/logo.png">
<link rel="apple-touch-icon-precomposed" href="/logo.png">
</head>
<body style="background-color: #304352;font-family: 'Source Sans Pro', sans-serif">


	<div id="container">

	    <h1 class="text-center"> <span style="color: red">Search, Convert and Download YouTube Videos</span> </h1>

	</div><br><hr>

	<div class="container-fluid">

		<div class="row">

		<div class="col-md-3"></div>

		<div class="col-md-6">

			<form id="search-form" name="search-form" onsubmit="return searchForVideos()">

				
				<input type="search"  id="query" class="search-field" placeholder="Search Here For Videos" autofocus="on">

				<div class="form-group">
      
			      <select class="form-control" id="sel1" onclick="searchForVideosBySort()">

			      	<option>Sort By</option>
			      	<option>Default</option>
			        <option>View Count</option>
			        <option>Upload Date</option>
			        <option>Rating</option>		        
			        
			      </select> <button class="btn" type="submit"> Search</button>
			    </div>

				

			</form>			 

				<div class="alert alert-warning" id="alert" style="display: none">
					<h3 class="text-center"><strong> <span style="color: red" class="text-center"> Enter some input for the results!</span></strong></h3>
				</div>
	 

			<ul id="disp_res"></ul>
		    <div id="buttons"></div>
	   	 
		</div>

		<div class="col-md-3"></div>

		</div>


	</div><br><br><Br>

	<!--<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	            </div>
	            <div class="modal-body">
	                <iframe width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
	            </div>
	        </div>
	    </div>
	</div> -->

	 

		 <p  style="position: fixed;bottom: 0px;margin-right: 2%;color: red">Developed By: <a href="https://itsmethevkr.blogspot.com" target="blank" style="color: yellow"> <b>Vijay Kumar @itsMeThVKr</b></a></p> 

 

<style type="text/css">img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}</style>
        
</body>
</html>  
 

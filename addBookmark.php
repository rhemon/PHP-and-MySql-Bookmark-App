<!DOCTYPE html>
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Bookmark</title>
    <link rel="shortcut icon" href="/Bookmarks/media/favicon.ico" />
	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
        
    <script src="js/respond.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="thumbnail">
<div class="caption">
	<form method="post" action="index.php">
    <div class="form-group">
    	<label for="bookmarkTitle">Bookmark Title </label>
        <input class="form-control" name="bookmarkTitle" id="bookmarkTitle" type="text" width="500px" height="125px" required/>
    </div>
    <div class="form-group">    
        <label for="bookmarkURL">Bookmark URL</label>
        <input class="form-control" name="bookmarkURL" id="bookmarkURL" type="text" width="500px" height="125px" required/>
    </div>
    <div class="form-group">
       	<input class="btn btn-primary btn-lg pull-right" type="submit" name="submit" value="Submit"/> 
    </div>  
    <br/><br/> 
    </form>
</div>
</div>
</div>
</div>
	<script src="js/jquery.min.js"></script>
   	<script src="js/jquery-ui.min.js"></script>
   	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Business Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<link href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono&subset=greek,cyrillic">
        <link rel="stylesheet" href="Style/indexstyle.css">
        <link rel="stylesheet" href="Style/loginstyle.css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top mynav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" aria-controls="navbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      		    </button>
                            
                <a class="navbar-brand" href="index.php"><h2>Business Management</h2></a>
			</div>
                    <div class="mybtn"><button id="myBtn">Connect</button></div>
                    <div class="menu">
                        <?php include 'includes/menubar.php'; ?>
                    </div>
			
                </div>
       </div>

        <div class="container-fluid afternav">
        
        <div class="row">
            <section class="col-xs-3">
<!--                 The Modal -->
                <div id="myModal-login" class="modal">

<!--                   Modal content -->
                    <?php include 'includes/loginpage.php'; ?>
                </div>
                
                <div id="myModal-category" class="modal" >

<!--                   Modal content -->
                    <?php include 'includes/addcategory.php'; ?>
                </div>
                
                <div id="myModal-item" class="modal">

<!--                   Modal content -->
                    <?php include 'includes/additem.php'; ?>
                </div>

                <div id="myModal-newStock" class="modal">

<!--                   Modal content -->
                    <?php include 'includes/newstock.php'; ?>
                </div>
                
            </section>
        </div>
    </div>

    </body>
    
    <script src="vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript"
            src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js">
        </script>
        
        <script src="JavaScript/loginpage.js"></script>
       
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</html>

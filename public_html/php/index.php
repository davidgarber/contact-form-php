<?php
     
      if ($_POST["submit"]) {
            // $result='<div class="alert alert-success">Form submitted</div>';

            if (!$_POST['name']) {

                  $error.="<br />Please enter your name";
            }

            if (!$_POST['email']) {

                  $error.="<br />Please enter your email";
            }

            if (!$_POST['comment']) {
                  $error.="<br />Please enter a comment";
            }

            if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VAlIDATE_EMAIL)) {

                  $error.-"<br />Please enter a valid email address";
            

            if ($error) {

            $result='<div class="alert alert-danger">There were error(s) on your form:'.$error.'</div>';

            }
      }
?>
<html>
<head>
	<title>Contact Form PHP</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<style>
	
	.emailForm {
		border: 1px solid grey;
		border-radius: 10px;
		margin-top: 20px;
	}

      form {
            padding-bottom: 20px;
      }
</style>


</head>
<body>
      

      <div class="container">
      	<div class="row">
      		<div class="col-md-6 cold-md-offset-3 emailForm">
      			<h1>My email form hello</h1>

                        <?php echo $result; ?>

                        <p class="lead">Please get in touch - I'll get back to you as soon as possible.</p>

      			<form method = "post">
      				<div class-"form-group">
      					<label for="name">Your Name:</label>
      					<input type="text" name="name" class="form-control" placeholder="Your Name">
      				</div>
                              <div class-"form-group">
      					<label for="email">Your Email:</label>
      					<input type="email" name="name" class="form-control" placeholder="Your Email">
      				</div>
                              <div class-"form-group">
                                    <label for="comment">Your Comment:</label>
                                    <textarea class="form-control" name="comment"></textarea>
                              </div>
                              <input type="submit" class="btn btn-success btn-lg" value="Submit">
      			</form>
      		</div>
      	</div>
      </div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
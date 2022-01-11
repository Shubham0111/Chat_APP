<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Realtime Chat App </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    	<div class="wrapper">
    		<section class="form signup">
    			<header>Realtime Chat App</header>
    			<form action="#">
    				<div class="error-txt">This is error message!</div>
    				<div class="name-details">
    					<div class="field input">
    						<label>First Name</label>
    						<input type="text" placeholder="First Name">
    					</div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last Name">
                        </div>
                    </div>
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="text" placeholder="Enter your email address">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" placeholder="Enter new Password">
                            <i class="fa fa-eye"></i>
                        </div>
    					<div class="field image">
    						<label>Select Imgae</label>
    						<input type="file">
    					</div>
                        <div class="field button">
                            <input type="submit" value="Continue To Chat">
                        </div>
                        <div class="link">Already Signed up?<a href="#">Login Now</a>
                        </div>		
    			</form>
    		</section>
    	</div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>
    </body>
</html>
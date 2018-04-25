<?php 
if(isset($_POST['submit'])){
    
    
   $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $countryname=$_POST['countryname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $date=$_POST['date'];
  

    
    if($password==$repassword){
    
    $connection =mysqli_connect('localhost','root','','phpDemo1');
    
    
    if(!$connection)
        die("Database Connection failed");
    
  



$query = "insert into information1(firstname,lastname,countryname,gender,email,password,date) ";
$query .= "values ('$firstname','$lastname','$countryname','$gender','$email','$password','$date') ";

$result=mysqli_query($connection, $query);

if(!$result)
    die('Query failed'.mysqli_error());
        
        
         echo '<script language="javascript">';
echo 'alert("your account has been created")';
echo '</script>';
        
    }
    else
    {
        
     echo '<script language="javascript">';
echo 'alert("your password is not matched")';
echo '</script>';
        
    }
}

?>























<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>	
  
 
  
  .dropdown-menu li a:hover
   {
   background-color:cyan;
   color:black;
   
   }
<!-->  .carousel-inner img
  {
	filter:grayscale(90%);
}
  <-->
.col-sm-4 img
{
	border:1px solid black;
	filter:grayscale(90%);
}

.text-center a:hover
{
	opacity:0.5;
}
 
  .dropdown:hover .dropdown-menu
{
	display:block;
}

.dropdown-menu 
{
	background-color:black;
}
  
.dropdown-menu li a
{
	background-color:black;
    color:white;
	padding:12px 16px;
}
   
 
 .hello:hover
{
	background-color:cyan;
	color:black;
}

	
 
  </style>
  
</head>
<body>

<nav class="navbar navbar-inverse  navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Phenomenal-Programmer</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
				<li class="hello"><a href="#"><span class="glyphicon glyphicon-user"></span>
				Sign Up</a></li>
				<li class="hello"><a href="#"><span class="glyphicon glyphicon-user"></span>
				Login</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="hello "><a href="collapsiblenavbar.html">Home</a></li>
				<li class="dropdown hello">
					<a  href="#">About Us<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="about1.html">About Web designers</a></li>
						<li><a href="#">About Web developer</a></li>
						<li><a href="#">About SEO</a></li>
					</ul>
				</li>
				<li class="dropdown hello">
					<a  href="#">Services<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Services 1</a></li>
						<li><a href="#">Services 2</a></li>
						<li><a href="#">Services 3</a></li>
					</ul>
				</li>
				
				<li class="hello"><a href="#contact">Contact</a></li>
						
					</ul>
				
			
		</div>
	</div>
</nav>


<form action="signupForm.php" method="post">
  <div class="container">
      <div class="col-sm-6">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
            
          <div class="form-group">
            <label><b>First Name</b></label>  
            <input type="text" placeholder="Enter your name" name="firstname" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label><b>Last Name</b></label>
            <input type="text" placeholder="Enter your lastname" name="lastname" class="form-control" required>
          </div>
          
          
          
          
          
          
             <div class="form-group">
               
                 <label><b>Date of Birth</b></label>
                 <input type="date" name="date" class="form-control" required>
          
          </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          <div class="form-group">
            <label><b>Country</b></label>
            <input type="text" placeholder="Enter your country" name="countryname" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label><b>Gender</b></label>
              <select name="gender">
                  <option class="form-control">male</option>
                  <option class="form-control" >female</option>
              </select>
           </div>
          
          <div class="form-group">
            <label><b>Email</b></label>
                  <input type="text" placeholder="enter your email" name="email" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label><b>password</b></label>
                  <input type="password" placeholder="enter your password" name="password" class="form-control" required>
          </div>
          
          <div class="form-group">
             <label><b>ReEnter-password</b></label>
                  <input type="password" placeholder="Re-enter your password" name="repassword" class="form-control" required>          
              
              
          </div>
          
       
                 
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
          
      </div>
       
      
  </div>
</form>
</body>
</html>

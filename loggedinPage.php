<?php 
 
 $connection =mysqli_connect('localhost','root','','phpdemo1');
    
    
    if($connection){
        
        echo "We are connected";
        
    }
    else{
        die("Database connection failed");
    }

if(isset($_POST['submit'])){
      $username=$_POST['firstname'];
       $password=$_POST['password'];
    
    
       
       $query="select * from information1";
       
       
       
       $result=mysqli_query($connection,$query);
       if(!$result){
           die("Query Failed" .mysqli_error($connection));
       }
   
             $row=mysqli_fetch_assoc($result);
               $use=$row['firstname'];
                $pas=$row['password'];
                 
        
             
         if($username==$use && $password==$pas){
        
         echo '<script language="javascript">';
echo 'alert("congratulation you are logged in")';
echo '</script>';
        
         }
         else {
       
         echo '<script language="javascript">';
echo 'alert("your username or password are incorrect")';
echo '</script>';
         }
}
?>


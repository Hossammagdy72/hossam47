<?php 



$firstname = $_REQUEST['firstname']; 
$secondname = $_REQUEST['secondname'];
$address = $_REQUEST['address'];    



if(isset($_POST['send'])){ 

   
    $host = "localhost"; 
    $user = "root"; 
    $password ="";
    $db = "hossam"; 


   
    @$conn= mysqli_connect($host,$user,$password,$db);
   

    $insert= "insert into perfum values('$firstname','$secondname','$address')";
   
    mysqli_query($conn,$insert);



    if($conn){
        echo("<h1 style=color:blue;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed❌</h1>");
    }
   
}
?>

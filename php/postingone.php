<?php
        include('connection.php');

        if(isset($_POST['login']))
        {
            $count=0;
            $name=$_POST["getName"];
            $pass=$_POST["getPass"];
            $querry="INSERT into user values('$name','$pass')";
            $data=mysqli_query($connect,"SELECT * from user");
           // mysqli_query($connect,$querry); 
           while($check=mysqli_fetch_assoc($data)){
                if($name!=$check["username"] && $pass!=$check["password"]){
                    mysqli_query($connect,$querry); 
                }
                else{   
                    $count++;
                }
            }
            if($count>0){
                echo "Already Exist";
            }
        }   
        mysqli_close($connect);

?>
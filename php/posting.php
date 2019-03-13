<?php
        include('connection.php');

        if(isset($_POST['register']))
        {
            $count=0;
            $name=$_POST["getName"];
            $pass=$_POST["getPass"];
            $querry="INSERT into user values('$name','$pass')";
            $data=mysqli_query($connect,"SELECT * from user");
           while($check=mysqli_fetch_assoc($data)){
                if($name==$check["username"] || $pass==$check["password"]){
                   $count++;
                }
                else{
                    $count=0;
                }
            }
            if($count>0){
                echo "Already Exist";
            }
            else{
                mysqli_query($connect,$querry); 
            }
        } 
        if(isset($_POST['login']))
        {
            $name=$_POST["getName"];
            $pass=$_POST["getPass"];
            $querry=mysqli_query($connect,"SELECT * from user where username='$name' and password=$pass");
            $data=mysqli_query($connect,"SELECT * from user");
            //echo "<table><th>username</th><th> passwords</th>";
               if(mysqli_num_rows($querry)>0){
                    while($display=mysqli_fetch_assoc($data)){
                 echo "<table><td>".$display["username"]."</td> <td>".$display["password"]."</td></table>";
                }
               }
                    else{
                    echo "not exist in the database";
                }
            
        }     
        mysqli_close($connect);

?>
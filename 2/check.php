<?php
    $result1 = '';  
    $result2 = '';
    $arr = array("PetrovIvan" => "0101",
               "SidorovPetr" => "3232",
               "IvanovVasya" => "5353");   
    if (isset($POST['submit'])){  
    if ( !isset($_POST["uname"]) )
        $_POST["uname"] = '';
    if ( !isset($_POST["password"]) ) 
        $_POST["password"] = '';
		}
   
    $password = $_POST["password"];
    $uname = $_POST["uname"];
    
   function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
    }
    $uname = clean($uname);
    $password = clean($password);

    if(!empty($uname) && !empty($password)) {
       foreach($arr as $key => $value) 
       {
           if (($key == $uname) && ($value == $password))
           {
               echo "Hello, $key";
               $result1 = '';
               $result2 = '';
			   break;
           }
           else
           {
               echo "Date is not correct";
               $result1 = "Enter the correct name";
               $result2 = "Enter the correct password";
			   break;
           }
       }
        
    }
    else 
    {
        if (empty($uname))
        {
            $result1 = "Enter the name";
        }
        if (empty($password))
        {
            $result2 = "Enter the password";
        }
    }
?>
<html>
<body>
<form action="check.php" method="post">
<p>
<label>Name:</label>
<input name = "uname" id = "uname" type = "text"/>
<label><?=$result1?> </label>
</p>
<p>
<label> Password: </label>
<input name = "password" id = "password" type = "text"/>
<label><?=$result2?></label>
</p>
<input name="enter" type="submit" value="Enter" />
</form>
</body>
</html>

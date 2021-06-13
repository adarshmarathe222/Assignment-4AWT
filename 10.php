<html>
<head>
    <title>10th</title>
</head>
<body>

     <h2>
        Menu Driven for String Operations
    </h2>
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br><br>
        <input type="radio" name="str"  value="reverse" required/>Reverse <br>
        <input type="radio" name="str"  value="length"/>Length of String <br>
        <input type="radio" name="str"  value="substring"/>Substring <br>
        <input type="radio" name="str"  value="upper"/>Uppercase <br>
        <input type="radio" name="str"  value="lower"/>Lowercase <br>
        <input type="radio" name="str"  value="words"/>Number of words <br>
        
        <input type="submit" name="submit" value="Submit"/>
    </form>

 
<?php   
     
        $string =$_POST['str'];
        $txt = $_POST['txt'];

        switch($string){
            case 'reverse': $rev = strrev($txt);
                            echo 'The reversed string of '. $txt. ' is: '. $rev;
                            break;
            case 'length': $len = strlen($txt);
                            echo "The length of the string ".$txt. " is: ". $len;
                            break;
            case 'substring':$sub = substr($txt, 5, 13);
                            echo "The substring of the string ".$txt. " is: ". $sub;
                            break;
            case 'upper': $up = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $up;
                            break;
            case 'lower':$low = strtolower($txt);
                            echo "The string ".$txt. " in lowercase is: ". $low;
                            break;
                            case 'words':$wrd = str_word_count($txt);
                            echo "The number of words in the string ".$txt. " is: ". $wrd;
                            break;


        }
       
      
?> 
</body>
</html>
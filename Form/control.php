<?php 

$userName = $_POST['name'];
$userNumber = $_POST['number'];

if($userName){
    echo "<h1>Hello! ".$userName."</h1><br>";
    if($userNumber){
        if($userNumber % 3 == 0){
           echo "<b>Your number ".$userNumber." divisible by 3 !!</b>"."<br><a href=Form.php>Try Again</a>";
        }
        else{
            $newNum = $userNumber + (3- ($userNumber % 3));
            echo "Your number (<b>".$userNumber."</b>) is not divisible by 3<br>"
            ."The closest number is => "."<b>".$newNum."</b>"."<br><a href=Form.php>Try Again</a>";
        }
    }
    else{
        echo "<br>Please enter a number!"."<a href=Form.php>Go Back</a>";
    }
}else{
    echo "<h1><br>Please enter a name!</h1>"."<a href=Form.php>Go Back</a>";
}

?>

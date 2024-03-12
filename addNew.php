<?php
        require "./connect.php";
      $name = $_POST['name'];
      $amount = $_POST['amount'];
      
      $id = $_POST['avx'];
      echo $id;
      echo $name;
      echo $amount; 
      echo "<br>";
      $t=time();

      print_r($conn);

echo(date("Y-m-d",$t));
      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addExpense']))
      {
    
        $sql = "INSERT INTO tracker (`title`, `amount`,  `category_id`) VALUES ('$name', '$amount', '$id')"; 
        $result = mysqli_query($conn,$sql);
      
     
    }
    if($result)
    {
        echo "data inserted successfully";
        header('Location: index.php');
    }
    else{
        echo "data insertoin failed";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1>Expense Logging</h1>
    
</body>
</html>
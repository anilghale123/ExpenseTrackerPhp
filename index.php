<?php
    require "./connect.php";

    
    $sql = "select * from category";
    $expense_query = "select * from tracker";

    $result = mysqli_query($conn,$sql);
    $expense_result = mysqli_query($conn,$expense_query);
   
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $expense_row = mysqli_fetch_all($expense_result,MYSQLI_ASSOC);


    // echo "<pre>";
    // var_dump($rows);
    // echo "</pre>";

    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense tracker</title>
</head>
<body>
    <h1>Expense tracker</h1>

    <form action="addNew.php" method="POST">
        <h2>Add New</h2>
        
        <?php
        echo "<select name = 'avx'>";
        // var_dump($rows);
            foreach($rows as $values)
            {
                echo "<option value='{$values['id']}'>{$values['label']}</option>";
                // echo $values[1];           
            }
       
            echo  "</select>";

        ?>      

        <label for="">Name :</label>
        <input type="text" placeholder="Enter Name" name="name"> <br>

        <label for="">Amount :</label>
        <input type="numbert" placeholder="0" name = "amount"> <br>

        <button type="submit" name="addExpense">Add Expenses</button>
    </form>
   
     <table border="1px solid black">
     <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Amount</th>
      <th>Expense Date</th>
      <th>Created_At</th>
      <th>Updated_AT</th>
      <th>Category Id</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach ($expense_row as $value) : ?>
          <tr>
           
            <td> <?= $value['id']?></td>
            <td> <?= $value['title']?></td>
            <td> <?= $value['amount']?></td>
            <td> <?= $value['expenses_date']?></td>
            <td> <?= $value['created_at']?></td>
            <td> <?= $value['updated_at']?></td>
            <td> <?= $value['category_id']?></td>    
          </tr>
          <?php endforeach ?>
</tbody>
 </table>
</body>
</html>
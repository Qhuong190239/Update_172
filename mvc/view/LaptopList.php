<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laptop List</title>
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container col-md-5 text-center mt-5">
      <table class="table table-bordered mt-4 mb-4">
         <thead>
            <tr>
               <th>Laptop Id</th>
               <th>Laptop Name</th>
               <th>Laptop Image</th>
            </tr>
         </thead>
         <tbody>
            <?php 
               $i=1;
               foreach ($laptop as $la) {
            ?>
               <tr>
                  <td><?= $i ?></td>     
                  <td><?= $la->name ?> </td>
                  <td>
                     <a href="index.php?id=<?=$i-1?> ">
                        <img src="<?= $la->image ?>" width="100" height="100">
                     </a>   
                 </td>
               </tr>
            <?php
               $i++;  
            }
            ?>
         </tbody>
      </table>
      <form action="" method="POST">
            <input type="text" name="name" required placeholder="Input laptop name"><br>
            <input type="text" name="brand" required placeholder="Input laptop brand"><br>
            <input type="number" name="price" required placeholder="Input laptop price"><br>
            <input type="text" name="color" required placeholder="Input laptop color"><br>
            <input type="number" name="year" required placeholder="Input laptop year"><br>
            <input type="text" name="image" required placeholder="Input laptop image"><br>
            <input type="submit" value="Add">
        <form>
   </div>
</body>
</html>
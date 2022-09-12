<?php
// require_once 'partials/Database.php';
// $dbobj = new Database();
// var_dump($dbobj);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD Sample</title>
  
<!-- bootstrap CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- font awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
<h2 class="bg-dark text-light text-center py-1"> PHP CRUD Example</h2>
<div class="container">
  
<!-- form modal  -->
  <?php include 'form.php'?>
  <?php include 'profile.php'?>

  <div class="row mb-3">
  <div class="col-10">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark text-light"> <i class="fa-sharp fa-solid fa-magnifying-glass"></i> 
      </span>
      </div>
      <input type="text" class="form-control" placeholder="Search User">
    </div>
  </div>
<div class="col-2">
  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"> Add User</button>
</div>
</div>
</div>

<!-- table -->
<?php require_once 'tabldata.php'?>


<!-- Paginatione -->

<nav aria-label="Page Navigation Example" id="Pagination" >
  <ul class="pagination justify-content-center" >
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>




<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!-- bootstrap popper and JS link -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
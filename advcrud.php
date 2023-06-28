<?php


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
	<script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script> 
	<title>Advanced crud</title>
</head>
<body>
	<div class="modal fade" id="usermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Adding Data </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <form method="POST" id="add" enctype="multipart/form-data">
        <div class="modal-body">
          <label>Name:</label>
          <input type="text" class="form-control" >
           <label>Email:</label>
          <input type="text" class="form-control" id="Email">
        </div>
         <label>Phone:</label>
          <input type="text" class="form-control" id="Phone">
           <label>Password:</label>
          <input type="text" class="form-control" id="Password">

          <input type="file" class="form-control" id="image">
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        <input type="hidden" name="action" value="adduser">
          <input type="hidden" name="userid" id="userid" value=" ">
      </div></form>
    </div>
  </div>
</div>
  <div class="modal fade" id="viewusermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Userprofile<i class="fas fa-user-alt"></i> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
        <div class="modal-body">
          <div class="container" id="profile">
            <h4>Show  all data</h4>
          </div>
        </div class="modal-footer">
        <div>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>


 <h1 class="bg-dark text-light text-center py-2"> Advnced Crud</h1>
 <div class="row mb-5">
 	<div class="col-10">
 		<div class="input-group">
 			<div class="input-group-prepend ">
 				<span class="input-group-text bg-dark"><i class="fa-solid fa-magnifying-glass text-light"></i></span>
 			</div>
 			<input type="text"placeholder="search user..." class="form-control">
 			<div class="col-2">
 			<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">Add user</button>
 		</div>
 		</div>
 		
 	</div>
 </div>
 <table class="table table-dark table-striped" id="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">password</th>
      <th scope="col">image</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <a href="" data-bs-toggle="modal" data-bs-target="#viewusermodal">profile</a>
      </td>
    </tr>
  </tbody>


  </table>
  <nav aria-label="Page navigation " id="pagination">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    
  </script>
<script type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/js.js"> alert(1);</script>

</body>
</html>

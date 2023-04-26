<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple CRM Project</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
      <div class="container">
        <a class="navbar-brand" href="#">CRM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <form role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>

<div class="container">
	<h1>Welcome to Create Contact Page!</h1>

	<h2>Full name</h2>
	<div class="input-group mb-3">
		<span class="input-group-text">First name/Last name</span>
		<input type="text" aria-label="First name" class="form-control">
		<input type="text" aria-label="Last name" class="form-control">
	</div>
	<h2>Email Address</h2>
	<div class="mb-3">
 		 <label for="exampleFormControlInput1" class="form-label">Email address</label>
 		 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	</div>
	<h2>Phone number</h2>
	<input class="form-control mb-3" type="text" placeholder="Phone Number">
	<h2>Notes</h2>
	<div class="mb-3">
  		<label for="exampleFormControlTextarea1" class="form-label">Notes</label>
 		 <textarea class="form-control" rows="3"></textarea>
	</div>

	<button type="button" class="btn btn-primary">Submit</button>


</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

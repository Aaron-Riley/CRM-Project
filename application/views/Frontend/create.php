<div class="container">
	<h1>Welcome to Create Contact Page!</h1>

    <form action="<?php echo base_url('index.php/contacts/store')?>" method="POST">
	<h2>First name</h2>
	<div class="form-group mb-3">
		<input type="text" aria-label="First name" name="first_name" class="form-control" placeholder="First Name">
        <small><?php echo form_error('first_name') ?></small>
	</div>
	<h2>Last name</h2>
	<div class="form-group mb-3">
		<input type="text" aria-label="Last name" name="last_name" class="form-control" placeholder="Last Name">
        <small><?php echo form_error('last_name') ?></small>
	</div>
	<h2>Email Address</h2>
	<div class="form-group mb-3">
 		 <label class="form-label">Email address</label>
 		 <input type="email" name="email" class="form-control" placeholder="name@example.com">
          <small><?php echo form_error('email') ?></small>

	</div>
	<h2>Phone number</h2>
	<div class="form-group">
		<input class="form-control mb-3" name="number" type="text" placeholder="Phone Number">
		<small><?php echo form_error('number') ?></small>
	</div>

	<h2>Notes</h2>
	<div class="form-group mb-3">
  		<label class="form-label">Notes</label>
 		 <input name="notes" class="form-control"></input>
          <small><?php echo form_error('notes') ?></small>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
    <button href="<?php echo base_url('index.php/contacts'); ?>" class="btn btn-danger">Cancel</button>
    </form>
</div>


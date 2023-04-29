<div class="container">
	<h1>Welcome to Create Contact Page!</h1>

    <form action="<?php echo base_url('contacts/store')?>" method="POST">
	<h2>Full name</h2>
	<div class="input-group mb-3">
		<span class="input-group-text">First name/Last name</span>
		<input type="text" aria-label="First name" name="first_name" class="form-control">
        <small><?php echo form_error('first_name') ?></small>
		<input type="text" aria-label="Last name" name="last_name" class="form-control">
        <small><?php echo form_error('last_name') ?></small>
	</div>
	<h2>Email Address</h2>
	<div class="mb-3">
 		 <label class="form-label">Email address</label>
 		 <input type="email" name="email" class="form-control" placeholder="name@example.com">
          <small><?php echo form_error('email') ?></small>

	</div>
	<h2>Phone number</h2>
	<input class="form-control mb-3" name="number" type="text" placeholder="Phone Number">
    <small><?php echo form_error('number') ?></small>

	<h2>Notes</h2>
	<div class="mb-3">
  		<label class="form-label">Notes</label>
 		 <textarea name="notes" class="form-control" rows="3"></textarea>
          <small><?php echo form_error('notes') ?></small>
	</div>

	<button type="submit" class="btn btn-secondary">Submit</button>
    <button href="<?php echo base_url('index.php/contacts'); ?>" class="btn btn-danger">Cancel</button>
    </form>
</div>




    <div class="container mt-3">
        <h1> Welcome to Contacts Page!</h1>
        <a href="<?php echo base_url('index.php/contacts/create'); ?>" class="btn btn-primary mt-5">Create Contact</a>
    </div>

    <div class="container mt-3">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Notes</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($contacts as $contact) : ?>
      <tr>
        <th scope="row"><?php echo $contact->contact_id; ?></th>
        <td><?php echo $contact->first_name; ?></td>
        <td><?php echo $contact->last_name; ?></td>
        <td><?php echo $contact->email; ?></td>
        <td><?php echo $contact->number; ?></td>
        <td><?php echo $contact->notes; ?></td>
        <td><a href="<?php echo base_url('index.php/contacts/edit/'.$contact->contact_id)?>" class="btn btn-secondary">Edit</td>
        <td><a href="" class="btn btn-danger">Delete</td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>
</div>

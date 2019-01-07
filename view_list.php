<h3 align="center"> Registration </h3>

<h2 style="color: green; " align="center"><?php echo $this->session->flashdata('msg'); ?></h2>

<div class="container">
  <br />
  <div class="row">
    <a href="welcome/addregister" class="btn btn-primary"> Add Regiseter </a>
  </div>
  <br />
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Sr.no</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">Age</th>
          <th scope="col">Hobbies</th>
          <th scope="col">Image</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($users)) { ?>
          <?php foreach ($users as $user) { ?>
            <tr>
              <th scope="row"><?php echo $user->id; ?></th>
              <td><?php echo $user->first_name; ?></td>
              <td><?php echo $user->last_name; ?></td>
              <td><?php echo $user->gender; ?></td>
              <td><?php echo $user->address; ?></td>
              <td><?php echo $user->age; ?></td>
              <td><?php echo $user->hobbies; ?></td>
              <td><img src=<?php base_url(); ?>./uploads/<?php echo $user->image; ?> width="50" height="50"></td>
              <td><?php echo anchor('welcome/editUser/'.$user->id, 'Edit',array('class' => 'btn btn-warning')) ?></td>
              <td><?php echo anchor('welcome/deleteUser/'.$user->id, 'Delete', array('class' => 'btn btn-danger')) ?></td>
            </tr>
          <?php } ?>
        <?php } else { ?>
        <tr>
          <td> No records Avalaible </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</div>
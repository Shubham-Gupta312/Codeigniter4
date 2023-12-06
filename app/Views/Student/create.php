<?= $this->extend('layout/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container text-decoration-underline mt-4">
    <h3>Add Student Data</h3>
    <a href="<?= base_url('students') ?>">
        <button type="button" class="btn btn-secondary">Go back</button>
    </a>
</div>
<div class="container">
<form action="<?= base_url('students/add'); ?>" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="name" name="name" placeholder="Enter your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" placeholder="xyz@email.com" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label class="form-label">Contact</label>
    <input type="contact" name="contact" placeholder="Enter your contact no." class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label  class="form-label">Course</label>
    <input type="course" name="course" placeholder="Enter your Course name" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?= $this->endSection() ?>
<?= $this->extend('layout/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container text-decoration-underline mt-4">
    <h3>Update Student Data</h3>
    <a href="<?= base_url('students') ?>">
        <button type="button" class="btn btn-secondary">Go back</button>
    </a>
</div>
<div class="container">
<form action="<?= base_url('students/edit/'.$students['id']); ?>" method="POST">
<input type="hidden" name="_method" value="PUT"> 
<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="name" name="name" placeholder="Enter your Name" value="<?= $students['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label  class="form-label">Email</label>
     <input type="email" name="email" placeholder="xyz@email.com"  value="<?= $students['email']; ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label class="form-label">Contact</label>
    <input type="contact" name="contact" placeholder="Enter your contact no." value="<?= $students['phone']; ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label  class="form-label">Course</label>
    <input type="course" name="course" placeholder="Enter your Course name" value="<?= $students['course']; ?>" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>

<?= $this->endSection() ?>
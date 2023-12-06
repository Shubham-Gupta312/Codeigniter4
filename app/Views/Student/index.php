<?= $this->extend('layout/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="container text-decoration-underline m-4 ">
        <h3>Students Data</h3>
        <a href="<?= base_url('students/create') ?>"> <button type="button" class="btn btn-success">Add
                Data</button></a>
    </div>
    <?php
    if(session()->getFlashdata('status')) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>
                <?= session()->getFlashdata('status'); ?>
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    ?>

    <table class="table table-hover mt-2">
        <thead>
            <tr>
                <th scope="col">S.no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Course</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($students): ?>
                <?php foreach($students as $row): ?>
                    <tr>
                        <th scope="row">
                            <?= $row['id']; ?>
                        </th>
                        <td>
                            <?= $row['name']; ?>
                        </td>
                        <td>
                            <?= $row['email']; ?>
                        </td>
                        <td>
                            <?= $row['phone']; ?>
                        </td>
                        <td>
                            <?= $row['course']; ?>
                        </td>
                        <td>
                            <?= $row['created_at']; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('students/update/'.$row['id']); ?>"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="<?= base_url('students/delete/'.$row['id']); ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
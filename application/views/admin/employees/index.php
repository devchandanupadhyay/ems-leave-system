<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="card-title">Employee List</h2>
        <a class="btn btn-primary btn-sm" href="<?= base_url('admin/employees/add') ?>">+ Add New</a>
    </div>
    <div class="card-body">
        <table id="file-datatable" class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($employees as $emp): ?>
                <tr>
                    <td><?= $emp->employee_id ?></td>
                    <td><?= $emp->full_name ?></td>
                    <td><?= $emp->email ?></td>
                    <td><?= $emp->status ?></td>
                    <td>
                        <a href="<?= base_url('admin/employees/edit/' . $emp->employee_id) ?>">Edit</a> |
                        <a href="<?= base_url('admin/employees/delete/' . $emp->employee_id) ?>" onclick="return confirm('Delete?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
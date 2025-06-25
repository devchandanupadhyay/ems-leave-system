<!-- application/views/admin/employees/edit.php -->
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="card-title">Edit Employee</h2>
        <a class="btn btn-primary btn-sm" href="<?= base_url('admin/employees') ?>">Employee List</a>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/employees/update/' . $employee->employee_id) ?>" method="post" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" value="<?= html_escape($employee->full_name) ?>" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= html_escape($employee->email) ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <?php foreach (['probation', 'confirmed', 'trainee', 'intern', 'retainer'] as $s): ?>
                        <option value="<?= $s ?>" <?= $employee->status === $s ? 'selected' : '' ?>><?= ucfirst($s) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Date of Joining</label>
                <input type="date" name="date_of_joining" class="form-control"
                    value="<?= html_escape($employee->date_of_joining) ?>">
            </div>
            <div class="col-md-4">
                <label class="form-label">Date of Confirmation</label>
                <input type="date" name="date_of_confirmation" class="form-control"
                    value="<?= html_escape($employee->date_of_confirmation) ?>">
            </div>

            <div class="col-md-6">
                <label class="form-label">Department</label>
                <input type="text" name="department" class="form-control" value="<?= html_escape($employee->department) ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Designation</label>
                <input type="text" name="designation" class="form-control" value="<?= html_escape($employee->designation) ?>">
            </div>

            <div class="col-12">
                <button class="btn btn-primary">Update</button>
                <a href="<?= base_url('admin/employees') ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
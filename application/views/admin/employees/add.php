<!-- application/views/admin/employees/add.php -->
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="card-title">Add New Employee</h2>
        <a class="btn btn-primary btn-sm" href="<?= base_url('admin/employees') ?>">Employee List</a>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/employees/save') ?>" method="post" class="row g-3">
            <!-- Full Name -->
            <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Status -->
            <div class="col-md-4">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="probation">Probation</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="trainee">Trainee</option>
                    <option value="intern">Intern</option>
                    <option value="retainer">Retainer</option>
                </select>
            </div>

            <!-- DOJ / DOC -->
            <div class="col-md-4">
                <label class="form-label">Date of Joining</label>
                <input type="date" name="date_of_joining" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label">Date of Confirmation</label>
                <input type="date" name="date_of_confirmation" class="form-control">
            </div>

            <!-- Department / Designation -->
            <div class="col-md-6">
                <label class="form-label">Department</label>
                <input type="text" name="department" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Designation</label>
                <input type="text" name="designation" class="form-control">
            </div>

            <div class="col-12">
                <button class="btn btn-primary">Save</button>
                <a href="<?= base_url('admin/employees') ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
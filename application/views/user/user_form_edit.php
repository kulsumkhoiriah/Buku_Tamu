<!-- Main content -->

<div class="col d-flex justify-content-center">
    <div class="card shadow card-center mb-5" style="width: 80%;">
        <div class="card-header py-3 bg-navy">
            <center>
                <h4 class="m-0 font-weight-bold text-white">Edit User</h4>
            </center>
        </div>

        <div class="card-body text-primary">
            <div class="row">
                <div class="col">
                    <form action="" method="post">
                        <div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <label>Nama *</label>
                            <input type="text" name="name" value="<?= $this->input->post('name') ?? $row->name ?>" class=" form-control">
                            <?= form_error('name') ?>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" class=" form-control">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                            <label>Password</label>
                            <input type="password" name="password" value="<?= $this->input->post('password') ?>" class=" form-control">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                            <label>Password Confirmation</label>
                            <input type="password" name="passconf" value="<?= $this->input->post('passconf') ?>" class="form-control">
                            <?= form_error('passconf') ?>
                        </div>
                        <div class="form-group <?= form_error('departemen') ? 'has-error' : null ?>">
                            <label>departemen </label>
                            <input type="text" name="departemen" value="<?= strtoupper($this->input->post('departemen') ?? $row->departemen) ?>" style="text-transform: uppercase;" class=" form-control" required>
                        </div>
                        <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="1" <?= $level == 1 ? 'selected' : null ?>>Kepala Departemen</option>
                                <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kepala Seksi</option>
                            </select><?= form_error('level') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn  btn-danger">Reset</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
    </section>
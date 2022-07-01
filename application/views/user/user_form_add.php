<!-- Main content -->

<ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-users text-black-50"></i> User</a></li>
       
        </li>
</ol>
<div class="col d-flex justify-content-center">
    <div class="card shadow card-center mb-5" style="width: 70%;">
        <div class="card-header py-2 bg-navy">
            <h4 class="m-0 font-weight-bold text-white">Tambah User</h4>
        </div>
        <div class="card-body text-primary">
            <div class="row">
                <div class="col">
                    <form action="" method="post">
                        <div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
                            <label>Nama *</label>
                            <input type="text" name="name" value="<?= set_value('name') ?>" class=" form-control">
                            <?= form_error('name') ?>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                            <label>Password *</label>
                            <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                            <label>Password Confirmation *</label>
                            <input type="password" name="passconf" value="<?= set_value('pasconf') ?>" class="form-control">
                            <?= form_error('passconf') ?>
                        </div>
                        <div class="form-group <?= form_error('departemen') ? 'has-error' : null ?>">
                            <label>departemen </label>
                            <input type="text" name="departemen" value=" <?= set_value('departemen') ?>" style="text-transform: uppercase;" class=" form-control" required>
                        </div>
                        <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                            <label>Level *</label>
                            <select name="level" class="form-control">
                                <option value="">- Pilih - </option>

                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Kepala Divisi</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kepala Seksi</option>
                            </select><?= form_error('level') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn  btn-flat">Reset</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
    </section>
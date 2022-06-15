<div class="col d-flex justify-content-center">
    <div class="card shadow card-center mb-5 mt-5" style="width: 50%;">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Profile</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3 ml-4">
                    <img src="<?= base_url() ?>assets/img/undraw_profile.svg" width=100 height=200></box>
                </div>
                <div class="col-sm-8">
                    <?= form_open_multipart('user/editprofile'); ?>
                    <div class="form-group row">
                        <label for="user_name" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-6">
                            <?= $this->fungsi->user_login()->username ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <?= $this->fungsi->user_login()->name ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Departemen</label>
                        <div class="col-sm-6">
                            <?= $this->fungsi->user_login()->departemen ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">User Level</label>
                        <div class="col-sm-6">
                            <?= $this->fungsi->user_login()->level == 1 ? "Kepala Departemen" : null ?>
                            <?= $this->fungsi->user_login()->level == 2 ? "Kepala Seksi" : null ?>
                            <?= $this->fungsi->user_login()->level == 3 ? "Admin" : null ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="col d-flex justify-content-center">
    <div class="card shadow card-center mb-5 mt-5" style="width: 40%;">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Profile</h4>
        </div>
        <div class="card-body text-primary">
            <div class="row">
                <div class="col-sm-3 ml-4">
                    <img src="<?= base_url() ?>assets/img/undraw_profile.svg" width=100 height=200></box>
                </div>
                <div class="col-sm-8">
                    <?= form_open_multipart('user/editprofile'); ?>
                    <table class="table table-borderless">
                        <tr>   
                            <td>Username</td>
                            <td>:</td>
                            <td><?= $this->fungsi->user_login()->username ?></td>
                        </tr>
                        <tr>   
                            <td>Name</td>
                            <td>:</td>
                            <td><?= $this->fungsi->user_login()->name ?></td>
                        </tr>
                        <tr>   
                            <td>Departemen </td>
                            <td>:</td>
                            <td> <?= $this->fungsi->user_login()->departemen ?></td>
                        </tr>
                        <tr>   
                            <td>User Level </td>
                            <td>:</td>
                            <td><?= $this->fungsi->user_login()->level == 1 ? "Kepala Departemen" : null ?>
                                                    <?= $this->fungsi->user_login()->level == 2 ? "Kepala Seksi" : null ?>
                                                    <?= $this->fungsi->user_login()->level == 3 ? "Admin" : null ?></td>
                        </tr>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</div>
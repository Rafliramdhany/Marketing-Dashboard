<section class="content-header">
    <h1>Users
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?= form_open_multipart() ?>
                    <div class="form-group <?= form_error('fullname') ? 'has-error' : null ?>">
                        <label>Name *</label>
                        <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                        <input type="text" name="fullname" value="<?= $this->input->post('fullname') ? $this->input->post('fullname') : $row->name ?>" class="form-control">
                        <?= form_error('fullname') ?>
                    </div>
                    <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                        <label>Username *</label>
                        <input type="text" name="username" value="<?= $this->input->post('username') ? $this->input->post('username') : $row->username ?>" class="form-control">
                        <?= form_error('username') ?>
                    </div>
                    <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                        <label>Password</label> <small>(Biarkan Kosong Jika Tidak Diganti)</small>
                        <input type="password" name="password" value="<?= $this->input->post('password') ?>" class="form-control">
                        <?= form_error('password') ?>
                    </div>
                    <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                        <label>Password Confirmation</label>
                        <input type="password" name="passconf" value="<?= $this->input->post('passconf') ?>" class="form-control">
                        <?= form_error('passconf') ?>
                    </div>
                    <div class="form-group <?= form_error('address') ? 'has-error' : null ?>">
                        <label>Address</label>
                        <textarea name="address" class="form-control"><?= $this->input->post('address') ? $this->input->post('address') : $row->address ?></textarea>
                        <?= form_error('address') ?>
                    </div>
                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                            <label>Level *</label>
                            <select name="level" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>> Admin </option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>> Tim Biru </option>
                                <option value="3" <?= set_value('level') == 3 ? "selected" : null ?>> Tim Orange </option>
                                <option value="4" <?= set_value('level') == 4 ? "selected" : null ?>> Tim Hijau </option>
                                <option value="5" <?= set_value('level') == 5 ? "selected" : null ?>> User </option>
                            </select>
                            <?= form_error('level') ?>
                        </div>
                    <?php } ?>
                    <div class="form-group <?= form_error('image') ? 'has-error' : null ?>">
                        <label>Image</label><br><br>
                        <img width="80%" src="<?= base_url('assets/img/profile/') . $row->image;  ?>"><br><br>
                        <input type="file" name="image" value="<?= $this->input->post('image') ? $this->input->post('image') : $row->image ?>" class="form-control">
                        <?= form_error('image') ?>
                    </div>
                    <div class="form-group">
                        <label>Hobi</label>
                        <select id="hobi2" name="hobi1[]" class="form-control" multiple="multiple">
                            <option value=""></option>
                            <?php $t = explode(",", $row->hobi); ?>
                            <option <?php if (in_array('Nonton', $t)) echo 'selected'; ?> value="Nonton">Nonton</option>
                            <option <?php if (in_array('Menulis', $t)) echo 'selected'; ?> value="Menulis">Menulis</option>
                            <option <?php if (in_array('Traveling', $t)) echo 'selected'; ?> value="Traveling">Traveling</option>
                            <option <?php if (in_array('Otomotif', $t)) echo 'selected'; ?> value="Otomotif">Otomotif</option>
                            <option <?php if (in_array('Desain Grafis', $t)) echo 'selected'; ?> value="Desain Grafis">Desain Grafis</option>
                            <option <?php if (in_array('Fotografi', $t)) echo 'selected'; ?> value="Fotografi">Fotografi</option>
                            <option <?php if (in_array('Kuliner/Memasak', $t)) echo 'selected'; ?> value="Kuliner/Memasak">Kuliner/Memasak</option>
                            <option <?php if (in_array('Olah Raga', $t)) echo 'selected'; ?> value="Olah Raga">Olah Raga</option>
                            <option <?php if (in_array('Programming', $t)) echo 'selected'; ?> value="Programming">Programming</option>
                            <option <?php if (in_array('Bersepeda', $t)) echo 'selected'; ?> value="Bersepeda">Bersepeda</option>
                            <option <?php if (in_array('Musik', $t)) echo 'selected'; ?> value="Musik">Musik</option>
                            <option <?php if (in_array('Mancing', $t)) echo 'selected'; ?> value="Dancing">Mancing</option>
                            <option <?php if (in_array('Melukis', $t)) echo 'selected'; ?> value="Melukis">Melukis</option>
                            <option <?php if (in_array('Bermain Game', $t)) echo 'selected'; ?> value="Bermain Game">Bermain Game</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save
                        </button>
                        <button type="reset" class="btn btn-flat">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<h1 class="text-align">
    <?php if ($id == 0) {
        echo 'Thêm mới cán bộ giáo viên';
    } else {
        echo 'Sửa cán bộ giáo viên';
    } ?>
</h1>
<p></p>
<form action="<?php echo $form_action; ?>" method="post">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required placeholder="Nhập họ và tên"
                       value="<?php echo isset($data->name) ? $data->name : ""; ?>">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Ngày sinh:</label>
                <input type="date" name="birthDay" class="form-control" required
                       value="<?php echo isset($data->birthDay) ? $data->birthDay : ""; ?>">
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" name="address" class="form-control" required placeholder="Nhập địa chỉ"
                       value="<?php echo isset($data->address) ? $data->address : ""; ?>">
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Lương cứng:</label>
                <input type="number" name="luongCung" class="form-control" required placeholder="Nhập lương cứng"
                       value="<?php echo isset($data->luongCung) ? $data->luongCung : ""; ?>">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Lương thưởng:</label>
                <input type="number" name="luongThuong" class="form-control" required
                       placeholder="Nhập lương thưởng"
                       value="<?php echo isset($data->luongThuong) ? $data->luongThuong : ""; ?>">
            </div>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Lương phạt:</label>
                <input type="number" name="luongPhat" class="form-control" required placeholder="Nhập lương phạt"
                       value="<?php echo isset($data->luongPhat) ? $data->luongPhat : ""; ?>">
            </div>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3 text-left">
            <a href="danh-sach-can-bo-giao-vien.html" class="btn-primary btn-lg"><i class="fa fa-arrow-left"></i> Quay
                lại</a>
        </div>
        <div class="col-lg-3 text-right">
            <input type="submit" value="<?php if ($id == 0) {
                echo 'Thêm mới';
            } else {
                echo 'Sửa';
            } ?>" class="btn-success btn-lg">
        </div>
        <div class="col-lg-3"></div>
    </div>
</form>
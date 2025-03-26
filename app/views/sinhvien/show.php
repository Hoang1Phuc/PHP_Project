<?php include 'app/views/share/header.php'; ?>
<div class="container mt-5">
    <h2 class="text-center">Thông Tin Sinh Viên</h2>
    <div class="card shadow p-4 bg-light rounded">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="<?= $sinhVien['Hinh'] ? 'uploads/' . $sinhVien['Hinh'] : 'uploads/default.png'; ?>"
                    class="img-fluid rounded" alt="Ảnh sinh viên">
            </div>
            <div class="col-md-8">
                <h4>Mã Sinh Viên: <?= $sinhVien['MaSV']; ?></h4>
                <p><strong>Họ Tên:</strong> <?= $sinhVien['HoTen']; ?></p>
                <p><strong>Giới Tính:</strong> <?= $sinhVien['GioiTinh']; ?></p>
                <p><strong>Ngày Sinh:</strong> <?= date('d/m/Y', strtotime($sinhVien['NgaySinh'])); ?></p>
                <p><strong>Ngành Học:</strong>
                    <?php
                    foreach ($nganhList as $nganh) {
                        if ($nganh['MaNganh'] == $sinhVien['MaNganh']) {
                            echo $nganh['TenNganh'];
                            break;
                        }
                    }
                    ?>
                </p>
                <a href="index.php" class="btn btn-secondary">Quay lại</a>
            </div>
        </div>
    </div>
</div>
<?php include 'app/views/share/footer.php'; ?>
<?php include 'app/views/share/header.php'; ?>
<div class="container">
    <h2 class="page-title">Thông Tin Sinh Viên</h2>
    <div class="profile-card">
        <div class="row align-items-center">
            <div class="col-md-4 image-section">
                <img src="<?= $sinhVien['Hinh'] ? 'uploads/' . $sinhVien['Hinh'] : 'uploads/default.png'; ?>"
                     class="student-photo" alt="Ảnh sinh viên">
            </div>
            <div class="col-md-8 info-section">
                <div class="info-item">
                    <span class="label">Mã Sinh Viên:</span>
                    <span class="value"><?= $sinhVien['MaSV']; ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Họ Tên:</span>
                    <span class="value"><?= $sinhVien['HoTen']; ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Giới Tính:</span>
                    <span class="value"><?= $sinhVien['GioiTinh']; ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Ngày Sinh:</span>
                    <span class="value"><?= date('d/m/Y', strtotime($sinhVien['NgaySinh'])); ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Ngành Học:</span>
                    <span class="value">
                        <?php
                        foreach ($nganhList as $nganh) {
                            if ($nganh['MaNganh'] == $sinhVien['MaNganh']) {
                                echo $nganh['TenNganh'];
                                break;
                            }
                        }
                        ?>
                    </span>
                </div>
                <a href="index.php" class="btn btn-back">Quay Lại</a>
            </div>
        </div>
    </div>
</div>
<?php include 'app/views/share/footer.php'; ?>

<style>
.container {
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
    background: #f0f4f8;
    border-radius: 15px;
}

.page-title {
    text-align: center;
    color: #e84393;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.profile-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.05);
    padding: 30px;
    border-left: 5px solid #e84393;
}

.image-section {
    text-align: center;
    padding: 20px;
}

.student-photo {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    border: 3px solid #fab1a0;
    transition: transform 0.3s;
}

.student-photo:hover {
    transform: scale(1.05);
}

.info-section {
    padding: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding: 10px;
    background: #fff0f5;
    border-radius: 8px;
    transition: background 0.2s;
}

.info-item:hover {
    background: #ffe6ee;
}

.label {
    font-weight: 600;
    color: #d63031;
    min-width: 120px;
    margin-right: 15px;
}

.value {
    color: #2d3436;
    font-size: 16px;
    flex: 1;
}

.btn-back {
    display: inline-block;
    padding: 10px 25px;
    background: linear-gradient(45deg, #ff7675, #e84393);
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: transform 0.2s, box-shadow 0.2s;
    margin-top: 20px;
}

.btn-back:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(232, 67, 147, 0.3);
}
</style>
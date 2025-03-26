<?php include 'app/views/share/header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Chỉnh Sửa Sinh Viên</h2>
    
    <!-- Form for editing student details -->
    <form method="POST" action="/BaiKiemTra/Sinhvien/update" enctype="multipart/form-data">
        <input type="hidden" name="MaSV" value="<?= $sinhVien['MaSV']; ?>">

        <!-- Full Name -->
        <div class="mb-3">
            <label for="HoTen" class="form-label">Họ Tên:</label>
            <input type="text" name="HoTen" id="HoTen" class="form-control" value="<?= $sinhVien['HoTen']; ?>" required placeholder="Nhập họ tên sinh viên">
        </div>

        <!-- Gender -->
        <div class="mb-3">
            <label for="GioiTinh" class="form-label">Giới Tính:</label>
            <select name="GioiTinh" id="GioiTinh" class="form-select">
                <option value="Nam" <?= ($sinhVien['GioiTinh'] == 'Nam') ? 'selected' : ''; ?>>Nam</option>
                <option value="Nữ" <?= ($sinhVien['GioiTinh'] == 'Nữ') ? 'selected' : ''; ?>>Nữ</option>
            </select>
        </div>

        <!-- Date of Birth -->
        <div class="mb-3">
            <label for="NgaySinh" class="form-label">Ngày Sinh:</label>
            <input type="date" name="NgaySinh" id="NgaySinh" class="form-control" value="<?= $sinhVien['NgaySinh']; ?>" required>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="Hinh" class="form-label">Hình Ảnh:</label>
            <input type="file" name="Hinh" id="Hinh" class="form-control">
            <input type="hidden" name="HinhCu" value="<?= $sinhVien['Hinh']; ?>">
            <?php if (!empty($sinhVien['Hinh'])): ?>
                <div class="mt-2">
                    <img src="<?= $sinhVien['Hinh']; ?>" alt="Hình SV" width="100" class="img-thumbnail">
                </div>
            <?php endif; ?>
        </div>

        <!-- Department Selection -->
        <div class="mb-3">
            <label for="MaNganh" class="form-label">Mã Ngành:</label>
            <select name="MaNganh" id="MaNganh" class="form-select">
                <?php foreach ($nganhList as $nganh): ?>
                    <option value="<?= $nganh['MaNganh']; ?>" <?= ($sinhVien['MaNganh'] == $nganh['MaNganh']) ? 'selected' : ''; ?>>
                        <?= $nganh['TenNganh']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <button type="button" class="btn btn-secondary mt-2" onclick="history.back()">Quay lại</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'app/views/share/footer.php'; ?>

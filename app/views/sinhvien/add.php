<?php include 'app/views/share/header.php'; ?>
<div class="container mt-5">
    <h2 class="text-center">Thêm Sinh Viên</h2>
    <form method="POST" action="/BaiKiemTra/Sinhvien/save" enctype="multipart/form-data" onsubmit="return validateForm();">

        <div class="mb-3">
            <label class="form-label">Mã Sinh Viên:</label>
            <input type="text" name="MaSV" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Họ Tên:</label>
            <input type="text" name="HoTen" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Giới Tính:</label>
            <select name="GioiTinh" class="form-select">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày Sinh:</label>
            <input type="date" name="NgaySinh" class="form-control" required>
        </div>

        <div class="form-group">
        <label for="image">Hình ảnh sản phẩm:</label>
        <input type="file" id="image" name="image" class="form-control-file" accept="image/*" required>
    </div>

        <div class="mb-3">
        <label class="form-label">Mã Ngành:</label>
            <select name="MaNganh" class="form-select" required>
                <?php foreach ($nganhList as $nganh): ?>
                    <option value="<?= htmlspecialchars($nganh['MaNganh']) ?>">
                        <?= htmlspecialchars($nganh['TenNganh']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        <button type="button" class="btn btn-secondary mt-2" onclick="history.back()">Quay lại</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'app/views/share/footer.php'; ?>

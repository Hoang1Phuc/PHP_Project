<?php include './app/views/share/header.php'; ?>
<div class="container">
    <div class="table-header">
        <h2>Danh Sách Sinh Viên</h2>
        <a href="/BAIKIEMTRA/Sinhvien/add" class="add-btn">➕ Thêm Sinh Viên</a>
    </div>

    <div class="table-responsive">
        <table class="student-table">
            <thead>
                <tr>
                    <th>Mã SV</th>
                    <th>Họ Tên</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Hình Ảnh</th>
                    <th>Mã Ngành</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($sinhViens)) : ?>
                    <?php foreach ($sinhViens as $sv) : ?>
                        <tr>
                            <td>
                                <?= htmlspecialchars($sv['MaSV']) ?>
                                <a href="/BAIKIEMTRA/SinhVien/show/<?= $sv['MaSV'] ?>" class="btn btn-info btn-sm">
                                    Xem Chi Tiết
                                </a>
                            </td>
                            <td><?= htmlspecialchars($sv['HoTen']) ?></td>
                            <td><?= htmlspecialchars($sv['GioiTinh']) ?></td>
                            <td><?= htmlspecialchars($sv['NgaySinh']) ?></td>
                            <td>
                                <img src="<?= htmlspecialchars($sv['Hinh']) ?>" alt="Hình SV" class="student-image">
                            </td>
                            <td><?= htmlspecialchars($sv['MaNganh']) ?></td>
                            <td class="action-buttons">
                                <a href="/BAIKIEMTRA/SinhVien/edit/<?= $sv['MaSV'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="/BAIKIEMTRA/SinhVien/delete/<?= $sv['MaSV'] ?>" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?');">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="no-data">Không có dữ liệu</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'app/views/share/footer.php'; ?>

<style>
.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 0 15px;
}

.table-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

h2 {
    color: #333;
    margin: 0;
}

.add-btn {
    background-color: #28a745;
    color: white;
    padding: 8px 15px;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.add-btn:hover {
    background-color: #218838;
}

.table-responsive {
    overflow-x: auto;
}

.student-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.student-table th,
.student-table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.student-table th {
    background-color: #f8f9fa;
    color: #333;
    font-weight: bold;
}

.student-table tr:hover {
    background-color: #f5f5f5;
}

.student-image {
    max-width: 50px;
    height: auto;
    border-radius: 4px;
}

.btn {
    padding: 5px 10px;
    text-decoration: none;
    border-radius: 4px;
    margin: 0 2px;
    display: inline-block;
}

.btn-info {
    background-color: #17a2b8;
    color: white;
}

.btn-warning {
    background-color: #ffc107;
    color: #212529;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}

.action-buttons {
    display: flex;
    justify-content: center;
    gap: 5px;
}

.no-data {
    padding: 20px;
    color: #666;
}
</style>
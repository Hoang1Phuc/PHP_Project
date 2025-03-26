<?php include './app/views/share/header.php'; ?>
<div class="container">
    <div class="table-header">
        <h2>Danh Sách Sinh Viên</h2>
        <a href="/BAIKIEMTRA/Sinhvien/add" class="add-btn">Thêm Sinh Viên</a>
    </div>

    <div class="table-wrapper">
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
                                <a href="/BAIKIEMTRA/SinhVien/show/<?= $sv['MaSV'] ?>" class="btn btn-view">
                                    Xem
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
                                <a href="/BAIKIEMTRA/SinhVien/edit/<?= $sv['MaSV'] ?>" class="btn btn-edit">
                                    Sửa
                                </a>
                                <a href="/BAIKIEMTRA/SinhVien/delete/<?= $sv['MaSV'] ?>" 
                                   class="btn btn-delete" 
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?');">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="no-data">Chưa có sinh viên nào</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'app/views/share/footer.php'; ?>

<style>
.container {
    max-width: 1300px;
    margin: 30px auto;
    padding: 0 20px;
    background-color: #f7f9fc;
    border-radius: 15px;
}

.table-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    padding: 20px 25px 10px;
    border-bottom: 2px solid #dfe6e9;
}

h2 {
    color: #1e90ff;
    margin: 0;
    font-size: 28px;
    font-weight: 600;
}

.add-btn {
    background: linear-gradient(45deg, #00cec9, #00b894);
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: transform 0.2s, box-shadow 0.2s;
}

.add-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 206, 201, 0.3);
}

.table-wrapper {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.03);
    margin: 0 25px 25px;
}

.student-table {
    width: 100%;
    border-collapse: collapse;
}

.student-table th {
    background: #6c5ce7;
    color: white;
    padding: 15px;
    text-align: left;
    font-weight: 600;
}

.student-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #e9ecef;
}

.student-table tr {
    transition: background-color 0.2s;
}

.student-table tr:hover {
    background-color: #f1f3f5;
}

.student-image {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #a29bfe;
}

.btn {
    padding: 8px 15px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
    font-size: 14px;
    font-weight: 500;
}

.btn-view {
    background-color: #0984e3;
    color: white;
}

.btn-edit {
    background-color: #fdcb6e;
    color: #2d3436;
}

.btn-delete {
    background-color: #ff7675;
    color: white;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.action-buttons {
    display: flex;
    gap: 10px;
}

.no-data {
    padding: 30px;
    text-align: center;
    color: #636e72;
    font-style: italic;
}
</style>
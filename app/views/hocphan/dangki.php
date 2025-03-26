<?php include 'app/views/share/header.php'; ?>

<!-- Container for the entire page -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Danh Sách Học Phần Sinh Viên</h2>

    <!-- Table to display courses -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Mã HP</th>
                    <th>Tên Học Phần</th>
                    <th>Số Tín Chỉ</th>
                    <th>Đăng Ký</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hocPhanList as $hp) : ?>
                    <tr>
                        <td><?= htmlspecialchars($hp['MaHP']) ?></td>
                        <td><?= htmlspecialchars($hp['TenHP']) ?></td>
                        <td><?= htmlspecialchars($hp['SoTinChi']) ?></td>
                        <td>
                            <form method="POST" action="index.php?action=dangkyhocphan">
                                <input type="hidden" name="MaSV" value="2180608807"> <!-- Thay bằng session sinh viên -->
                                <input type="hidden" name="MaHP" value="<?= htmlspecialchars($hp['MaHP']) ?>">
                                <button type="submit" class="btn btn-primary btn-sm">Đăng Ký</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'app/views/share/footer.php'; ?>

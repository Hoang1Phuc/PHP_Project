<?php include 'app/views/share/header.php'; ?>
<h2>ĐĂNG NHẬP</h2>
    <form action="index.php?url=auth/login" method="POST">
        <label for="MaSV">MaSV</label>
        <input type="text" id="MaSV" name="MaSV" required>
        <br>
        <button type="submit">Đăng Nhập</button>
    </form>
<?php include 'app/views/share/footer.php'; ?>

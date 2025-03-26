<?php include 'app/views/share/header.php'; ?>
<div class="login-container">
    <div class="login-box">
        <h2>ĐĂNG NHẬP</h2>
        <form action="index.php?url=auth/login" method="POST">
            <div class="form-group">
                <label for="MaSV">Mã Sinh Viên</label>
                <input type="text" 
                       id="MaSV" 
                       name="MaSV" 
                       required 
                       placeholder="Nhập mã sinh viên"
                       class="form-input">
            </div>
            <button type="submit" class="login-btn">Đăng Nhập</button>
        </form>
    </div>
</div>

<?php include 'app/views/share/footer.php'; ?>

<style>
.login-container {
    min-height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f2f5;
}

.login-box {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 25px;
    font-size: 24px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: 500;
}

.form-input {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.form-input:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0,123,255,0.3);
}

.form-input::placeholder {
    color: #999;
}

.login-btn {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-btn:hover {
    background-color: #0056b3;
}

.login-btn:active {
    background-color: #004085;
}
</style>
<section class="auth-section page-wrap">
    <div class="auth-visual">
        <div class="auth-visual-photo"></div>
        <div class="auth-visual-content">
            <a class="brand brand-light" href="<?= BASE_URL ?>?act=home">
                <span class="brand-mark">P</span>
                <span class="brand-name">POLY<br>STYLE<br>BARBER</span>
            </a>
            <div>
                <p class="eyebrow">Chỉn chu diện mạo. Tự tin chất riêng.</p>
                <h1>Phong cách<br>bắt đầu từ<br>bạn.</h1>
                <p>Đăng nhập để lưu lại những lựa chọn dành riêng cho bạn.</p>
            </div>
            <span class="auth-photo-caption">Poly Style Barber · Saigon</span>
        </div>
    </div>
    <div class="auth-panel">
        <div class="auth-form-wrap">
            <p class="eyebrow">Chào mừng trở lại</p>
            <h2>Đăng nhập</h2>
            <p class="auth-intro">Nhập thông tin tài khoản để tiếp tục.</p>
            <form class="auth-form">
                <label for="login-email">Email</label>
                <input id="login-email" name="email" type="email" placeholder="name@example.com" autocomplete="email">
                <label for="login-password">Mật khẩu</label>
                <input id="login-password" name="password" type="password" placeholder="Nhập mật khẩu" autocomplete="current-password">
                <div class="auth-options">
                    <label class="checkbox-label"><input type="checkbox" name="remember"> <span>Ghi nhớ đăng nhập</span></label>
                    <a href="#login-password">Quên mật khẩu?</a>
                </div>
                <button class="button button-dark auth-submit" type="button">Đăng nhập <span>→</span></button>
            </form>
            <p class="auth-switch">Chưa có tài khoản? <a href="<?= BASE_URL ?>?act=register">Đăng ký ngay</a></p>
            <a class="auth-back" href="<?= BASE_URL ?>?act=home">← Quay lại trang chủ</a>
        </div>
    </div>
</section>

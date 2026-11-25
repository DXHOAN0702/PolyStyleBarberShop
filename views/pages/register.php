<section class="auth-section page-wrap">
    <div class="auth-visual">
        <div class="auth-visual-photo"></div>
        <div class="auth-visual-content">
            <a class="brand brand-light" href="<?= BASE_URL ?>?act=home">
                <span class="brand-mark">P</span>
                <span class="brand-name">POLY<br>STYLE<br>BARBER</span>
            </a>
            <div>
                <p class="eyebrow">Chăm chút từng chi tiết</p>
                <h1>Trở thành<br>phiên bản<br>chất nhất.</h1>
                <p>Tạo tài khoản để lưu phong cách và những trải nghiệm yêu thích.</p>
            </div>
            <span class="auth-photo-caption">Poly Style Barber · Saigon</span>
        </div>
    </div>
    <div class="auth-panel">
        <div class="auth-form-wrap">
            <p class="eyebrow">Bắt đầu hành trình của bạn</p>
            <h2>Tạo tài khoản</h2>
            <p class="auth-intro">Điền thông tin bên dưới để đăng ký thành viên.</p>
            <form class="auth-form">
                <label for="register-name">Họ và tên</label>
                <input id="register-name" name="name" type="text" placeholder="Tên của bạn" autocomplete="name">
                <label for="register-email">Email</label>
                <input id="register-email" name="email" type="email" placeholder="name@example.com" autocomplete="email">
                <label for="register-phone">Số điện thoại</label>
                <input id="register-phone" name="phone" type="tel" placeholder="09xx xxx xxx" autocomplete="tel">
                <div class="auth-fields-row">
                    <div>
                        <label for="register-password">Mật khẩu</label>
                        <input id="register-password" name="password" type="password" placeholder="Tối thiểu 8 ký tự" autocomplete="new-password">
                    </div>
                    <div>
                        <label for="register-confirm">Nhập lại mật khẩu</label>
                        <input id="register-confirm" name="confirm_password" type="password" placeholder="Nhập lại mật khẩu" autocomplete="new-password">
                    </div>
                </div>
                <label class="checkbox-label terms-label"><input type="checkbox" name="terms"> <span>Tôi đồng ý với <a href="#terms">Điều khoản sử dụng</a> và chính sách bảo mật.</span></label>
                <button class="button button-dark auth-submit" type="button">Tạo tài khoản <span>→</span></button>
            </form>
            <p class="auth-switch">Đã có tài khoản? <a href="<?= BASE_URL ?>?act=account">Đăng nhập</a></p>
            <a class="auth-back" href="<?= BASE_URL ?>?act=home">← Quay lại trang chủ</a>
        </div>
    </div>
</section>

<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow">Gọn gàng diện mạo. Tự tin chất riêng.</p>
        <h1>Nâng tầm<br>phong cách<br>của bạn.</h1>
        <p class="hero-description">Một kiểu tóc đẹp. Một phiên bản tự tin hơn.<br>Trải nghiệm grooming chuyên nghiệp tại POLY STYLE.</p>
        <div class="button-row">
            <a class="button button-dark" href="<?= BASE_URL ?>?act=services#services-list">Đặt lịch ngay <span>→</span></a>
            <a class="button button-outline" href="<?= BASE_URL ?>?act=services">Khám phá dịch vụ</a>
        </div>
        <p class="small-note">30 phút cho diện mạo mới của bạn.</p>
    </div>
    <div class="hero-image image-cover" style="--image:url('https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=1400&q=85')">
        <span class="image-caption">Chuẩn tay nghề. Đúng chất bạn.</span>
    </div>
</section>
<section class="stats-bar">
    <div class="page-wrap stats-grid"><span>10.000+ khách hàng tin chọn</span><span>4.9 / 5 đánh giá trải nghiệm</span><span>03 chi nhánh tại TP.HCM</span><span>Đặt lịch dễ dàng · Không chờ đợi</span></div>
</section>
<section class="intro-section page-wrap">
    <div class="intro-image image-cover" style="--image:url('https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=1200&q=85')"></div>
    <div class="intro-copy">
        <p class="eyebrow">Không chỉ là một lần cắt tóc</p>
        <h2>Trải nghiệm<br>Poly Style.</h2>
        <p>Từ đường kéo tỉ mỉ đến phút giây thư giãn, chúng tôi chăm chút từng chi tiết để bạn luôn bước ra với diện mạo tốt nhất.</p>
        <div class="intro-points"><span>01 Tư vấn đúng chất</span><span>02 Tay nghề tận tâm</span></div>
        <a class="text-link" href="<?= BASE_URL ?>?act=barbers">Tìm hiểu đội ngũ của chúng tôi →</a>
    </div>
</section>
<section class="home-services">
    <div class="page-wrap">
        <div class="section-heading">
            <div><h2>Dịch vụ cho quý ông</h2><p>Chỉnh chu từ mái tóc đến phong thái.</p></div>
            <a class="text-link" href="<?= BASE_URL ?>?act=services">Tất cả dịch vụ →</a>
        </div>
        <div class="service-teasers">
            <?php foreach ($featuredServices as $index => $service): ?>
                <a class="teaser-card" href="<?= BASE_URL ?>?act=services#services-list">
                    <span class="eyebrow">0<?= $index + 1 ?></span><h3><?= htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p><?= htmlspecialchars($service['detail'], ENT_QUOTES, 'UTF-8') ?></p>
                    <strong><?= htmlspecialchars($service['price'], ENT_QUOTES, 'UTF-8') ?><span>→</span></strong>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="booking-banner">
    <div class="page-wrap booking-inner">
        <div><h2>Sẵn sàng cho<br>diện mạo mới?</h2><p>Chọn dịch vụ, chọn thợ yêu thích. Phần còn lại, để chúng tôi lo.</p></div>
        <div><a class="button button-dark" href="<?= BASE_URL ?>?act=services#services-list">Đặt lịch của bạn →</a><p class="small-note">Mở cửa mỗi ngày · 08:00 – 21:00</p></div>
    </div>
</section>

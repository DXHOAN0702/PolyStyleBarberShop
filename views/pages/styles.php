<section class="page-section page-wrap styles-section">
    <div class="page-heading">
        <p class="eyebrow">Poly Style Barber / Mẫu tóc</p>
        <h1>Tìm kiểu tóc của bạn.</h1>
        <p>Một chút cảm hứng, một phong cách mới. Lưu kiểu tóc yêu thích cho lần hẹn tiếp theo.</p>
    </div>
    <div class="filters" data-filter-group="style">
        <button class="filter-button selected" type="button" data-filter="all">Tất cả</button>
        <button class="filter-button" type="button" data-filter="Tóc ngắn">Tóc ngắn</button>
        <button class="filter-button" type="button" data-filter="Classic">Classic</button>
        <button class="filter-button" type="button" data-filter="Uốn & Texture">Uốn & Texture</button>
    </div>
    <div class="style-grid">
        <?php foreach ($styles as $style): ?>
            <article class="style-card filter-item" data-category="<?= htmlspecialchars($style['category'], ENT_QUOTES, 'UTF-8') ?>">
                <img src="https://images.unsplash.com/<?= htmlspecialchars($style['image'], ENT_QUOTES, 'UTF-8') ?>?auto=format&fit=crop&w=900&q=85" alt="<?= htmlspecialchars($style['name'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                <div><h2><?= htmlspecialchars($style['name'], ENT_QUOTES, 'UTF-8') ?></h2><p><?= htmlspecialchars($style['detail'], ENT_QUOTES, 'UTF-8') ?></p></div>
            </article>
        <?php endforeach; ?>
    </div>
    <aside class="consult-banner"><div><h2>Chưa biết kiểu nào hợp với bạn?</h2><p>Barber của chúng tôi sẽ tư vấn theo gương mặt và chất tóc của bạn.</p></div><a class="button button-dark" href="<?= BASE_URL ?>?act=barbers">Đặt lịch tư vấn →</a></aside>
</section>

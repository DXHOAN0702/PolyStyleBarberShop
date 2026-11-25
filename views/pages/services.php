<section class="page-section page-wrap">
    <div class="page-heading">
        <p class="eyebrow">Poly Style Barber / Dịch vụ</p>
        <h1>Chăm chút từng chi tiết.</h1>
        <p>Dịch vụ dành riêng cho phái mạnh. Giá minh bạch, trải nghiệm trọn vẹn.</p>
    </div>
    <div class="filters" data-filter-group="service">
        <button class="filter-button selected" type="button" data-filter="all">Tất cả dịch vụ</button>
        <button class="filter-button" type="button" data-filter="Cắt & Tạo kiểu">Cắt & Tạo kiểu</button>
        <button class="filter-button" type="button" data-filter="Chăm sóc">Chăm sóc</button>
        <button class="filter-button" type="button" data-filter="Uốn & Nhuộm">Uốn & Nhuộm</button>
    </div>
    <div class="service-grid" id="services-list">
        <?php foreach ($services as $index => $service): ?>
            <article class="service-card filter-item" data-category="<?= htmlspecialchars($service['category'], ENT_QUOTES, 'UTF-8') ?>">
                <p class="eyebrow">0<?= $index + 1 ?> / <?= htmlspecialchars($service['duration'], ENT_QUOTES, 'UTF-8') ?></p>
                <h2><?= htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($service['detail'], ENT_QUOTES, 'UTF-8') ?></p>
                <div class="service-card-bottom"><strong><?= htmlspecialchars($service['price'], ENT_QUOTES, 'UTF-8') ?></strong><a class="button button-dark" href="mailto:polystyle@gmail.com?subject=Đặt%20lịch%20<?= rawurlencode($service['name']) ?>">Đặt lịch →</a></div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

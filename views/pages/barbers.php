<section class="page-section page-wrap">
    <div class="page-heading">
        <p class="eyebrow">Poly Style Barber / Đội ngũ</p>
        <h1>Gặp người giữ chất riêng.</h1>
        <p>Tay nghề vững vàng, gu thẩm mỹ tinh tế. Chọn người thợ hiểu bạn.</p>
    </div>
    <div class="barber-toolbar">
        <label class="select-wrap"><span class="visually-hidden">Lọc theo chi nhánh</span>
            <select aria-label="Lọc theo chi nhánh"><option>Tất cả chi nhánh</option><option>Quận 1</option><option>Quận 3</option><option>Bình Thạnh</option></select>
        </label>
        <span>03 barber · Luôn sẵn sàng cho bạn</span>
    </div>
    <div class="barber-grid">
        <?php foreach ($barbers as $barber): ?>
            <article class="barber-card">
                <img src="https://images.unsplash.com/<?= htmlspecialchars($barber['image'], ENT_QUOTES, 'UTF-8') ?>?auto=format&fit=crop&w=900&q=85" alt="Thợ cắt tóc <?= htmlspecialchars($barber['name'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                <div class="barber-info">
                    <p class="eyebrow"><?= htmlspecialchars($barber['title'], ENT_QUOTES, 'UTF-8') ?></p>
                    <h2><?= htmlspecialchars($barber['name'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars($barber['experience'], ENT_QUOTES, 'UTF-8') ?> · <?= htmlspecialchars($barber['specialty'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="barber-meta"><span>★ 4,9 · Chi nhánh Quận 1</span><a href="mailto:polystyle@gmail.com?subject=Đặt%20lịch%20với%20<?= rawurlencode($barber['name']) ?>">Đặt lịch với thợ →</a></div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="page-section page-wrap">
    <div class="page-heading">
        <p class="eyebrow">Poly Style Barber / Chi nhánh</p>
        <h1>Gần bạn. Đúng chất bạn.</h1>
        <p>Tìm không gian POLY STYLE gần nhất và đặt lịch ghé thăm.</p>
    </div>
    <div class="branch-layout">
        <div class="branch-list">
            <?php foreach ($branches as $index => $branch): ?>
                <button class="branch-option <?= $index === 0 ? 'selected' : '' ?>" type="button" data-branch="<?= $index ?>">
                    <span><strong><?= htmlspecialchars($branch['name'], ENT_QUOTES, 'UTF-8') ?></strong><small><?= htmlspecialchars($branch['address'], ENT_QUOTES, 'UTF-8') ?></small><small><?= htmlspecialchars($branch['hours'], ENT_QUOTES, 'UTF-8') ?> · Còn lịch hôm nay</small></span><b>Chọn →</b>
                </button>
            <?php endforeach; ?>
        </div>
        <div class="branch-feature">
            <?php foreach ($branches as $index => $branch): ?>
                <div class="branch-panel <?= $index === 0 ? 'is-active' : '' ?>" data-branch-panel="<?= $index ?>">
                    <img src="https://images.unsplash.com/<?= htmlspecialchars($branch['image'], ENT_QUOTES, 'UTF-8') ?>?auto=format&fit=crop&w=1300&q=85" alt="Không gian chi nhánh <?= htmlspecialchars($branch['name'], ENT_QUOTES, 'UTF-8') ?>" loading="<?= $index === 0 ? 'eager' : 'lazy' ?>">
                    <div class="branch-caption"><h2>Poly Style — <?= htmlspecialchars($branch['name'], ENT_QUOTES, 'UTF-8') ?></h2><p>Không gian riêng tư · Chỗ đỗ xe miễn phí</p></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

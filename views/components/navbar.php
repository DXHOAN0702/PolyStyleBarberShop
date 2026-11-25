<?php
$currentPage = $_GET['act'] ?? 'home';
$navigation = [
    'home' => 'Trang chủ',
    'services' => 'Dịch vụ',
    'barbers' => 'Thợ cắt tóc',
    'branches' => 'Chi nhánh',
    'styles' => 'Mẫu tóc',
];
?>
<header class="site-header">
    <div class="header-inner">
        <a class="brand" href="<?= BASE_URL ?>?act=home" aria-label="Poly Style Barber - Trang chủ">
            <span class="brand-mark">P</span>
            <span class="brand-name">POLY<br>STYLE<br>BARBER</span>
        </a>
        <button class="menu-toggle" type="button" aria-label="Mở menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <nav class="main-nav" aria-label="Điều hướng chính">
            <?php foreach ($navigation as $route => $label): ?>
                <a class="<?= $currentPage === $route ? 'active' : '' ?>" href="<?= BASE_URL ?>?act=<?= $route ?>"><?= $label ?></a>
            <?php endforeach; ?>
            <a class="account-link <?= in_array($currentPage, ['account', 'register'], true) ? 'active' : '' ?>" href="<?= BASE_URL ?>?act=account">Tài khoản</a>
            <a class="button button-dark nav-booking" href="<?= BASE_URL ?>?act=services#services-list">Đặt lịch ngay <span>→</span></a>
        </nav>
    </div>
</header>

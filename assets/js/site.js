document.querySelectorAll('.menu-toggle').forEach(function (button) {
    button.addEventListener('click', function () {
        var isOpen = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', String(!isOpen));
        document.querySelector('.main-nav').classList.toggle('is-open', !isOpen);
    });
});

document.querySelectorAll('[data-filter-group]').forEach(function (group) {
    group.querySelectorAll('.filter-button').forEach(function (button) {
        button.addEventListener('click', function () {
            group.querySelectorAll('.filter-button').forEach(function (filter) {
                filter.classList.remove('selected');
            });
            button.classList.add('selected');
            var value = button.dataset.filter;
            var grid = group.parentElement.querySelector('.service-grid, .style-grid');
            if (!grid) return;
            grid.querySelectorAll('.filter-item').forEach(function (item) {
                item.hidden = value !== 'all' && item.dataset.category !== value;
            });
        });
    });
});

document.querySelectorAll('.branch-option').forEach(function (button) {
    button.addEventListener('click', function () {
        document.querySelectorAll('.branch-option').forEach(function (option) {
            option.classList.remove('selected');
        });
        document.querySelectorAll('.branch-panel').forEach(function (panel) {
            panel.classList.remove('is-active');
        });
        button.classList.add('selected');
        var panel = document.querySelector('[data-branch-panel="' + button.dataset.branch + '"]');
        if (panel) panel.classList.add('is-active');
    });
});

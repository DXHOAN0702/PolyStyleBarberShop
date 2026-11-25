<?php

require_once __DIR__ . '/../models/SiteModel.php';

class SiteController
{
    private $model;

    public function __construct()
    {
        $this->model = new SiteModel();
    }

    private function render($page, $title, $data = [])
    {
        extract($data);
        $pageTitle = $title;
        $pageView = __DIR__ . '/../views/pages/' . $page . '.php';

        ob_start();
        require $pageView;
        $content = ob_get_clean();

        require __DIR__ . '/../views/layout.php';
    }

    public function home()
    {
        $this->render('home', 'Trang chủ', [
            'featuredServices' => array_slice($this->model->services(), 0, 3),
            'branch' => $this->model->branches()[0],
        ]);
    }

    public function services()
    {
        $this->render('services', 'Dịch vụ', ['services' => $this->model->services()]);
    }

    public function barbers()
    {
        $this->render('barbers', 'Thợ cắt tóc', ['barbers' => $this->model->barbers()]);
    }

    public function branches()
    {
        $this->render('branches', 'Chi nhánh', ['branches' => $this->model->branches()]);
    }

    public function styles()
    {
        $this->render('styles', 'Mẫu tóc', ['styles' => $this->model->styles()]);
    }

    public function account()
    {
        $this->render('login', 'Đăng nhập');
    }

    public function register()
    {
        $this->render('register', 'Đăng ký');
    }
}

<?php

class SiteModel
{
    public function services()
    {
        return [
            ['category' => 'Cắt & Tạo kiểu', 'name' => 'Cắt tóc nam', 'detail' => 'Tư vấn kiểu tóc · Cắt · Gội · Sấy', 'duration' => '30 phút', 'price' => '120.000đ'],
            ['category' => 'Cắt & Tạo kiểu', 'name' => 'Combo Gentleman', 'detail' => 'Cắt tóc · Gội massage · Cạo mặt', 'duration' => '60 phút', 'price' => '200.000đ'],
            ['category' => 'Chăm sóc', 'name' => 'Gội đầu thư giãn', 'detail' => 'Gội sạch sâu · Massage đầu và gáy', 'duration' => '30 phút', 'price' => '80.000đ'],
            ['category' => 'Chăm sóc', 'name' => 'Cạo râu & tạo nét', 'detail' => 'Khăn nóng · Cạo râu · Dưỡng da', 'duration' => '20 phút', 'price' => '60.000đ'],
            ['category' => 'Uốn & Nhuộm', 'name' => 'Uốn tạo kiểu', 'detail' => 'Tư vấn · Uốn tự nhiên · Dưỡng tóc', 'duration' => '90 phút', 'price' => '350.000đ'],
            ['category' => 'Uốn & Nhuộm', 'name' => 'Nhuộm thời trang', 'detail' => 'Tư vấn màu · Nhuộm · Chăm sóc', 'duration' => '90 phút', 'price' => '400.000đ'],
        ];
    }

    public function barbers()
    {
        return [
            ['name' => 'Minh Khang', 'title' => 'Master Barber', 'experience' => '7 năm kinh nghiệm', 'specialty' => 'Fade & Classic', 'image' => 'photo-1599351431202-1e0f0137899a'],
            ['name' => 'Hoàng Nam', 'title' => 'Senior Barber', 'experience' => '5 năm kinh nghiệm', 'specialty' => 'Uốn & Texture', 'image' => 'photo-1621605815971-fbc98d665033'],
            ['name' => 'Đức Anh', 'title' => 'Senior Barber', 'experience' => '6 năm kinh nghiệm', 'specialty' => 'Side part & Taper', 'image' => 'photo-1503951914875-452162b0f3f1'],
        ];
    }

    public function branches()
    {
        return [
            ['name' => 'Quận 1 · Flagship', 'address' => 'Hẻm 18, Nguyễn Thị Minh Khai, Quận 1', 'hours' => '08:30 – 21:00', 'image' => 'photo-1503951914875-452162b0f3f1'],
            ['name' => 'Quận 3', 'address' => '268 Nguyễn Đình Chiểu, Quận 3', 'hours' => '08:30 – 21:00', 'image' => 'photo-1621605815971-fbc98d665033'],
            ['name' => 'Bình Thạnh', 'address' => '86 D5, Phường 25, Bình Thạnh', 'hours' => '08:00 – 21:30', 'image' => 'photo-1599351431202-1e0f0137899a'],
        ];
    }

    public function styles()
    {
        return [
            ['category' => 'Tóc ngắn', 'name' => 'Textured crop', 'detail' => 'Gọn gàng · Cá tính · Dễ chăm sóc', 'image' => 'photo-1621605815971-fbc98d665033'],
            ['category' => 'Classic', 'name' => 'Modern pompadour', 'detail' => 'Lịch lãm · Bồng bềnh · Hiện đại', 'image' => 'photo-1508243529287-e21914733111'],
            ['category' => 'Classic', 'name' => 'Side part 7/3', 'detail' => 'Tinh tế · Thanh lịch · Chuẩn quý ông', 'image' => 'photo-1622296089863-eb7fc530daa8'],
            ['category' => 'Uốn & Texture', 'name' => 'Natural wave', 'detail' => 'Tự nhiên · Bồng nhẹ · Dễ tạo kiểu', 'image' => 'photo-1599351431202-1e0f0137899a'],
            ['category' => 'Tóc ngắn', 'name' => 'Low taper', 'detail' => 'Sạch sẽ · Hiện đại · Linh hoạt', 'image' => 'photo-1599351431202-1e0f0137899a'],
            ['category' => 'Uốn & Texture', 'name' => 'Messy texture', 'detail' => 'Phóng khoáng · Tạo độ phồng', 'image' => 'photo-1622296089863-eb7fc530daa8'],
        ];
    }
}

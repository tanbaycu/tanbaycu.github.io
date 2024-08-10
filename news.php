<?php
// Dữ liệu tin tức
$newsArray = [
    [
        "title" => "Mới: Giống Mai Vàng Siêu Đẹp Được Nhập Khẩu",
        "description" => "Khám phá giống mai vàng mới nhất với vẻ đẹp rực rỡ, vừa được nhập khẩu từ Nhật Bản.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-1.jpg",
        "link" => "https://example.com/article1"
    ],
    [
        "title" => "Hướng Dẫn Chăm Sóc Mai Vàng Trong Mùa Mưa",
        "description" => "Cung cấp các mẹo và hướng dẫn chăm sóc mai vàng hiệu quả trong mùa mưa.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-2.jpg",
        "link" => "https://example.com/article2"
    ],
    [
        "title" => "Top 5 Giống Mai Vàng Phù Hợp Với Khí Hậu Việt Nam",
        "description" => "Danh sách các giống mai vàng tốt nhất cho điều kiện khí hậu của Việt Nam.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-3.jpg",
        "link" => "https://example.com/article3"
    ],
    [
        "title" => "Bí Quyết Để Mai Vàng Nở Hoa Đẹp Trong Tết Nguyên Đán",
        "description" => "Những bí quyết để cây mai vàng nở hoa đẹp và đúng dịp trong dịp Tết Nguyên Đán.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-4.jpg",
        "link" => "https://example.com/article4"
    ],
    [
        "title" => "Cách Phân Biệt Mai Vàng Thật Và Giả",
        "description" => "Hướng dẫn phân biệt mai vàng thật và giả để bạn không bị lừa khi mua cây.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-5.jpg",
        "link" => "https://example.com/article5"
    ],
    [
        "title" => "Những Lỗi Thường Gặp Khi Chăm Sóc Mai Vàng",
        "description" => "Tìm hiểu các lỗi thường gặp trong việc chăm sóc mai vàng và cách khắc phục chúng.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-6.jpg",
        "link" => "https://example.com/article6"
    ],
    [
        "title" => "Tìm Hiểu Về Quy Trình Kỹ Thuật Cấy Mai Vàng",
        "description" => "Chi tiết quy trình kỹ thuật cấy mai vàng để đạt được cây giống tốt nhất.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-7.jpg",
        "link" => "https://example.com/article7"
    ],
    [
        "title" => "Cách Xử Lý Sâu Bệnh Thường Gặp Trên Cây Mai Vàng",
        "description" => "Hướng dẫn xử lý các loại sâu bệnh thường gặp trên cây mai vàng để bảo vệ sức khỏe cây.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-8.jpg",
        "link" => "https://example.com/article8"
    ],
    [
        "title" => "Cách Tạo Hình Mai Vàng Theo Sở Thích",
        "description" => "Hướng dẫn cách tạo hình cho cây mai vàng theo ý thích để làm đẹp không gian sống.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-9.jpg",
        "link" => "https://example.com/article9"
    ],
    [
        "title" => "Những Lưu Ý Khi Mua Mai Vàng Online",
        "description" => "Các lưu ý quan trọng khi mua mai vàng online để đảm bảo bạn chọn được cây chất lượng.",
        "image_url" => "https://www.yourwebsite.com/images/mai-vang-10.jpg",
        "link" => "https://example.com/article10"
    ]
];

// Xuất dữ liệu dưới dạng HTML
foreach ($newsArray as $newsItem) {
    echo '<div class="news-item">';
    echo '<img src="' . htmlspecialchars($newsItem['image_url']) . '" alt="Ảnh minh họa">';
    echo '<h2><a href="' . htmlspecialchars($newsItem['link']) . '" target="_blank" rel="noopener">' . htmlspecialchars($newsItem['title']) . '</a></h2>';
    echo '<p>' . htmlspecialchars($newsItem['description']) . '</p>';
    echo '</div>';
}
?>

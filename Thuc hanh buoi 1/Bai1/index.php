<?php
// Hàm tải dữ liệu từ file
function loadFlowersData() {
    $dataFile = 'flowers_data.json';
    if (file_exists($dataFile)) {
        $json = file_get_contents($dataFile);
        if ($json === false) {
            error_log("Lỗi đọc file: Không thể đọc file " . $dataFile);
            return [];
        }
        
        $flowers = json_decode($json, true);
        if ($flowers === null) {
            error_log("Lỗi decode JSON: " . json_last_error_msg());
            return [];
        }
        
        return $flowers;
    } else {
        error_log("File không tồn tại: " . $dataFile);
        return [];
    }
}

// Tải dữ liệu từ file
$flowers = loadFlowersData();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14 loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp xuân hè</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }
        /* Giao diện cho người dùng khách */
        .flower-card {
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .flower-card h2 {
            color: #2980b9;
            margin-bottom: 10px;
        }
        .flower-images {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        .flower-images img {
            max-width: 400px;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>14 loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp xuân hè</h1>
        
        <!-- Giao diện người dùng khách -->
        <?php foreach ($flowers as $flower): ?>
        <div class="flower-card">
            <h2><?php echo $flower['name']; ?></h2>
            <div class="flower-images">
                <?php foreach ($flower['images'] as $image): ?>
                <img src="<?php echo $image; ?>" alt="<?php echo $flower['name']; ?>">
                <?php endforeach; ?>
            </div>
            <p><?php echo $flower['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

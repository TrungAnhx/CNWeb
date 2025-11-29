<?php
// Hàm tải dữ liệu từ file
function loadFlowersData() {
    $dataFile = 'flowers_data.json';
    if (file_exists($dataFile)) {
        $json = file_get_contents($dataFile);
        if ($json === false) {
            // Log error thay vì die
            error_log("Lỗi đọc file: Không thể đọc file " . $dataFile);
            return [];
        }
        
        $flowers = json_decode($json, true);
        if ($flowers === null) {
            // Log error thay vì die
            error_log("Lỗi decode JSON: " . json_last_error_msg());
            return [];
        }
        
        return $flowers;
    } else {
        // Log error thay vì die
        error_log("File không tồn tại: " . $dataFile);
        return [];
    }
}

// Hàm lưu dữ liệu vào file
function saveFlowersData($flowers) {
    $dataFile = 'flowers_data.json';
    $json = json_encode($flowers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    
    // Log error thay vì die
    if (!$json) {
        error_log("Lỗi encode JSON: " . json_last_error_msg());
        return false;
    }
    
    $result = file_put_contents($dataFile, $json);
    if ($result === false) {
        error_log("Lỗi ghi file: Không thể ghi vào file " . $dataFile . ". Kiểm tra quyền ghi thư mục.");
        return false;
    }
    
    return $result;
}

// Kiểm tra nếu có yêu cầu thêm, sửa, xóa
$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Xử lý các hành động CRUD
if ($action == 'delete' && $id > 0) {
    // Tải dữ liệu từ file
    $flowers = loadFlowersData();
    
    // Xóa hoa khỏi mảng
    foreach ($flowers as $key => $flower) {
        if ($flower['id'] == $id) {
            unset($flowers[$key]);
            // Sắp xếp lại mảng
            $flowers = array_values($flowers);
            break;
        }
    }
    
    // Lưu dữ liệu vào file
    saveFlowersData($flowers);
    
    // Chuyển hướng về trang quản lý với thông báo thành công
    header("Location: admin.php?success=delete");
    exit;
}

// Xử lý thêm hoa mới
if ($action == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tải dữ liệu từ file
    $flowers = loadFlowersData();
    
    $new_id = 1;
    if (!empty($flowers)) {
        $new_id = max(array_column($flowers, 'id')) + 1;
    }
    
    // Xử lý upload ảnh
    $image_paths = [];
    for ($i = 1; $i <= 2; $i++) {
        if (isset($_FILES["image{$i}"]) && $_FILES["image{$i}"]["error"] == 0) {
            $target_dir = "images/";
            $file_name = basename($_FILES["image{$i}"]["name"]);
            $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            
            // Tạo tên file mới dựa trên tên hoa và ID để tránh trùng lặp
            $sanitized_name = preg_replace('/[^a-zA-Z0-9]/', '_', $_POST['name']);
            $new_file_name = "hoa{$sanitized_name}_{$new_id}_{$i}." . $file_extension;
            $target_file = $target_dir . $new_file_name;
            
            // Di chuyển file đã upload
            if (move_uploaded_file($_FILES["image{$i}"]["tmp_name"], $target_file)) {
                $image_paths[] = $target_file;
            } else {
                // Nếu upload thất bại, sử dụng đường dẫn mặc định
                $image_paths[] = "images/hoacamchuong1.webp";
            }
        } else {
            // Nếu không có file được upload, sử dụng đường dẫn mặc định
            $image_paths[] = "images/hoacamchuong1.webp";
        }
    }
    
    $new_flower = [
        'id' => $new_id,
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'images' => $image_paths
    ];
    
    $flowers[] = $new_flower;
    
    // Lưu dữ liệu vào file
    saveFlowersData($flowers);
    
    // Chuyển hướng về trang quản lý để xem kết quả
    header("Location: admin.php?success=add");
    exit;
}

// Xử lý sửa hoa
if ($action == 'edit' && $_SERVER['REQUEST_METHOD'] == 'POST' && $id > 0) {
    // Tải dữ liệu từ file
    $flowers = loadFlowersData();
    
    foreach ($flowers as $key => $flower) {
        if ($flower['id'] == $id) {
            $flowers[$key]['name'] = $_POST['name'];
            $flowers[$key]['description'] = $_POST['description'];
            
            // Xử lý upload ảnh mới (nếu có)
            $image_paths = [];
            for ($i = 1; $i <= 2; $i++) {
                if (isset($_FILES["image{$i}"]) && $_FILES["image{$i}"]["error"] == 0) {
                    $target_dir = "images/";
                    $file_name = basename($_FILES["image{$i}"]["name"]);
                    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                    
                    // Tạo tên file mới dựa trên tên hoa và ID để tránh trùng lặp
                    $sanitized_name = preg_replace('/[^a-zA-Z0-9]/', '_', $_POST['name']);
                    $new_file_name = "hoa{$sanitized_name}_{$id}_{$i}." . $file_extension;
                    $target_file = $target_dir . $new_file_name;
                    
                    // Di chuyển file đã upload
                    if (move_uploaded_file($_FILES["image{$i}"]["tmp_name"], $target_file)) {
                        $image_paths[] = $target_file;
                    } else {
                        // Nếu upload thất bại, giữ lại ảnh cũ
                        $image_paths[] = $flower['images'][$i-1];
                    }
                } else {
                    // Nếu không có file được upload, giữ lại ảnh cũ
                    $image_paths[] = $flower['images'][$i-1];
                }
            }
            
            $flowers[$key]['images'] = $image_paths;
            break;
        }
    }
    
    // Lưu dữ liệu vào file
    saveFlowersData($flowers);
    
    // Chuyển hướng về trang quản lý để xem kết quả
    header("Location: admin.php?success=edit");
    exit;
}

// Tải dữ liệu từ file sau khi xử lý các hành động
$flowers = loadFlowersData();

// Kiểm tra nếu có yêu cầu thêm, sửa, xóa cho hiển thị
$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Lấy thông tin hoa để sửa
$edit_flower = null;
if ($action == 'edit' && $id > 0) {
    foreach ($flowers as $flower) {
        if ($flower['id'] == $id) {
            $edit_flower = $flower;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh sách hoa</title>
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
        h1, h2 {
            color: #2c3e50;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .admin-table th, .admin-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .admin-table th {
            background-color: #3498db;
            color: white;
        }
        .admin-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .admin-table img {
            max-width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }
        .admin-actions {
            display: flex;
            gap: 5px;
        }
        .btn {
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
            font-size: 12px;
            display: inline-block;
        }
        .btn-edit {
            background-color: #f39c12;
        }
        .btn-delete {
            background-color: #e74c3c;
        }
        .btn-add {
            background-color: #2ecc71;
            margin-bottom: 15px;
            padding: 8px 15px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        .btn-submit {
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-cancel {
            background-color: #95a5a6;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quản lý danh sách hoa</h1>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="success-message">
                <?php 
                $success = $_GET['success'];
                if ($success == 'add') echo 'Thêm hoa mới thành công!';
                elseif ($success == 'edit') echo 'Cập nhật thông tin hoa thành công!';
                elseif ($success == 'delete') echo 'Xóa hoa thành công!';
                ?>
            </div>
        <?php endif; ?>
        
        <!-- Debug thông tin -->
        <div class="debug-info" style="background-color: #f0f0f0; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
            <strong>Debug Info:</strong><br>
            Số lượng hoa trong danh sách: <?php echo count($flowers); ?><br>
            Dữ liệu được tải từ: <?php echo file_exists('flowers_data.json') ? 'flowers_data.json' : 'MẢNG MẶC ĐỊNH'; ?><br>
            File JSON tồn tại: <?php echo file_exists('flowers_data.json') ? 'Có' : 'Không'; ?><br>
            Kích thước file: <?php echo file_exists('flowers_data.json') ? filesize('flowers_data.json') . ' bytes' : '0 bytes'; ?>
        </div>
        
        <?php if ($action == 'add'): ?>
            <!-- Form thêm hoa mới -->
            <h2>Thêm hoa mới</h2>
            <form method="post" action="admin.php?action=add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tên hoa:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image1">Hình ảnh 1:</label>
                    <input type="file" id="image1" name="image1" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="image2">Hình ảnh 2:</label>
                    <input type="file" id="image2" name="image2" accept="image/*" required>
                </div>
                <button type="submit" class="btn-submit">Lưu</button>
                <a href="admin.php" class="btn-cancel">Hủy</a>
            </form>
            
        <?php elseif ($action == 'edit' && $edit_flower): ?>
            <!-- Form sửa hoa -->
            <h2>Sửa thông tin hoa</h2>
            <form method="post" action="admin.php?action=edit&id=<?php echo $edit_flower['id']; ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tên hoa:</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($edit_flower['name']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả:</label>
                    <textarea id="description" name="description" required><?php echo htmlspecialchars($edit_flower['description']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image1">Hình ảnh 1:</label>
                    <div>
                        <img src="<?php echo htmlspecialchars($edit_flower['images'][0]); ?>" alt="Ảnh hiện tại" style="max-width: 200px; margin-bottom: 10px;">
                        <br>
                        <input type="file" id="image1" name="image1" accept="image/*">
                        <small>Để trống nếu không muốn thay đổi ảnh</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image2">Hình ảnh 2:</label>
                    <div>
                        <img src="<?php echo htmlspecialchars($edit_flower['images'][1]); ?>" alt="Ảnh hiện tại" style="max-width: 200px; margin-bottom: 10px;">
                        <br>
                        <input type="file" id="image2" name="image2" accept="image/*">
                        <small>Để trống nếu không muốn thay đổi ảnh</small>
                    </div>
                </div>
                <button type="submit" class="btn-submit">Lưu</button>
                <a href="admin.php" class="btn-cancel">Hủy</a>
            </form>
            
        <?php else: ?>
            <!-- Danh sách hoa -->
            <h2>Danh sách hoa</h2>
            <a href="admin.php?action=add" class="btn btn-add">Thêm hoa mới</a>
            
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên hoa</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($flowers as $flower): ?>
                    <tr>
                        <td><?php echo $flower['id']; ?></td>
                        <td><?php echo htmlspecialchars($flower['name']); ?></td>
                        <td><?php echo htmlspecialchars(substr($flower['description'], 0, 100)) . '...'; ?></td>
                        <td>
                            <img src="<?php echo htmlspecialchars($flower['images'][0]); ?>" alt="<?php echo htmlspecialchars($flower['name']); ?>">
                        </td>
                        <td>
                            <div class="admin-actions">
                                <a href="admin.php?action=edit&id=<?php echo $flower['id']; ?>" class="btn btn-edit">Sửa</a>
                                <a href="admin.php?action=delete&id=<?php echo $flower['id']; ?>" class="btn btn-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa loài hoa này?')">Xóa</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>

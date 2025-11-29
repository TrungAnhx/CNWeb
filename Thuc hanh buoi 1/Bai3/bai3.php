<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách điểm danh</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #fbc2eb 100%);
            background-attachment: fixed;
            min-height: 100vh;
            animation: gradientShift 15s ease infinite;
            background-size: 400% 400%;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInUp 0.8s ease-out;
            position: relative;
            overflow: hidden;
        }
        
        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 30s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        h1 {
            color: #1a202c;
            text-align: center;
            margin-bottom: 40px;
            font-size: 3rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            padding-bottom: 20px;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h1::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            border-radius: 2px;
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 5px rgba(102, 126, 234, 0.5); }
            to { box-shadow: 0 0 20px rgba(240, 147, 251, 0.8), 0 0 30px rgba(240, 147, 251, 0.4); }
        }
        
        .table-container {
            overflow-x: auto;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            border-radius: 16px;
            overflow: hidden;
        }
        
        th, td {
            padding: 20px 16px;
            text-align: left;
            border-bottom: 1px solid rgba(226, 232, 240, 0.6);
            position: relative;
        }
        
        th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 13px;
            position: sticky;
            top: 0;
            z-index: 10;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        tr:nth-child(even) {
            background: linear-gradient(90deg, rgba(248, 250, 252, 0.8), rgba(241, 245, 249, 0.8));
        }
        
        tr {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        tr::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, rgba(102, 126, 234, 0.1), rgba(240, 147, 251, 0.1));
            transition: width 0.4s ease;
        }
        
        tr:hover::before {
            width: 100%;
        }
        
        tr:hover {
            background: linear-gradient(90deg, rgba(232, 244, 253, 0.95), rgba(248, 250, 252, 0.95));
            transform: translateX(8px) scale(1.01);
            box-shadow: 0 10px 25px -5px rgba(102, 126, 234, 0.25);
            z-index: 5;
        }
        
        td {
            color: #2d3748;
            font-size: 14px;
            font-weight: 500;
            border-right: 1px solid rgba(226, 232, 240, 0.4);
            transition: all 0.3s ease;
        }
        
        td:last-child {
            border-right: none;
        }
        
        tr:hover td {
            color: #1a202c;
            font-weight: 600;
        }
        
        .info-message, .success-message {
            text-align: center;
            padding: 24px;
            border-radius: 16px;
            margin: 24px 0;
            font-weight: 500;
            position: relative;
            overflow: hidden;
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .info-message {
            background: linear-gradient(135deg, rgba(248, 215, 218, 0.95), rgba(252, 165, 165, 0.95));
            color: #721c24;
            border: 1px solid rgba(252, 165, 165, 0.3);
        }
        
        .success-message {
            background: linear-gradient(135deg, rgba(212, 237, 218, 0.95), rgba(134, 239, 172, 0.95));
            color: #22543d;
            border: 1px solid rgba(134, 239, 172, 0.3);
        }
        
        .stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
            position: relative;
            z-index: 1;
        }
        
        .stat-item {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 20px 25px -5px rgba(102, 126, 234, 0.25), 0 10px 10px -5px rgba(118, 75, 162, 0.04);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            flex: 1;
            min-width: 150px;
            max-width: 200px;
        }
        
        .stat-item::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            transition: all 0.6s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 25px 50px -12px rgba(102, 126, 234, 0.4);
        }
        
        .stat-item:hover::before {
            top: -20%;
            right: -20%;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            display: block;
            margin-bottom: 8px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .stat-label {
            font-size: 14px;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 2rem;
                letter-spacing: 1px;
            }
            
            .stats {
                flex-direction: column;
                gap: 15px;
            }
            
            .stat-item {
                max-width: 100%;
            }
            
            .table-container {
                border-radius: 12px;
            }
            
            th, td {
                padding: 12px 8px;
                font-size: 12px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
        
        /* Additional animations */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .stats .stat-item:nth-child(1) {
            animation: pulse 3s infinite 0.5s;
        }
        
        .stats .stat-item:nth-child(2) {
            animation: pulse 3s infinite 1s;
        }
        
        .stats .stat-item:nth-child(3) {
            animation: pulse 3s infinite 1.5s;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách điểm danh</h1>
        
        <?php
        $csvFile = '65HTTT_Danh_sach_diem_danh.csv';
        
        if (file_exists($csvFile)) {
            $file = fopen($csvFile, 'r');
            
            if ($file) {
                $rowCount = 0;
                // Bỏ qua header
                fgetcsv($file);
                
                // Đếm số lượng dòng dữ liệu
                while (fgetcsv($file) !== false) {
                    $rowCount++;
                }
                
                // Reset pointer về đầu file
                rewind($file);
                
                // Hiển thị thống kê
                echo '<div class="stats">';
                echo '<div class="stat-item">';
                echo '<span class="stat-number">' . $rowCount . '</span>';
                echo '<span class="stat-label">Sinh viên</span>';
                echo '</div>';
                echo '<div class="stat-item">';
                echo '<span class="stat-number">1</span>';
                echo '<span class="stat-label">Lớp</span>';
                echo '</div>';
                echo '<div class="stat-item">';
                echo '<span class="stat-number">CSE485</span>';
                echo '<span class="stat-label">Môn học</span>';
                echo '</div>';
                echo '</div>';
                
                echo '<div class="table-container">';
                echo '<table>';
                
                $header = fgetcsv($file);
                if ($header) {
                    echo '<thead><tr>';
                    foreach ($header as $col) {
                        echo '<th>' . htmlspecialchars($col) . '</th>';
                    }
                    echo '</tr></thead>';
                }
                
                echo '<tbody>';
                while (($row = fgetcsv($file)) !== false) {
                    echo '<tr>';
                    foreach ($row as $cell) {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</tbody></table>';
                echo '</div>';
                
                fclose($file);
            } else {
                echo '<div class="info-message">Không thể mở file CSV.</div>';
            }
        } else {
            echo '<div class="info-message">File CSV không tồn tại.</div>';
        }
        ?>
    </div>
</body>
</html>

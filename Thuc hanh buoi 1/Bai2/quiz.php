<?php
// Quiz Questions from Quiz.txt
$questions = [
    [
        "question" => "Thành phần nào sau đây KHÔNG phải là một thành phần giao diện người dùng (UI) trong Android?",
        "options" => ["A. TextView", "B. Button", "C. Service", "D. ImageView"],
        "answer" => "C"
    ],
    [
        "question" => "Layout nào thường được sử dụng để sắp xếp các thành phần UI theo chiều dọc hoặc chiều ngang?",
        "options" => ["A. RelativeLayout", "B. LinearLayout", "C. FrameLayout", "D. ConstraintLayout"],
        "answer" => "B"
    ],
    [
        "question" => "Intent trong Android được sử dụng để làm gì?",
        "options" => ["A. Hiển thị thông báo cho người dùng.", "B. Lưu trữ dữ liệu.", "C. Khởi chạy Activity.", "D. Xử lý sự kiện chạm."],
        "answer" => "C"
    ],
    [
        "question" => "Vòng đời của một Activity bắt đầu bằng phương thức nào?",
        "options" => ["A. onStart()", "B. onResume()", "C. onCreate()", "D. onPause()"],
        "answer" => "C"
    ],
    [
        "question" => "Để xử lý sự kiện click chuột cho một Button, bạn cần sử dụng phương thức nào?",
        "options" => ["A. onClick()", "B. onTouch()", "C. onLongClick()", "D. onFocusChange()"],
        "answer" => "A"
    ],
    [
        "question" => "Kiểu dữ liệu nào sau đây được sử dụng để lưu trữ giá trị đúng hoặc sai?",
        "options" => ["A. int", "B. float", "C. String", "D. boolean"],
        "answer" => "D"
    ],
    [
        "question" => "SharedPreferences trong Android được sử dụng để làm gì?",
        "options" => ["A. Lưu trữ dữ liệu có cấu trúc.", "B. Truy cập cơ sở dữ liệu SQLite.", "C. Lưu trữ dữ liệu dạng key-value.", "D. Gửi dữ liệu qua mạng."],
        "answer" => "C"
    ],
    [
        "question" => "Toast trong Android được sử dụng để làm gì?",
        "options" => ["A. Hiển thị một hộp thoại.", "B. Hiển thị một thông báo ngắn gọn cho người dùng.", "C. Phát nhạc.", "D. Chụp ảnh màn hình."],
        "answer" => "B"
    ],
    [
        "question" => "Để tạo một ứng dụng Android, bạn cần sử dụng ngôn ngữ lập trình nào?",
        "options" => ["A. C++", "B. Python", "C. Java", "D. Kotlin"],
        "answer" => ["C", "D"]
    ],
    [
        "question" => "Adapter trong Android được sử dụng để làm gì?",
        "options" => ["A. Kết nối dữ liệu với ListView hoặc RecyclerView.", "B. Tạo hiệu ứng động.", "C. Xử lý sự kiện cảm ứng.", "D. Lưu trữ dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "Fragment trong Android là gì?",
        "options" => ["A. Một Activity con.", "B. Một thành phần UI có thể tái sử dụng.", "C. Một dịch vụ chạy nền.", "D. Một kiểu dữ liệu."],
        "answer" => "B"
    ],
    [
        "question" => "RecyclerView là gì?",
        "options" => ["A. Một thành phần UI để hiển thị danh sách.", "B. Một layout để sắp xếp các thành phần UI.", "C. Một lớp để xử lý sự kiện.", "D. Một kiểu dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "Manifest file trong Android được sử dụng để làm gì?",
        "options" => ["A. Khai báo các thành phần của ứng dụng.", "B. Lưu trữ dữ liệu.", "C. Xử lý sự kiện.", "D. Tạo giao diện người dùng."],
        "answer" => "A"
    ],
    [
        "question" => "Gradle là gì?",
        "options" => ["A. Một công cụ để quản lý dependencies.", "B. Một ngôn ngữ lập trình.", "C. Một IDE để phát triển ứng dụng Android.", "D. Một framework."],
        "answer" => "A"
    ],
    [
        "question" => "AsyncTask được sử dụng để làm gì?",
        "options" => ["A. Xử lý các tác vụ chạy nền.", "B. Tạo hiệu ứng động.", "C. Vẽ đồ họa.", "D. Lưu trữ dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "ContentProvider được sử dụng để làm gì?",
        "options" => ["A. Chia sẻ dữ liệu giữa các ứng dụng.", "B. Tạo giao diện người dùng.", "C. Xử lý sự kiện.", "D. Lưu trữ dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "SQLite là gì?",
        "options" => ["A. Một hệ quản trị cơ sở dữ liệu.", "B. Một ngôn ngữ lập trình.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "BroadcastReceiver được sử dụng để làm gì?",
        "options" => ["A. Nhận các thông báo từ hệ thống.", "B. Gửi dữ liệu qua mạng.", "C. Tạo giao diện người dùng.", "D. Xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "Service là gì?",
        "options" => ["A. Một thành phần ứng dụng chạy nền.", "B. Một thành phần UI.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "Thread là gì?",
        "options" => ["A. Một luồng xử lý.", "B. Một thành phần UI.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "Activity Lifecycle là gì?",
        "options" => ["A. Quá trình tạo, khởi động, tạm dừng và hủy một Activity.", "B. Vòng đời của một ứng dụng Android.", "C. Quá trình tải dữ liệu từ mạng.", "D. Quá trình lưu trữ dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "Layout inflater được sử dụng để làm gì?",
        "options" => ["A. Tạo các đối tượng View từ file XML.", "B. Sắp xếp các thành phần UI.", "C. Xử lý sự kiện.", "D. Lưu trữ dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "Drawable là gì?",
        "options" => ["A. Một tài nguyên đồ họa.", "B. Một thành phần UI.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "dp là gì?",
        "options" => ["A. Đơn vị đo lường độc lập với mật độ điểm ảnh.", "B. Đơn vị đo lường phụ thuộc vào mật độ điểm ảnh.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "Để định nghĩa một màu sắc trong Android, bạn sử dụng kiểu dữ liệu nào?",
        "options" => ["A. Integer", "B. String", "C. Color", "D. Hexadecimal"],
        "answer" => ["C", "D"]
    ],
    [
        "question" => "ViewGroup là gì?",
        "options" => ["A. Một lớp cơ sở cho tất cả các layout.", "B. Một thành phần UI để hiển thị hình ảnh.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "Thuộc tính android:layout_width=\"match_parent\" có ý nghĩa gì?",
        "options" => ["A. Thành phần UI sẽ có chiều rộng bằng với chiều rộng của thiết bị.", "B. Thành phần UI sẽ có chiều rộng bằng với chiều rộng của thành phần cha.", "C. Thành phần UI sẽ có chiều rộng cố định là 100dp.", "D. Thành phần UI sẽ tự động điều chỉnh chiều rộng."],
        "answer" => "B"
    ],
    [
        "question" => "Thuộc tính android:gravity được sử dụng để làm gì?",
        "options" => ["A. Căn chỉnh nội dung của một thành phần UI.", "B. Thay đổi vị trí của một thành phần UI.", "C. Thay đổi kích thước của một thành phần UI.", "D. Thay đổi màu sắc của một thành phần UI."],
        "answer" => "A"
    ],
    [
        "question" => "AndroidManifest.xml nằm ở đâu trong project Android?",
        "options" => ["A. Thư mục /res", "B. Thư mục /src", "C. Thư mục gốc của project", "D. Thư mục /assets"],
        "answer" => "C"
    ],
    [
        "question" => "Để chạy một ứng dụng Android trên thiết bị thật, bạn cần làm gì?",
        "options" => ["A. Kết nối thiết bị với máy tính và bật chế độ USB debugging.", "B. Cài đặt Android Studio trên thiết bị.", "C. Chạy lệnh adb install trên máy tính.", "D. Cả A và C."],
        "answer" => "A"
    ],
    [
        "question" => "dp và sp khác nhau như thế nào?",
        "options" => ["A. dp là đơn vị đo lường độc lập với mật độ điểm ảnh, sp là đơn vị đo lường phụ thuộc vào mật độ điểm ảnh.", "B. dp được sử dụng cho kích thước font chữ, sp được sử dụng cho kích thước các thành phần UI khác.", "C. dp là đơn vị đo lường phụ thuộc vào mật độ điểm ảnh, sp là đơn vị đo lường độc lập với mật độ điểm ảnh.", "D. dp và sp giống nhau."],
        "answer" => "A"
    ],
    [
        "question" => "AlertDialog được sử dụng để làm gì?",
        "options" => ["A. Hiển thị một hộp thoại cho người dùng.", "B. Hiển thị một thông báo ngắn gọn cho người dùng.", "C. Phát nhạc.", "D. Chụp ảnh màn hình."],
        "answer" => "A"
    ],
    [
        "question" => "Intent Filter được sử dụng để làm gì?",
        "options" => ["A. Lọc các Intent.", "B. Khai báo các Activity có thể xử lý một Intent.", "C. Khởi chạy một Activity.", "D. Lưu trữ dữ liệu."],
        "answer" => "B"
    ],
    [
        "question" => "Serializable là gì?",
        "options" => ["A. Một interface để lưu trữ đối tượng vào bộ nhớ.", "B. Một lớp để lưu trữ dữ liệu.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "Sự khác nhau giữa ListView và RecyclerView là gì?",
        "options" => ["A. RecyclerView hiệu quả hơn ListView khi xử lý danh sách lớn.", "B. RecyclerView hỗ trợ ViewHolder pattern.", "C. RecyclerView linh hoạt hơn ListView trong việc tùy chỉnh layout.", "D. Cả A, B và C."],
        "answer" => "D"
    ],
    [
        "question" => "ViewHolder pattern được sử dụng để làm gì?",
        "options" => ["A. Tối ưu hóa hiệu năng của ListView và RecyclerView.", "B. Lưu trữ dữ liệu.", "C. Xử lý sự kiện.", "D. Tạo giao diện người dùng."],
        "answer" => "A"
    ],
    [
        "question" => "Data Binding là gì?",
        "options" => ["A. Một kỹ thuật để kết nối dữ liệu với giao diện người dùng.", "B. Một cách để lưu trữ dữ liệu.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "MVVM là gì?",
        "options" => ["A. Một kiến trúc phần mềm.", "B. Một ngôn ngữ lập trình.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "Retrofit là gì?",
        "options" => ["A. Một thư viện để thực hiện các request HTTP.", "B. Một hệ quản trị cơ sở dữ liệu.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "Gson là gì?",
        "options" => ["A. Một thư viện để chuyển đổi giữa JSON và Java object.", "B. Một hệ quản trị cơ sở dữ liệu.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "Picasso là gì?",
        "options" => ["A. Một thư viện để tải và hiển thị hình ảnh.", "B. Một hệ quản trị cơ sở dữ liệu.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "Firebase là gì?",
        "options" => ["A. Một nền tảng di động của Google.", "B. Một hệ quản trị cơ sở dữ liệu.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "ConstraintLayout là gì?",
        "options" => ["A. Một layout linh hoạt để sắp xếp các thành phần UI.", "B. Một thành phần UI để hiển thị danh sách.", "C. Một lớp để xử lý sự kiện.", "D. Một kiểu dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "DataBinding giúp giảm thiểu việc viết code ở đâu?",
        "options" => ["A. Trong file XML.", "B. Trong file Java/Kotlin.", "C. Trong file Gradle.", "D. Trong file Manifest."],
        "answer" => "B"
    ],
    [
        "question" => "ViewModel trong kiến trúc MVVM có nhiệm vụ gì?",
        "options" => ["A. Lưu trữ và quản lý dữ liệu cho UI.", "B. Hiển thị giao diện người dùng.", "C. Xử lý sự kiện người dùng.", "D. Tương tác với cơ sở dữ liệu."],
        "answer" => "A"
    ],
    [
        "question" => "LiveData là gì?",
        "options" => ["A. Một lớp để giữ và quan sát dữ liệu.", "B. Một thành phần UI.", "C. Một kiểu dữ liệu.", "D. Một lớp để xử lý sự kiện."],
        "answer" => "A"
    ],
    [
        "question" => "Room là gì?",
        "options" => ["A. Một thư viện để làm việc với cơ sở dữ liệu SQLite.", "B. Một hệ quản trị cơ sở dữ liệu.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "Jetpack Compose là gì?",
        "options" => ["A. Một toolkit để xây dựng giao diện người dùng theo hướng khai báo.", "B. Một ngôn ngữ lập trình.", "C. Một framework.", "D. Một IDE."],
        "answer" => "A"
    ],
    [
        "question" => "Những thành phần nào sau đây có thể được sử dụng để hiển thị danh sách trong Android? (Chọn 2 đáp án)",
        "options" => ["A. TextView", "B. ListView", "C. ImageView", "D. RecyclerView"],
        "answer" => ["B", "D"]
    ],
    [
        "question" => "Những phát biểu nào sau đây đúng về Intent? (Chọn 2 đáp án)",
        "options" => ["A. Intent có thể được sử dụng để truyền dữ liệu giữa các Activity.", "B. Intent chỉ có thể được sử dụng để khởi chạy Activity.", "C. Intent có thể được sử dụng để khởi chạy Service.", "D. Intent không thể chứa dữ liệu."],
        "answer" => ["A", "C"]
    ],
    [
        "question" => "Những phương thức nào sau đây thuộc vòng đời của một Activity? (Chọn 3 đáp án)",
        "options" => ["A. onCreate()", "B. onClick()", "C. onStart()", "D. onResume()", "E. onDestroy()"],
        "answer" => ["A", "C", "D", "E"]
    ],
    [
        "question" => "Những thư viện nào sau đây thường được sử dụng trong lập trình Android? (Chọn 3 đáp án)",
        "options" => ["A. Retrofit", "B. Gson", "C. Picasso", "D. jQuery"],
        "answer" => ["A", "B", "C"]
    ],
    [
        "question" => "Những lợi ích nào khi sử dụng ConstraintLayout? (Chọn 2 đáp án)",
        "options" => ["A. Giúp giảm thiểu việc lồng ghép layout.", "B. Cải thiện hiệu năng của ứng dụng.", "C. Dễ dàng tạo hiệu ứng động.", "D. Giúp code dễ đọc hơn."],
        "answer" => ["A", "B"]
    ],
    [
        "question" => "Những thành phần nào sau đây thuộc kiến trúc MVVM? (Chọn 3 đáp án)",
        "options" => ["A. Model", "B. View", "C. Controller", "D. ViewModel"],
        "answer" => ["A", "B", "D"]
    ],
    [
        "question" => "Những công cụ nào sau đây có thể được sử dụng để debug ứng dụng Android? (Chọn 2 đáp án)",
        "options" => ["A. Android Studio Debugger", "B. Logcat", "C. ADB", "D. Git"],
        "answer" => ["A", "B", "C"]
    ],
    [
        "question" => "Những kỹ thuật nào sau đây giúp tối ưu hóa hiệu năng ứng dụng Android? (Chọn 3 đáp án)",
        "options" => ["A. Sử dụng ViewHolder pattern.", "B. Sử dụng AsyncTask cho các tác vụ chạy nền.", "C. Giảm thiểu việc sử dụng bộ nhớ.", "D. Tối ưu hóa hình ảnh."],
        "answer" => ["A", "B", "C", "D"]
    ],
    [
        "question" => "Những khái niệm nào sau đây liên quan đến việc lưu trữ dữ liệu trong Android? (Chọn 3 đáp án)",
        "options" => ["A. SharedPreferences", "B. SQLite", "C. ContentProvider", "D. Intent"],
        "answer" => ["A", "B", "C"]
    ]
];

// Process form submission
$score = 0;
$totalQuestions = count($questions);
$userAnswers = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($questions as $index => $question) {
        $userAnswer = isset($_POST['question_' . $index]) ? $_POST['question_' . $index] : [];
        
        // Convert user answer to array if it's not already
        if (!is_array($userAnswer)) {
            $userAnswer = [$userAnswer];
        }
        
        $userAnswers[$index] = $userAnswer;
        
        $correctAnswer = $question['answer'];
        if (!is_array($correctAnswer)) {
            $correctAnswer = [$correctAnswer];
        }
        
        // Check if user answers match correct answers (order doesn't matter)
        $correct = true;
        if (count($userAnswer) !== count($correctAnswer)) {
            $correct = false;
        } else {
            foreach ($userAnswer as $answer) {
                if (!in_array($answer, $correctAnswer)) {
                    $correct = false;
                    break;
                }
            }
        }
        
        if ($correct) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Thi Trắc Nghiệm Android</title>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            position: relative;
            overflow: hidden;
        }
        
        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(to right, #667eea, #764ba2);
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 40px;
            font-size: 36px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            position: relative;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #667eea, #764ba2);
            border-radius: 2px;
        }
        
        .question {
            margin-bottom: 30px;
            padding: 25px;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            background-color: #fafafa;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .question:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        
        .question-number {
            position: absolute;
            top: -15px;
            left: -15px;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(0,0,0,0.2);
        }
        
        .question-text {
            font-weight: bold;
            margin-bottom: 20px;
            color: #2c3e50;
            font-size: 18px;
            margin-left: 30px;
        }
        
        .options label {
            display: block;
            margin-bottom: 12px;
            padding: 15px;
            background-color: #fff;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .options label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(to bottom, #667eea, #764ba2);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .options label:hover {
            background-color: #f8f9ff;
            border-color: #667eea;
            transform: translateX(5px);
        }
        
        .options label:hover::before {
            transform: translateX(0);
        }
        
        .options input[type="checkbox"],
        .options input[type="radio"] {
            margin-right: 15px;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        
        .submit-btn {
            display: block;
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            margin-top: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.6);
        }
        
        .submit-btn:active {
            transform: translateY(-1px);
        }
        
        .result {
            text-align: center;
            margin-top: 30px;
            padding: 30px;
            border-radius: 12px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .result h2 {
            color: #2c3e50;
            margin-top: 0;
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .score {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
            padding: 15px;
            border-radius: 8px;
            background: white;
            display: inline-block;
            min-width: 200px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .score-excellent {
            color: #27ae60;
            border-left: 5px solid #27ae60;
        }
        
        .score-good {
            color: #f39c12;
            border-left: 5px solid #f39c12;
        }
        
        .score-poor {
            color: #e74c3c;
            border-left: 5px solid #e74c3c;
        }
        
        .answer-review {
            margin-top: 40px;
            text-align: left;
        }
        
        .answer-review h3 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 25px;
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
        }
        
        .answer-item {
            margin-bottom: 25px;
            padding: 25px;
            border-radius: 12px;
            position: relative;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .answer-item.correct {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border-left: 5px solid #28a745;
        }
        
        .answer-item.incorrect {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            border-left: 5px solid #dc3545;
        }
        
        .answer-item h4 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 18px;
            margin-bottom: 15px;
        }
        
        .answer-options {
            margin-left: 20px;
        }
        
        .answer-option {
            margin-bottom: 8px;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 16px;
        }
        
        .answer-option.user-correct {
            background-color: rgba(40, 167, 69, 0.2);
            color: #155724;
            font-weight: bold;
        }
        
        .answer-option.user-wrong {
            background-color: rgba(220, 53, 69, 0.2);
            color: #721c24;
        }
        
        .answer-option.correct {
            background-color: rgba(40, 167, 69, 0.3);
            color: #155724;
            font-weight: bold;
            border-left: 3px solid #28a745;
        }
        
        .answer-option.normal {
            background-color: rgba(0, 0, 0, 0.05);
            color: #495057;
        }
        
        .restart-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 30px;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
        }
        
        .restart-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(40, 167, 69, 0.6);
        }
        
        .multi-select {
            color: #e67e22;
            font-weight: bold;
            background-color: rgba(230, 126, 34, 0.1);
            padding: 5px 10px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .progress-bar {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 4px;
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(to right, #667eea, #764ba2);
            transition: width 1s ease;
        }
        
        .percentage-text {
            font-size: 20px;
            margin: 15px 0;
            font-weight: bold;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bài Thi Trắc Nghiệm Android</h1>
        
        <?php if ($_SERVER['REQUEST_METHOD'] !== 'POST'): ?>
            <form method="post" action="">
                <?php foreach ($questions as $index => $question): ?>
                    <div class="question">
                        <div class="question-number"><?php echo ($index + 1); ?></div>
                        <div class="question-text">
                            <?php echo $question['question']; ?>
                        </div>
                        <div class="options">
                            <?php 
                            $isMultiSelect = is_array($question['answer']);
                            if ($isMultiSelect) {
                                echo '<p class="multi-select">Câu hỏi này có nhiều đáp án đúng</p>';
                            }
                            
                            foreach ($question['options'] as $optionIndex => $option): 
                                $optionValue = substr($option, 0, 1); // Get A, B, C, D
                            ?>
                                <label>
                                    <input type="<?php echo $isMultiSelect ? 'checkbox' : 'radio'; ?>" 
                                           name="question_<?php echo $index; ?>[]" 
                                           value="<?php echo $optionValue; ?>">
                                    <?php echo $option; ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                
                <button type="submit" class="submit-btn">Nộp bài</button>
            </form>
        <?php else: ?>
            <div class="result">
                <h2>Kết quả bài thi</h2>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: <?php echo round(($score / $totalQuestions) * 100, 2); ?>%"></div>
                </div>
                
                <?php
                $percentage = round(($score / $totalQuestions) * 100, 2);
                $scoreClass = ($percentage >= 80) ? 'score-excellent' : (($percentage >= 50) ? 'score-good' : 'score-poor');
                ?>
                
                <div class="score <?php echo $scoreClass; ?>">
                    Bạn đã trả lời đúng: <?php echo $score; ?>/<?php echo $totalQuestions; ?> câu
                </div>
                <div class="percentage-text <?php echo $scoreClass; ?>">
                    Tỷ lệ đúng: <?php echo $percentage; ?>%
                </div>
                
                <div class="answer-review">
                    <h3>Chi tiết đáp án:</h3>
                    <?php foreach ($questions as $index => $question): ?>
                        <?php
                        $userAnswer = $userAnswers[$index];
                        $correctAnswer = is_array($question['answer']) ? $question['answer'] : [$question['answer']];
                        $isCorrect = (count($userAnswer) === count($correctAnswer)) && 
                                   count(array_intersect($userAnswer, $correctAnswer)) === count($correctAnswer);
                        ?>
                        <div class="answer-item <?php echo $isCorrect ? 'correct' : 'incorrect'; ?>">
                            <h4>Câu <?php echo ($index + 1); ?>: <?php echo $question['question']; ?></h4>
                            <div class="answer-options">
                                <?php foreach ($question['options'] as $optionIndex => $option): 
                                    $optionValue = substr($option, 0, 1); // Get A, B, C, D
                                    $isUserAnswer = in_array($optionValue, $userAnswer);
                                    $isCorrectOption = in_array($optionValue, $correctAnswer);
                                    
                                    if ($isUserAnswer && $isCorrectOption) {
                                        $optionClass = 'user-correct';
                                    } elseif ($isUserAnswer && !$isCorrectOption) {
                                        $optionClass = 'user-wrong';
                                    } elseif ($isCorrectOption) {
                                        $optionClass = 'correct';
                                    } else {
                                        $optionClass = 'normal';
                                    }
                                ?>
                                    <div class="answer-option <?php echo $optionClass; ?>">
                                        <?php 
                                        if ($isUserAnswer && $isCorrectOption) {
                                            echo '✓ ';
                                        } elseif ($isUserAnswer && !$isCorrectOption) {
                                            echo '✗ ';
                                        } elseif ($isCorrectOption) {
                                            echo '★ ';
                                        }
                                        echo $option;
                                        ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <a href="quiz.php" class="restart-btn">Làm lại bài thi</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

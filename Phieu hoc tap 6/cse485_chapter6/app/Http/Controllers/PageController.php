<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;class PageController extends Controller
{
// Sửa phương thức showHomepage() của Chương 6
public function showHomepage()
{
// TODO 7: Thay vì "return 'Chào mừng...'", chúng ta sẽ
// chuẩn bị dữ liệu để truyền cho View
$viewTitle = 'PHT Chương 7 - Blade Template';
$pageTitle = 'Chào mừng bạn đến với Blade!';
$pageDescription = 'Đây là trang chủ được render bằng Blade Template
Engine.';
$tasks = [
'Cài đặt Laravel',
'Hiểu về Routing & Controller',
'Tạo Layout với Blade',
'Truyền dữ liệu cho View'
];

return view('homepage', [
'title' => $viewTitle,
'page_title' => $pageTitle,
'page_description' => $pageDescription,
'tasks' => $tasks
]);

return view('homepage', compact('viewTitle', 'pageTitle',
'pageDescription', 'tasks'));
}
}

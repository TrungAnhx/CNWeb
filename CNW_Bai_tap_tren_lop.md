# Bài tập thực hành trên lớp

## Thông tin sinh viên
- **Họ tên:** Trần Đình Trung
- **MSV:** 2151062886
- **Lớp:** [63CNTT.VA](https://...)

## Nhiệm vụ thực hành
Sử dụng Developer Tools (F12) để autopsy trang web của trường Đại học Thủy Lợi: [https://www.tlu.edu.vn/](https://www.tlu.edu.vn/)

## Các bước thực hiện

### Bước 1: Truy cập trang web
Truy cập vào trang: [https://www.tlu.edu.vn/](https://www.tlu.edu.vn/)

### Bước 2: Mở Developer Tools (F12)
Mở công cụ phát triển của trình duyệt bằng phím F12

### Bước 3: Chuyển sang tab Network
Chuyển đến tab Network để theo dõi các yêu cầu mạng

### Bước 4: Load lại trang
Tải lại trang để bắt đầu ghi lại các yêu cầu mạng

### Bước 5 & 6: Chọn request và xem header
Chọn request đến `tlu.edu.vn` và xem cửa sổ header

## Thông tin Request
1. **Request URL:** https://tlu.edu.vn
2. **Request Method:** GET
3. **Status Code:** 200 OK

---

## Câu hỏi phản biện
Trong Tab Network, mỗi yêu cầu (request) đều trả về một Mã Trạng thái (Status Code) ba chữ số. Giả sử khi người dùng truy cập một trang web, Mã Trạng thái trả về là 404 (Not Found) thay vì 200 (OK). Điều này cho lập trình viên biết chính xác điều gì đã xảy ra, và tại sao việc kiểm tra Mã 404 trong Tab Network lại quan trọng hơn việc chỉ đọc dòng chữ 'Trang không tìm thấy' hiển thị trên giao diện?


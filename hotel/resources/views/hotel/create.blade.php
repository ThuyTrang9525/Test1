<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý phòng</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
      body {
          font-family: Arial, sans-serif;
      }
      .container {
          width: 80%;
          margin: 20px auto;
          border: 2px solid navy;
          padding: 20px;
          border-radius: 5px;
      }
      .header {
          display: flex;
          justify-content: space-between;
          align-items: center;
      }
      .header h2 {
          margin: 0;
      }
      .buttons {
          display: flex;
          gap: 10px;
      }
      .buttons a, .buttons button {
          padding: 10px 15px;
          border: none;
          cursor: pointer;
          font-size: 16px;
          border-radius: 5px;
          text-decoration: none;
          color: white;
      }
      .btn-red {
          background-color: red;
          border: 2px solid blue;
      }
      .btn-orange {
          background-color: orange;
          display: flex;
          align-items: center;
          gap: 5px;
      }
      .form-container {
          margin-top: 20px;
          padding-top: 10px;
          border-top: 2px solid orange;
          display: flex;
          flex-wrap: wrap;
          gap: 10px;
      }
      .form-container input[type="text"],
      .form-container input[type="number"] {
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          flex: 1;
          min-width: 200px;
      }
      .image-upload {
          display: flex;
          align-items: center;
          border: 2px solid orange;
          padding: 10px;
          border-radius: 5px;
          cursor: pointer;
      }
      .image-upload i {
          margin-right: 5px;
      }
      .hidden-file {
          display: none;
      }
  </style>
</head>
<body>
<div class="container">
  <div class="header">
      <h2>Quản lý phòng</h2>
      <div class="buttons">
          <!-- Nút hiển thị danh sách phòng -->
          <a href="{{ route('hotel.index') }}" class="btn-red">Hiển Thị</a>
          <!-- Nút này không cần dùng, vì đây chính là trang thêm mới -->
      </div>
  </div>
  <!-- Form nhập thông tin phòng -->
  <form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-container">
          <input type="text" name="name" placeholder="Tên phòng" required>
          <input type="text" name="description" placeholder="Mô tả phòng">
          <input type="number" name="price" placeholder="Giá phòng" required>
          <!-- Thêm input nhập URL hình ảnh -->
            <div class="mb-3">
                <label for="image_url" class="form-label">URL Hình ảnh</label>
                <input type="text" name="image_url" id="image_url" class="form-control" placeholder="hình ảnh">
            </div>
        </div>
      <div style="margin-top: 20px;">
          <button type="submit" class="btn-orange">
              <i class="fa fa-calendar"></i> Thêm mới phòng
          </button>
      </div>
  </form>
</div>
</body>
</html>

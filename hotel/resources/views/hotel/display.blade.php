<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travelcon Booking</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2 class="text-center">Book đi nào. Mãi bên nhau bạn nhé!</h2>
    <p class="text-center">Top nơi ở sang chảnh đón hè đã sẵn sàng trên Travelcon. Book đi ngay nè.</p>
    <div class="row">
      @if(count($rooms) > 0)
        @foreach($rooms as $room)
          <div class="col-md-3 mb-4">
            <div class="card">
              <!-- Sử dụng URL hình ảnh nhập từ form, nếu không có thì hiển thị ảnh mặc định -->
              <img src="{{ isset($room['image_url']) && $room['image_url'] ? $room['image_url'] : 'default-image_url.jpg' }}" class="card-img-top" alt="{{ $room['name'] }}">
              <div class="card-body text-center">
                <h5 class="card-title">{{ $room['name'] }}</h5>
                <p class="card-text">{{ $room['description'] }}</p>
                <p class="text-danger fw-bold">{{ number_format($room['price'], 0, ',', '.') }} đ</p>
                <p>Còn {{ $room['available'] ?? 30 }} phòng | {{ $room['booked'] ?? 120 }} đã đặt</p>
                <a href="#" class="btn btn-warning w-100">Đặt Ngay ⚡</a>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="col-12">
          <div class="alert alert-info text-center">Chưa có phòng nào được thêm!</div>
        </div>
      @endif
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

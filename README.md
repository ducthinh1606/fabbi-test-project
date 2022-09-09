Tìm hiểu
* Docker: 
  - tạo các môi trường độc lập và tách biệt để khởi chạy và phát triển ứng dụng
  - lợi ích
    + Không như máy ảo Docker start và stop chỉ trong vài giây.
    + Bạn có thể khởi chạy container trên mỗi hệ thống mà bạn muốn.
    + Container có thể build và loại bỏ nhanh hơn máy ảo.
    + Dễ dàng thiết lập môi trường làm việc. Chỉ cần config 1 lần duy nhất và không bao giờ phải cài đặt lại các dependencies. Nếu bạn thay đổi máy hoặc có người mới tham gia vào project thì bạn chỉ cần lấy config đó và đưa cho họ.
    + Nó giữ cho word-space của bạn sạch sẽ hơn khi bạn xóa môi trường mà ảnh hưởng đến các phần khác.

* Repository:
  - tách biệt data access logic và business logic
  - giảm thay đổi code khi phần mềm có thay đổi cấu trúc dữ liệu
  - giúp cho việc truy cập dữ liệu chặt chẽ và bảo mật hơn
  - code dễ đọc hơn, hạn chế các lỗi trong việc truy vấn và lặp code
  - giúp cho việc bảo trì code dễ dàng hơn

Làm được
* Docker
  - Viết 1 docker file và docker-compose cơ bản
  - config nginx
  - xây dựng và sử dụng docker container
  - tạo dự án laravel trên docker
* Repository
  - áp dụng repository pattern vào dự án laravel

Khởi tạo dự án
  - cd src
  - composer install
  - cd ..
  - docker-compose build
  - docker-compose up -d
  - docker exec -it php sh
  - php artisan key:generate
  - cp .env.example .env
  - php artisan migrate
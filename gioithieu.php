<?php 
    session_start();
    if(!isset($_SESSION['user'] )){
        
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/icon(24x24).png">
    <link rel="stylesheet" href="/css/content.css">
    <title>Giới thiệu</title>
</head>
<body>

    <?php
        require "header.php";
    ?>
    
    <div class="content">
        <h1>Giới thiệu</h1> 
        <p><b>staem</b> là website phân phối sản phẩm về Game bản quyền hàng đầu Việt Nam.<p>
        <ul><b>staem</b> có mục tiêu đơn giản như sau:</ul>
        <li>1. Tốc độ nhanh</li>
        <li>2. Bảo hành - Uy tín</li>
        <li>3. Chất lượng dịch vụ</li>

        <p>Vì sao khách hàng chọn <b>staem</b>?</p>
        <p>Hiện nay có rất nhiều đơn vị cung cấp Game. Vậy đâu là lý do các khách hàng lựa chọn <b>staem</b>.</p>
        <h3>1. Uy tín được đặt lên hàng đầu</h3>
        <p><b>staem</b> là một tên tuổi lâu đời trong cộng đồng phân phối sản phẩm về Game bản quyền hàng đầu Việt Nam. Từ những ngày đầu khi các nền tảng cung cấp game bản quyền quốc tế như Steam, Battle.net, Origin bắt đầu được biết tới tại Việt Nam. </p>
        <ul>Trong suốt thời gian hoạt động chúng tôi đã có:</ul>
        <li>7 Năm liền là Shop Game bản quyền uy tín nhất Việt Nam</li>
        <li>Do chính cộng đồng bình chọn từ các group về game bản quyền.</li>
        <li>Hơn 600.000 Khách hàng tin tưởng và mua hàng</li>
        <li>Chúng tôi tự hào mang Game đến cho hơn 800.000 khách hàng tại Việt Nam trong suốt 7 năm hoạt động. </li>
        <li>Hàng tháng website <b>staem</b> chào đón hơn 400.000 lượt truy cập mua hàng.</li>
        <li>Được các Kols, Streamer hàng đầu Việt Nam lựa chọn và quảng bá</li>
        <li>Mixigaming, Trực Tiếp Game, Phê Game, Xemesis, Snake, LongK, Divine Esports, v.v. </li>
        <li>Fanpage với hơn 300.000 người theo dõi</li>
        <li>Chúng tôi xây dựng một cộng đồng lớn mạnh với rất nhiều Fanpage và Group sinh hoạt khác nhau. </li>
        <li>Cùng rất nhiều Fanpage và Group khác mang lại thông tin hữu ích và cơ hội kết nối cho tất cả mọi người.</li>
        <h3>2. Sản phẩm đa dạng </h3>
        <p>Với hàng chục nghìn sản phẩm trên Website <b>staem</b>.vn chúng tôi tự tin mang đến cho bạn tất cả những gì bạn cần trong thế giới bản quyền.</p>
        <ul>Các Game nổi tiếng trên thế giới :</ul>
        <li>Grand Theft Auto V. </li>
        <li>Watch Dogs 2. </li>
        <li>The Witcher 3: Wild Hunt. </li>
        <li>Red Dead Redemption 2. </li>
        <li>Batman: Arkham Knight. </li>
        <li>Just Cause 4. </li>
        <li>No Man's Sky. </li>
        <li>Genshin Impact.</li>
        <li>Counter-Strike: Global Offensive .</li>
        <ul>Các loại thẻ nạp :</ul>
        <li>Steam, Viettel, Mobi, Vinaphone</li>
        <h3>3. Hình thức thanh toán thuận tiện</h3>
        <p>Chúng tôi mạng đến một trải nghiệm thanh toán thuận tiện nhất cho khách hàng.</p>
        <ul>Đa dạng hình thức thanh toán giúp khách hàng dễ dàng lựa chọn :</ul>
        <li>Momo</li>
        <li>QRPay</li>
        <li>Thẻ cào</li>
        <li>ATM</li>
        <p>Hệ thống tự động giúp hoàn thành đơn hàng chỉ trong 3 phút.</p>
        <p>Mọi quy trình thanh toán đều được tự động cao giúp khách hàng có thể hoàn thành đơn hàng chỉ trong 1 phút. </p>
        <h3>4. Chế độ bảo hành và hỗ trợ.</h3>
        <p>Cam kết bảo hành 100%</p>
        <p>Divine cam kết bảo hành với mọi sản phẩm. Thông tin bảo hành từng sản phẩm đều được ghi chi tiết theo từng loại sản phẩm.</p>
        <p>Trong suốt thời gian sử dụng sản phẩm. Bạn sẽ nhận được sự hỗ trợ từ đội ngũ tư vấn của chúng tôi hoàn toàn miễn phí.</p>
        <p>Hỗ trợ tất cả các ngày trong năm</p>
        <p>Chúng tôi Online liên tục từ 08:00 đến 24:00, tất cả các ngày trong năm kể cả lễ, Tết.</p>
        <p>Chúng tôi tự hào với thời gian phản hồi khách hàng trung bình là 2 Phút. </p>
        <p>Đội ngũ tư vấn nhiều kinh nghiệm</p>
        <p>Đội ngũ tư vấn với nhiều năm kinh nghiệm sẽ giải đáp cho bạn tất cả các thắc mắc trong quá trình mua hàng và cài đặt sản phẩm. </p>
        <p>Với những trường hợp khó xử lý. Chúng tôi sẽ Teamview trực tiếp để cài đặt giúp bạn. </p>
        <h3>5. Giá cả và ưu đãi</h3>
        <p>Chúng tôi đem đến cho khách hàng những sản phẩm với giá cả tốt nhất cùng với đó là những ưu đãi vô cùng hấp dẫn.</p>
        <p>Hệ thống mã giảm giá</p>
        <p>Hệ thống mã giảm giá được phát thường xuyên trong các sự kiện của <b>staem</b> hoặc từ các Streamer </p>
        <p>Hệ thống khách hàng VIP </p>
        <ul>Khách hàng thân thiết của Divine sẽ nhận được những ưu đãi vô cùng hấp dẫn như:</ul>
        <li>- Hoàn tiền sau khi mua hàng</li>
        <li>- Ưu tiên thanh toán</li>
        <li>- Số điện thoại hỗ trợ riêng</li>
        Xem thêm chi tiết tại: ​
        <p>Các thông tin liên hệ với <b>staem</b></p>
        <li>Email: hotrostaem@gmail.com</li>
        <li>Hotline: 1900 6666 000</li>
    </div>

    <?php
        require "footer.php";
    ?>
</body>
</html>
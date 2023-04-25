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
    <title>Chính sách bảo mật</title>
    
</head>
<body>
    
    <?php
        require "header.php";
    ?>
    <div class="content">
        <h1>Chính sách bảo mật</h1>
        <h3>1. Mục đích và phạm vi thu thập</h3>
        <p>Việc thu thập dữ liệu chủ yếu trên <b>staem</b> bao gồm: email , mật khẩu. Đây là các thông tin mà <b>staem</b> cần Khách hàng cung cấp bắt buộc khi đăng ký sử dụng dịch vụ và <b>staem</b> sử dụng nhằm liên hệ xác nhận khi Khách hàng đăng ký sử dụng dịch vụ trên <b>staem</b>, đảm bảo quyền lợi cho Khách hàng.
        Các Khách hàng sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới tên đăng ký, mật khẩu và hộp thư điện tử của mình. Ngoài ra, Khách hàng có trách nhiệm thông báo kịp thời cho <b>staem</b> về những hành vi sử dụng trái phép, lạm dụng, vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có biện pháp giải quyết phù hợp.</p>
        <h3>2. Phạm vi sử dụng thông tin</h3>
        <p><b>staem</b> sử dụng thông tin Khách hàng cung cấp để:
        Cung cấp các dịch vụ đến Khách hàng.
        Gửi các thông báo về các hoạt động trao đổi thông tin giữa Khách hàng và <b>staem</b>.
        Ngăn ngừa các hoạt động phá hủy tài khoản người dùng của Khách hàng hoặc các hoạt động giả mạo Khách hàng.
        Liên lạc và giải quyết với khách hàng trong những trường hợp đặc biệt.
        Không sử dụng thông tin cá nhân của Khách hàng ngoài mục đích xác nhận và liên hệ có liên quan đến giao dịch tại <b>staem</b>.
        <b>staem</b> có trách nhiệm hợp tác cung cấp thông tin cá nhân Khách hàng khi có yêu cầu từ cơ quan nhà nước có thẩm quyền.</p>
        <h3>3. Thời gian lưu trữ thông tin</h3>
        <p>Dữ liệu cá nhân của Khách hàng sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự Khách hàng đăng nhập và thực hiện hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân Khách hàng sẽ được bảo mật trên máy chủ của <b>staem</b>.</p>
        <h3>4. Địa chỉ của đơn vị thu thập, quản lý thông tin và hỗ trợ Khách hàng</h3>
        <p>
        <b>staem</b>
        Trụ sở chính: Hồ Chí Minh , Việt Nam
        Email: hotrostaem@gmail.com</p>
        <h3>5. Phương tiện và công cụ để Khách hàng tiếp cận, chỉnh sửa và xoá dữ liệu của mình</h3>
        <p>Khách hàng có quyền tự kiểm tra, cập nhật, điều chỉnh thông tin cá nhân của mình bằng cách đăng nhập vào tài khoản chỉnh sửa và xoá thông tin cá nhân hoặc yêu cầu <b>staem</b> thực hiện việc này.
        Khách hàng có quyền gửi khiếu nại về việc lộ thông tin các nhân cho bên thứ ba đến Ban quản trị của <b>staem</b>. Khi tiếp nhận những phản hồi này, <b>staem</b> sẽ xác nhận lại thông tin, phải có trách nhiệm trả lời lý do và hướng dẫn Khách hàng khôi phục và bảo mật lại thông tin.</p>
        <h3>6. Cam kết bảo mật thông tin cá nhân Khách hàng</h3>
        <p>Thông tin cá nhân của Khách hàng trên <b>staem</b> được <b>staem</b> cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân của <b>staem</b>. Việc thu thập và sử dụng thông tin của mỗi Khách hàng chỉ được thực hiện khi có sự đồng ý của Khách hàng đó, trừ những trường hợp pháp luật có quy định khác. <b>staem</b> cam kết:
        Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ ba nào về thông tin cá nhân của Khách hàng khi không có sự cho phép hoặc đồng ý từ Khách hàng, trừ những trường hợp pháp luật có quy định khác.
        Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân Khách hàng, <b>staem</b> sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho Khách hàng được biết.
        Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của Khách hàng bao gồm thông tin hóa đơn, chứng từ kế toán số hóa tại khu vực dữ liệu trung tâm an toàn cấp 1 của <b>staem</b>.</p>
    </div>
    <?php
        require "footer.php";
    ?>
</body>
</html>
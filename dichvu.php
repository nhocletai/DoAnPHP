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
    <title>Dịch vụ</title>
</head>
<body>
    
    <?php
        require "header.php";
    ?>
    <div class="content">
        <h1>Điều khoản dịch vụ</h1>
        <h3>1. Giới thiệu</h3> 
        Chào mừng quý khách hàng đến với <b>staem</b>.
        Chúng tôi là <b>staem</b> -  Trực thuộc thương hiệu <b>staem</b> có địa chỉ trụ sở tại  Hồ Chí Minh, Việt Nam. 
        Trang chủ: ​
        Khi quý khách hàng truy cập và sử dụng dịch vụ trên trang website của chúng tôi nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.
        Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi. 
        <h3>2. Hướng dẫn sử dụng website</h3>
        Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.
        Chúng tôi sẽ cấp một tài khoản (Account) sử dụng để khách hàng có thể mua sắm trên website <b>staem</b> trong khuôn khổ Điều khoản và Điều kiện sử dụng đã đề ra.
        Quý khách hàng sẽ phải đăng ký tài khoản với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách hàng phải thông báo cho chúng tôi biết khi tài khoản bị truy cập trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định hoặc bất cứ lý do cá nhân nào.
        Nghiêm cấm sử dụng bất kỳ phần nào của trang web này với mục đích thương mại hoặc nhân danh bất kỳ đối tác thứ ba nào nếu không được chúng tôi cho phép bằng văn bản. Nếu vi phạm bất cứ điều nào trong đây, chúng tôi sẽ hủy tài khoản của khách mà không cần báo trước, số Dcoin trong tài khoản cũng sẽ được niêm phong vĩnh viễn.
        Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo và thông báo thông tin đơn hàng từ website. 
        <h3>3. Ý kiến của khách hàng</h3>
        Tất cả nội dung trang web và ý kiến phê bình của quý khách đều là tài sản của chúng tôi. Nếu chúng tôi phát hiện bất kỳ thông tin giả mạo nào, chúng tôi sẽ khóa tài khoản của quý khách ngay lập tức hoặc áp dụng các biện pháp khác theo quy định của pháp luật Việt Nam.
        <h3>4. Chấp nhận đơn hàng và giá cả</h3>
        Chúng tôi có quyền từ chối hoặc hủy đơn hàng của quý khách vì bất kỳ lý do gì liên quan đến lỗi kỹ thuật, hệ thống một cách khách quan vào bất kỳ lúc nào.
        Ngoài ra, để đảm bảo tính công bằng cho khách hàng là người tiêu dùng cuối cùng của <b>staem</b>, chúng tôi cũng sẽ từ chối các đơn hàng không nhằm mục đích sử dụng cho cá nhân, mua hàng số lượng nhiều hoặc với mục đích mua đi bán lại mà không nằm trong phạm vi được <b>staem</b> cho phép hoặc cấp phép.
        Chúng tôi cam kết sẽ cung cấp thông tin giá cả chính xác nhất cho người tiêu dùng. Tuy nhiên, đôi lúc vẫn có sai sót xảy ra, ví dụ như trường hợp giá sản phẩm không hiển thị chính xác trên trang web hoặc sai giá, tùy theo từng trường hợp chúng tôi sẽ liên hệ hướng dẫn hoặc thông báo hủy đơn hàng đó cho quý khách. Chúng tôi cũng có quyền từ chối hoặc hủy bỏ bất kỳ đơn hàng nào dù đơn hàng đó đã hay chưa được xác nhận hoặc đã thanh toán.
        <h3>5. Giải quyết hậu quả do lỗi nhập sai thông tin tại <b>staem</b></h3>
        Khách hàng có trách nhiệm cung cấp thông tin đầy đủ và chính xác khi tham gia giao dịch tại <b>staem</b>. Trong trường hợp khách hàng nhập sai thông tin và gửi vào trang TMĐT <b>staem</b>, <b>staem</b> có quyền từ chối thực hiện giao dịch. 
        Trong trường hợp sai thông tin phát sinh từ phía <b>staem</b> mà <b>staem</b> có thể chứng minh đó là lỗi của hệ thống hoặc từ bên thứ ba (sai giá sản phẩm, sai xuất xứ, …), <b>staem</b> sẽ đền bù cho khách hàng một mã giảm giá cho các lần mua sắm tiếp theo với mệnh giá tùy từng trường hợp cụ thể và có quyền không thực hiện giao dịch bị lỗi.
        <h3>6. Quyền pháp lý</h3>
        Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh từ luật pháp Việt Nam và Tòa án có thẩm quyền tại Việt Nam sẽ giải quyết bất kỳ tranh chấp nào phát sinh từ việc sử dụng trái phép trang web này.
        <h3>7. Quy định về bảo mật</h3>
        Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin và việc thanh toán của quý khách. Thông tin của quý khách trong quá trình thanh toán sẽ được mã hóa để đảm bảo an toàn. Sau khi quý khách hoàn thành quá trình đặt hàng, quý khách sẽ thoát khỏi chế độ an toàn.
        Quý khách không được sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Trang web cũng nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống. Cá nhân hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.
        Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu.
        <h3>8. Thanh toán an toàn và tiện lợi tại <b>staem</b></h3>
        Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:
        <ul>Cách 1: Thanh toán trực tiếp </ul>
        <li>Bước 1: Người mua đến địa chỉ đại lý</li>
        <li>Bước 2: Người mua thanh toán và nhận hàng qua email của mình;</li>
        ​
        <ul>Cách 2: Thanh toán online qua thẻ tín dụng, chuyển khoản</ul>
        <li>Bước 1: Người mua thanh toán đơn hàng trên web <b>staem</b> </li>
        <li>Bước 2: Nhận hàng thông qua email đã đăng ký</li>
        ​
        <h3>9. Đảm bảo an toàn giao dịch tại <b>staem</b></h3>
        Chúng tôi sử dụng các dịch vụ để bảo vệ thông tin về nội dung mà người bán đăng sản phẩm trên <b>staem</b>. Để đảm bảo các giao dịch được tiến hành thành công, hạn chế tối đa rủi ro có thể phát sinh.

        <h2>NHỮNG THÔNG TIN QUAN TRỌNG</h2>
        <p><b>A. Đổi mã hàng mới đối với các sản phẩm lỗi: không nhập được mã hàng, sai mã hàng.</b></p>
        <p><b>B. Bảo hành đến 3 tháng cho các sản phẩm. (*)</b></p>
        <p><b>C. Hoàn tiền đơn hàng đã mua trên <b>staem</b> nếu sản phẩm lỗi và không thể khắc phục. (**)</b></p>
        <p><b>D. Dcoin chỉ có tác dụng duy nhất là mua hàng tại <b>staem</b>, sau khi được nạp sẽ không có giá trị quy đổi thành tiền mặt với bất cứ mọi lý do nào.</b></p>
        <p><b>F. Mọi hành vi dùng Dcoin sai mục đích đều được xem là vi phạm nghiêm trọng đến điều khoản và chính sách của <b>staem</b>. <b>staem</b> có quyền khóa vĩnh viễn tài khoản cũng như số Dcoin trong tài khoản.</b></p>
        <p><b>G. Khách hàng có trách nhiệm thông báo và hợp tác hoàn trả tài sản của <b>staem</b> khi có phát sinh lỗi hệ thống hoặc bất cứ sự cố nào. </b></p>
        <p><b>H. Tài khoản <b>staem</b> không được sử dụng cho bất kì hình thức trung gian mua bán/trao đổi nào. Nếu phát hiện, <b>staem</b> có quyền khóa tài khoản và số Dcoin đó vĩnh viễn mà không cần thông báo.</b></p>
        <p><b>I. “We reserve the right to refuse service to anyone”
        Chúng tôi có quyền từ chối phục vụ cho bất cứ ai - người mà chúng tôi thấy rằng họ không phải là một người khách hàng lịch sự và nghĩ rằng họ có thể làm ảnh hưởng đến những khách hàng thật sự của chúng tôi.</b></p>
        <p><b>J. Khi khách hàng không thực hiện theo điều khoản và chính sách của <b>staem</b>, chúng tôi có quyền xử lý các trường hợp theo quy định. Các trường hợp mà trong quy định không nêu ra nhưng gây ảnh hưởng <b>staem</b> sẽ do <b>staem</b> quyết định. Mọi trường hợp đều không cần thông báo. </b></p>
        <p><b>K. Quyết định của <b>staem</b> là quyết định cuối cùng.</b></p>
    </div>
    <?php
        require "footer.php";
    ?>
</body>
</html>
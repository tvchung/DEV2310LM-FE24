@extends('landing_master')
@section('title',$lp->title." | DEVMASTER")
@section('description',$lp->description.', Đào tạo lập trình viên chuyên nghiệp - php - .net - java - android - ios - c - C++,C#, Tư vấn thiết kế và xậy dựng phần mềm, thiết kế website')
@section('keywords',$lp->keyword.', Lập trình, lap trinh, học lập trình, hoc lap trinh, Lập trình web, lap trinh web, lập trình web php, lap trinh web php, học android, hoc android, lập trình di động, lap trinh di dong, lập trình web mã nguồn mở với php framework, php framework, lập trình game, lap trinh game, lập trình apps, lap trình apps, học php và mysql, hoc php va mysql,  asp.net mvc, học asp.net mvc5, hoc asp.net mvc5, asp.net mvc entity framework, java framework spring,  java web')
@push('scripts_css')
<meta property="og:url" content="http://devmaster.edu.vn/Lap-trinh-web-ma-nguon-mo-php-mysql-devmaster-phpsql.html" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$lp->title}}" />
<meta property="og:image" content="http://devmaster.edu.vn/landing_page/php/devmaster-banner-php.jpg" />
<meta property="og:description" content="{{$lp->description}}" />
<link rel="stylesheet" href="/landing_page/main.css">
@endpush
@section('banner','/landing_page/php/devmaster-banner-php.jpg')
@section('course_name',$lp->title)
@section('course_duration',$lp->duration)
@section('course_link','http://devmaster.edu.vn/Lap-trinh-web-ma-nguon-mo-php-mysql-devmaster-phpsql.html')

@section('course_object')
		<h3 class="course_title text-title">ĐỐI TƯỢNG</h3>
		<ul class="list">
			<li>Những bạn chưa có kiến thức chuyên môn có mong muốn và định hướng theo học Lập trình</li>
			<li>Sinh viên Công nghệ thông tin cần chuẩn hóa và cập nhật kiến thức mới nhất.</li>
			<li>Những người đã và đang làm việc trong lĩnh vực CNTT, quan tâm và mong muốn học thiết kế web PHP Hà Nội.
</li>
		</ul>
@endsection
@section('course_target')
		<h3 class="text-title course_title">MỤC TIÊU KHÓA HỌC</h3>
		<p style="margin-left: 1em">Tại Hà Nội khi tham gia khóa học lập trình PHP tại Hà Nội của Devmaster, học viên sẽ được:</p>
		<ul class="list">
			<li>Cung cấp kỹ năng thiết kế giao diện website chuyên nghiệp. </li>
<li>Cung cấp kỹ năng phân tích, thiết kế và xây dựng ứng dụng trên nền tảng web với ngôn ngữ lập trình PHP từ cơ bản đến nâng cao. </li>
<li>Cung cấp các kỹ thuật lập trình hiệu quả, kiến thức cơ bản sử dụng Framework với PHP để tạo các website tin tức, thương mại điện tử, blogs… </li>
<li>Biết cách tự triển khai ứng dụng trên hosting. </li>
<li>Được giảng viên chia sẻ kinh nghiệm thực tế trong thiết kế và lập trình web. </li>
		</ul>
{{-- 
		<ul class="list">
			<li>Cung cấp cho học viên kỹ năng thiết kế giao diện website chuyên nghiệp</li>
			<li>Cung cấp Kỹ năng phân tích, thiết kế, xây dựng ứng dụng trên nền tảng web với ngôn ngữ lập trình PHP.</li>
			<li>Cung cấp các kỹ thuật lập trình hiệu quả, kiến thức cơ bản sử dụng Framework với PHP để tạo các website tin tức, thương mại điện tử, blogs…</li>
			<li>Sau khóa học, học viên biết tự triển khai ứng dụng lên hosting.</li>
			<li>Chia sẻ những kinh nghiệm trong thiết kế và lập trình Web từ Giảng viên. </li>
		</ul> --}}
@endsection


@section('course_produce')
<p>Không chỉ ở Việt Nam mà ngay trên toàn thế giới hiện nay, <strong>học lập trình web</strong> đang ngày càng trở nên phổ biến và song song với đó, việc sử dụng một nền tảng để phát triển các ứng dụng web luôn là nhu cầu cấp thiết. Lúc này sự kết hợp giữa <strong>PHP và MySQL</strong> chính là lựa chọn lý tưởng nhất cho nền tảng đó.
										</p>
										<p>Chính vì vậy nhu cầu <strong>học lập trình web PHP và MySQL</strong> trở nên đình đám và chưa hề có dấu hiệu giảm sức nóng trong ngành công nghệ thông tin hiện nay.
Hơn nữa tại Việt Nam, đa số các dự án <strong>lập trình web</strong> đều sử dụng ngôn ngữ PHP nên việc thành thạo ngôn ngữ này sẽ tạo cơ hội việc làm rất lớn.
Vậy làm thế nào để trở thành lập trình viên chuyên nghiệp trên nền tảng ngôn ngữ PHP hay <strong>học lập trình PHP ở đâu tốt nhất?</strong>
</p>
<p>Devmaster là một trong những trung tâm đào tạo PHP được tin chọn hàng đầu hiện nay với các <strong>khóa học lập trình web PHP và MySQL chuyên nghiệp</strong> từ các giảng viên là chuyên gia hàng đầu về công nghệ thông tin tại Việt Nam. Khi nói đến vấn đề học PHP ở đâu, học <strong>lập trình PHP</strong> ở đâu thì Devmaster luôn nằm trong danh sách những trung tâm được tin chọn nhất!</p>
@endsection
@section('course_content')
			<h3 class="course_title">NỘI DUNG KHÓA HỌC</h3>
<section id="noi-dung" class="noi-dung-hoc">
    <div class="container">
    	<div class="row">
    		 
            <div class="col-md-6 col-md-push-3 hoc-phan">
               <h5>PHẦN 1 (WHCJ): LẬP TRÌNH WEB (FrontEnd)</h5>
            	<hr class="uk-divider-icon">

            </div>
    	</div>
        <div class="row item-noi-dung">

            <div class="col-md-6">
                <ul class="list">
                    <li> Tổng quan về ngôn ngữ lập trình Web</li>
                    <li> Ngôn ngữ đánh dấu văn bản HTML, HTML5</li>
                    <li> Table và form trong HTML, HTML5</li>
                    <li> Các thẻ bố cục nội dung trong HTML5</li>
                    <li> CSS và CSS3 cơ bản</li>
                    <li> CSS, CSS3 các tính năng nâng cao</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list">
                    <li> Sử dụng javascript trong trang web</li>
                    <li> Đối tượng và xử lý sự kiện trong javascript</li>
                    <li> JQUERY, AJAX, và các hiệu ứng</li>
                    <li> Sử dụng bootstrap trong thiết kế giao diện web</li>
                    <li> Photoshop trong lập trình Web</li>
                    <li> Cắt ghép giao diện Web</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="noi-dung-desc" class="noi-dung-desc">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="100%" class="text-center"><h5> Nội dung chi tiết</h5></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <h5>Tổng quan về ngôn ngữ lập trình Web</h5>
                                <ul class="list">
                                    <li> Môi trường tạo trang web</li>
                                    <li> Web tĩnh và web động</li>
                                    <li> Công nghệ lập trình web</li>
                                    <li> HTML5 và CSS3</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Ngôn ngữ đánh dấu văn bản HTML, HTML5</h5>
                                <ul class="list">
                                    <li> HTML và cấu trúc của trang HTML</li>
                                    <li> Thẻ xác định khai báo thông tin cho trang web &lt;head&gt;</li>
                                    <li> Thẻ xác định tiêu đề cho trang web &lt;title&gt;</li>
                                    <li> Thẻ meta xác định siêu dữ liệu &lt;meta /&gt;</li>
                                    <li> Thẻ xác định phần thân (nội dung) trang web&lt;body&gt;</li>
                                    <li> Một số các thẻ cơ bản trong HTML, HTML5</li>
                                    <li><strong>Thực hành:</strong> Sử dụng công cụ Adobe Dreamweaver CS5, PHP Designer, SublineText.. để tạo ứng dụng web</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Table và form trong HTML, HTML5</h5>
                                <ul class="list">
                                    <li> Thẻ tạo bảng biểu (Table)</li>
                                    <li> Biểu mẫu nhập dữ liệu (Form)</li>
                                    <li> Các phần tử trong biểu mẫu của HTML</li>
                                    <li> Các phần tử mới trong biểu mẫu của HTML5</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Các thẻ bố cục nội dung trong HTML5</h5>
                                <ul class="list">
                                    <li> Các thẻ &lt;div&gt; &lt;lable&gt; &lt;span&gt; &lt;detail&gt; &lt;summary&gt;….</li>
                                    <li> Các thẻ &lt;header&gt; &lt;nav&gt; &lt;session&gt; &lt;acticle&gt; &lt;aside&gt;</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>CSS và CSS3 cơ bản</h5>
                                <ul class="list">
                                    <li> Tổng quan về CSS và CSS3</li>
                                    <li> Tương tác giữa CSS và HTML</li>
                                    <li> Cú pháp của CSS, CSS3</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>CSS, CSS3 các tính năng nâng cao</h5>
                                <ul class="list">
                                    <li> Các bộ chọn, bộ chọn thuộc tính,..</li>
                                    <li> Sử dụng CSS, CSS3 trình bày giao diện web</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Sử dụng javascript trong trang web</h5>
                                <ul class="list">
                                    <li> Cách sử dụng javascript</li>
                                    <li> Nhúng javascript vào trang HTML</li>
                                    <li> Khai báo biến trong javascript</li>
                                    <li> Hàm alert(), confirm() , prompt()</li>
                                    <li> Các toán tử trong javascript</li>
                                    <li> Lệnh rẽ nhánh trong javascript</li>
                                    <li> Vòng lặp trong javascript</li>
                                    <li> Mảng trong javascript</li>
                                    <li> Hàm trong javascript</li>
                                    <li> Chuỗi trong javascript</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="100%" class="text-center"><h5> Nội dung chi tiết</h5></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <h5>Đối tượng và xử lý sự kiện trong javascript</h5>
                                <ul class="list">
                                    <li> Làm việc với các đối tượng cơ bản</li>
                                    <li> Sử dụng các thuộc tính và phương thức</li>
                                    <li> Làm việc với các sự kiện phổ biến trong Javascript</li>
                                    <li> Làm việc với các đối tượng của trình duyệt</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>JQUERY, AJAX, và các hiệu ứng</h5>
                                <ul class="list">
                                    <li> Tổng quan về JQuery</li>
                                    <li> Cách sử dụng JQuery</li>
                                    <li> Truy xuất các phần tử CSS qua JQuery Selector</li>
                                    <li> Các sự kiện với JQuery</li>
                                    <li> Gắn kết các sự kiện</li>
                                    <li> Các hiệu ứng với JQuery</li>
                                    <li> Sử dụng cú pháp jQuery để viết các xử lý trên trang web, nhằm tạo hiệu suất nhanh hơn.</li>
                                    <li> Sử dụng thêm một số plugin JQuery hỗ trợ như JQuery Validation</li>
                                    <li> Cài đặt các jQuery Plugin nhằm làm cho trang web sống động và có giao diện chuyên nghiệp hơn</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Sử dụng bootstrap trong thiết kế giao diện web</h5>
                                <ul class="list">
                                    <li> Giới thiệu về bootstrap, bootstrap 3</li>
                                    <li> Tải và nhúng bootstrap vào trang web</li>
                                    <li> Sử dụng Bootstrap Grid</li>
                                    <li> Sử dụng Bootstrap CSS</li>
                                    <li> Bootstrap components</li>
                                    <li> Bootstrap Typography</li>
                                    <li> Bootstrap Tables</li>
                                    <li> Bootstrap Forms</li>
                                    <li> Sử dụng các thành phần trong Bootstrap Forms</li>
                                    <li> Bootstrap Images</li>
                                    <li> Bootstrap Responsive Utilities</li>
                                    <li> Bootstrap Glyphicons</li>
                                    <li> Bootstrap Navigation Elements</li>
                                    <li> Bootstrap Pagination, Thumbnails, ….</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Photoshop trong lập trình Web</h5>
                                <ul class="list">
                                    <li> Các thao tác cơ bản trong Photoshop</li>
                                    <li> Các thao tác với vùng chọn, cắt HTML ,…</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Cắt ghép giao diện Web</h5>
                                <ul class="list">
                                    <li> Chuyển từ file thiết kế Photoshop (*.psd) sang giao diện Web với (HTML5, CSS3, Jquery, Bootstrap,…)</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="noi-dung" class="noi-dung-hoc">
    <div class="container">
        <div class="row item-noi-dung">
          
		<div class="row">
			
            <div class="col-md-6 col-md-push-3 hoc-phan">
               <h5>
                    PHẦN 2 (PSQL): LẬP TRÌNH WEB VỚI PHP&amp;MYSQL
                </h5>
            	<hr class="uk-divider-icon">

            </div>
		</div>
            <div class="col-md-6">
                <ul class="list">
                    <li> Ngôn ngữ lập trình PHP</li>
                    <li> Một số các kỹ thuật cơ bản</li>
                    <li> Hệ quản trị cơ sở dữ liệu (MySQL)</li>
                    <li> Lập trình PHP kết nối CSDL</li>
                    <li> Lập trình hướng đối tượng trong PHP</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list">
                    <li> Lập trình PHP kết nối MySQL và sử dụng các thư viện</li>
                    <li> Giới thiệu mô hình MVC</li>
                    <li> Một số kỹ thuật nâng cao</li>
                    <li> PHP Framework và CMS</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="noi-dung-desc" class="noi-dung-desc">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="100%" class="text-center"><h5> Nội dung chi tiết</h5></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <h5>Ngôn ngữ lập trình PHP</h5>
                                <ul class="list">
                                    <li> Cài đặt (APACHE, PHP, MYSQL)</li>
                                    <li> Kịch bản PHP (script), cú pháp của ngôn ngữ</li>
                                    <li> Xử lý Form trong PHP (POST, GET,..)</li>
                                    <li> Biến, hằng số, kiểu dữ liệu,…</li>
                                    <li> Các cấu trúc điều khiển: if, switch, for, while,…</li>
                                    <li> Mảng và các thao tác xử lý mảng.</li>
                                    <li> Khái niệm về hàm, tạo và sử dụng hàm</li>
                                    <li> Sử dụng các hàm include, require,..</li>
                                    <li> Các đối tượng Session, Cookie trong PHP</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Một số các kỹ thuật cơ bản</h5>
                                <ul class="list">

                                    <li> Làm việc với File và Upload file</li>
                                    <li> Xử lý Email với thư viện PHPMailer và các ngoại lệ</li>
                                    <li> Kỹ thuật rewriteUrl</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Hệ quản trị cơ sở dữ liệu (MySQL)</h5>
                                <ul class="list">
                                    <li> Khái niệm, kiểu dữ liệu,…</li>
                                    <li> Các đối tượng cơ sở dữ liệu</li>
                                    <li> Các câu lệnh thao tác dữ liệu(Select, insert, update, delete,…)</li>
                                    <li> Sao lưu, phục hồi cơ sở dữ liệu (Backup, Restore)</li>
                                    <li> Công cụ MySQL Workbench, Navicat,..</li>
                                    <li> Xây dựng cơ sở dữ liệu: Tin tức, Giới thiệu và mua/bán sản phẩm trực tuyến</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Lập trình PHP kết nối CSDL</h5>
                                <ul class="list">
                                    <li> Kết nối từ PHP đến MySQL</li>
                                    <li> Các hàm truy cập dữ liệu thông thường</li>
                                    <li> Thực thi các câu lệnh T-SQL (Select, Insert, Update, Delete,..)</li>
                                    <li> Trình bày dữ liệu từ MySQL trên trang PHP</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Lập trình hướng đối tượng trong PHP</h5>
                                <ul class="list">
                                    <li> Đối tượng (Object) và lớp (Class)</li>
                                    <li> Thuộc tính (Properties) và phương thức (Method)</li>
                                    <li>
                                        - Magic Method trong PHP
                                        <ul class="list">
                                            <li>Hàm __construct()</li>
                                            <li>Hàm __destruct()</li>
                                            <li>Hàm __toString()</li>
                                            <li>Hàm clone(); __sleep() ; __wakeup</li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="100%" class="text-center"><h5> Nội dung chi tiết</h5></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <ul class="list">
                                    <li> Tính kế thừa (extends) và viết đè (overwrite)</li>
                                    <li> Các bổ từ truy cập (public – protected – private)</li>
                                    <li> Self &amp; Parent</li>
                                    <li> Static, Constant, Final Method</li>
                                    <li> Abstract class</li>
                                    <li> Interfaces</li>
                                    <li> __set() &amp; __get() method</li>
                                    <li> Serialization</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Lập trình PHP kết nối MySQL và sử dụng các thư viện</h5>
                                <ul class="list">
                                    <li> Sử dụng thư viện PDO (PHP Data Object)</li>
                                    <li> CRUD: Create – Read – Update – Delete</li>
                                    <li> Thực thi các câu lệnh SQL sử dụng PDO</li>
                                    <li>
                                        <ul class="list">
                                            <li>+ Hiển thị danh sách</li>
                                            <li>+ Thêm/sửa/Xóa </li>
                                        </ul>
                                    </li>
                                    <li> Sử dụng một số Template Engine</li>
                                    <li><strong>Áp dụng với dự án:</strong> Tin tức, giới thiệu và mua/bán sản phẩm trực tuyến</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Giới thiệu mô hình MVC</h5>
                                <ul class="list">
                                    <li> Mô hình MVC</li>
                                    <li> Model, View, Controller</li>
                                    <li> Ưu , nhược điểm của mô hình MVC</li>
                                    <li> Luồng xử lý trong mô hình MVC</li>
                                    <li> Thực hành với mô hình MVC</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>Một số kỹ thuật nâng cao</h5>
                                <ul class="list">
                                    <li> Thiết kế giỏ hàng</li>
                                    <li> Tích hợp công cụ thanh toán trực tuyến (VD: nganluong.vn)</li>
                                    <li> Nhúng mạng xã hội: Google Map, Google plus, Facebook,..</li>
                                    <li> Hỗ trợ trực tuyến: skyper, yahoo,….</li>
                                    <li> Công cụ quản lý mã nguồn: Git/SVN</li>
                                    <li> AJAX trong ngôn ngữ PHP</li>
                                    <li> Tăng tốc website bằng kỹ thuật Cache</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <h5>PHP Framework và CMS</h5>
                                <ul class="list">
                                    <li> Các Framework, CMS phổ biến: Zend, CakePHP, CodeIgniter,  WordPress, Durpal, Joomla, …</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<section id="noi-dung" class="noi-dung-hoc">
    <div class="container">
    	<div class="row">
    		
            <div class="col-md-6 col-md-push-3 hoc-phan">
               <h5>
                    PHẦN 3: DỰ ÁN CUỐI KHÓA, XÂY DỰNG DỰ ÁN THỰC THẾ (CUỐI KHÓA)
                </h5>
            	<hr class="uk-divider-icon">

            </div>
    	</div>
        <div class="row item-noi-dung">

            <div class="col-md-6">
                <ul class="list">
                    <li> Xây dựng trang quản trị (BackEnd)</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list">
                    <li> Xây dựng trang người dùng (FrontEnd)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="noi-dung-desc" class="noi-dung-desc">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="100%" class="text-center"><h5> Nội dung chi tiết</h5></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <h5>Xây dựng trang quản trị (BackEnd)</h5>
                                <ul class="list">
                                    <li> Trang xử lý đăng nhập, đăng xuất</li>
                                    <li> Trang quản trị</li>
                                    <li> Xử lý các trang quản lý danh mục</li>
                                    <li> Xử lý các trang quản lý khách hàng</li>
                                    <li> Xử lý các trang quản trị đơn hàng</li>
                                    <li> Xử lý thống kê (Sản phẩm, khách hàng, đơn hàng,..)</li>
                                    <li> Xử lý các trang quản lý bình luận, đánh giá,</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="100%" class="text-center"><h5> Nội dung chi tiết</h5></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <h5>Xây dựng trang người dùng (FrontEnd)</h5>
                                <ul class="list">
                                    <li> Xây dựng trang chủ</li>
                                    <li> Xây dựng trang đăng ký, đăng nhập thành viên</li>
                                    <li> Xây dựng và xử lý menu người dùng</li>
                                    <li> Xây dựng trang trình bày nội dung, sản phẩm</li>
                                    <li> Xử lý các chức năng bình luận, đánh giá,…</li>
                                    <li> Xây dựng trang giỏ hàng</li>
                                    <li> Xử lý thanh toán và mua hàng,…</li>
                                    <li> Giả lập các thanh toán trực tuyến</li>
                                    <li> Nhúng mạng xã hội, Google Map, Google plus, Facebook,..</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



<section id="noi-dung" class="noi-dung-hoc">
    <div class="container">
        <div class="row item-noi-dung">
            <div class="col-md-6 col-md-push-3 hoc-phan">
                <h5>
                    PHẦN 4: Bảo vệ dự án cuối khóa
                </h5>
            	<hr class="uk-divider-icon">

            </div>
            <div class="col-md-12">
               <p class="text-center text-bold">
               	Kết thúc nội dung khóa học chuyên đề, học viên làm dự án cuối khóa dưới sự hướng dẫn của chuyên gia và phòng thực tập dự án .
DEVMASTER tổ chức bảo vệ dự án cuối khóa dưới sự nhận xét đánh giá của phòng chuyên môn và các doanh nghiệp tuyển dụng.
               </p>
            </div>
        </div>
    </div>
</section>

					
{{-- 
						<div class="panel-group lp_knowledge" id="">
						   <div class="panel panel-default wow bounceInUp" data-wow-delay="0.2s">
						      <div class="panel-heading">
						         <h4 class="panel-title">
						            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						            	<strong>PHẦN 1: </strong> LẬP TRÌNH WEB (FRONTEND) 
						            	<span class="pull-right">
						            		<span class="glyphicon glyphicon-plus"></span>
						            	</span>
						            </a>
						         </h4>
						      </div>
						      <div id="collapse1" class="panel-collapse collapse in">
						         <div class="panel-body">
						         	<div class="row">
						         		<div class="col-md-6">
								         				
											<div class="panel-group" id="accordion11">
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse11">
											            	1. Tổng quan về ngôn ngữ lập trình Web
											            </a>
											         </h4>
											      </div>
											      <div id="collapse11" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Môi trường tạo trang web</li>
						                                    <li> Web tĩnh và web động</li>
						                                    <li> Công nghệ lập trình web</li>
						                                    <li> HTML5 và CSS3</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse12">
											            	2. Ngôn ngữ đánh dấu văn bản HTML, HTML5
											            </a>
											         </h4>
											      </div>
											      <div id="collapse12" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> HTML và cấu trúc của trang HTML</li>
						                                    <li> Thẻ xác định khai báo thông tin cho trang web &lt;head&gt;</li>
						                                    <li> Thẻ xác định tiêu đề cho trang web &lt;title&gt;</li>
						                                    <li> Thẻ meta xác định siêu dữ liệu &lt;meta /&gt;</li>
						                                    <li> Thẻ xác định phần thân (nội dung) trang web&lt;body&gt;</li>
						                                    <li> Một số các thẻ cơ bản trong HTML, HTML5</li>
						                                    <li><strong>Thực hành:</strong> Sử dụng công cụ Adobe Dreamweaver CS5, PHP Designer, SublineText.. để tạo ứng dụng web</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse13">
											            	3. TABLE và FORM trong HTML, HTML5
											            </a>
											         </h4>
											      </div>
											      <div id="collapse13" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Thẻ tạo bảng biểu (Table)</li>
						                                    <li> Biểu mẫu nhập dữ liệu (Form)</li>
						                                    <li> Các phần tử trong biểu mẫu của HTML</li>
						                                    <li> Các phần tử mới trong biểu mẫu của HTML5</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse14">
											            	4. Các thẻ bố cục nội dung trong HTML5
											            </a>
											         </h4>
											      </div>
											      <div id="collapse14" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Các thẻ &lt;div&gt; &lt;lable&gt; &lt;span&gt; &lt;detail&gt; &lt;summary&gt;….</li>
						                                    <li> Các thẻ &lt;header&gt; &lt;nav&gt; &lt;session&gt; &lt;acticle&gt; &lt;aside&gt;</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse15">
											            	5. CSS và CSS3 cơ bản
											            </a>
											         </h4>
											      </div>
											      <div id="collapse15" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Tổng quan về CSS và CSS3</li>
						                                    <li> Tương tác giữa CSS và HTML</li>
						                                    <li> Cú pháp của CSS, CSS3</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse16">
											            	6. CSS, CSS3 các tính năng nâng cao
											            </a>
											         </h4>
											      </div>
											      <div id="collapse16" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Các bộ chọn, bộ chọn thuộc tính,..</li>
						                                    <li> Sử dụng CSS, CSS3 trình bày giao diện web</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											  
											</div>
						         		</div>
						         		<div class="col-md-6">
						         						
											<div class="panel-group" id="accordion112">
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion112" href="#right1">
											            	7. Sử dụng JAVASCRIPT trong trang web
											            </a>
											         </h4>
											      </div>
											      <div id="right1" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Cách sử dụng javascript</li>
						                                    <li> Nhúng javascript vào trang HTML</li>
						                                    <li> Khai báo biến trong javascript</li>
						                                    <li> Hàm alert(), confirm() , prompt()</li>
						                                    <li> Các toán tử trong javascript</li>
						                                    <li> Lệnh rẽ nhánh trong javascript</li>
						                                    <li> Vòng lặp trong javascript</li>
						                                    <li> Mảng trong javascript</li>
						                                    <li> Hàm trong javascript</li>
						                                    <li> Chuỗi trong javascript</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion112" href="#right2">
											            	8. Đối tượng và xử lý sự kiện trong JAVASCRIPT
											            </a>
											         </h4>
											      </div>
											      <div id="right2" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Làm việc với các đối tượng cơ bản</li>
						                                    <li> Sử dụng các thuộc tính và phương thức</li>
						                                    <li> Làm việc với các sự kiện phổ biến trong Javascript</li>
						                                    <li> Làm việc với các đối tượng của trình duyệt</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion112" href="#right3">
											            	9. JQUERY, AJAX, và các hiệu ứng
											            </a>
											         </h4>
											      </div>
											      <div id="right3" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Tổng quan về JQuery</li>
						                                    <li> Cách sử dụng JQuery</li>
						                                    <li> Truy xuất các phần tử CSS qua JQuery Selector</li>
						                                    <li> Các sự kiện với JQuery</li>
						                                    <li> Gắn kết các sự kiện</li>
						                                    <li> Các hiệu ứng với JQuery</li>
						                                    <li> Sử dụng cú pháp jQuery để viết các xử lý trên trang web, nhằm tạo hiệu suất nhanh hơn.</li>
						                                    <li> Sử dụng thêm một số plugin JQuery hỗ trợ như JQuery Validation</li>
						                                    <li> Cài đặt các jQuery Plugin nhằm làm cho trang web sống động và có giao diện chuyên nghiệp hơn</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion112" href="#right4">
											            	10. Sử dụng bootstrap trong thiết kế giao diện web
											            </a>
											         </h4>
											      </div>
											      <div id="right4" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Giới thiệu về bootstrap, bootstrap 3</li>
						                                    <li> Tải và nhúng bootstrap vào trang web</li>
						                                    <li> Sử dụng Bootstrap Grid</li>
						                                    <li> Sử dụng Bootstrap CSS</li>
						                                    <li> Bootstrap components</li>
						                                    <li> Bootstrap Typography</li>
						                                    <li> Bootstrap Tables</li>
						                                    <li> Bootstrap Forms</li>
						                                    <li> Sử dụng các thành phần trong Bootstrap Forms</li>
						                                    <li> Bootstrap Images</li>
						                                    <li> Bootstrap Responsive Utilities</li>
						                                    <li> Bootstrap Glyphicons</li>
						                                    <li> Bootstrap Navigation Elements</li>
						                                    <li> Bootstrap Pagination, Thumbnails, ….</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion112" href="#right5">
											            	11. PHOTOSHOP trong lập trình WEB
											            </a>
											         </h4>
											      </div>
											      <div id="right5" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Các thao tác cơ bản trong Photoshop</li>
						                                    <li> Các thao tác với vùng chọn, cắt HTML ,…</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion112" href="#right6">
											            	12. Cắt ghép giao diện WEB
											            </a>
											         </h4>
											      </div>
											      <div id="right6" class="panel-collapse collapse">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li>Chuyển từ file thiết kế Photoshop (*.psd) sang giao diện Web với (HTML5, CSS3, Jquery, Bootstrap,…)</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											  
											</div>
						         		</div>
						         	</div>


						         </div>
						      </div>
						   </div>
						   <div class="panel panel-default wow bounceInUp" data-wow-delay="0.4s">
						      <div class="panel-heading">
						         <h4 class="panel-title">
						            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
						            	<strong>PHẦN 2</strong>: LẬP TRÌNH WEB VỚI PHP&MYSQL
						            	<span class="pull-right">
						            		<span class="glyphicon glyphicon-plus"></span>
						            	</span>
						            </a>
						         </h4>
						      </div>
						      <div id="collapse2" class="panel-collapse collapse">
						         <div class="panel-body">
						         	<div class="row">
						         		<div class="col-md-6">
											<div class="panel-group" id="accordion2a">
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion2a" href="#collapse2a1">
											               1. Ngôn ngữ lập trình PHP
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2a1" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Cài đặt (APACHE, PHP, MYSQL)</li>
											               <li> Kịch bản PHP (script), cú pháp của ngôn ngữ</li>
											               <li> Xử lý Form trong PHP (POST, GET,..)</li>
											               <li> Biến, hằng số, kiểu dữ liệu,…</li>
											               <li> Các cấu trúc điều khiển: if, switch, for, while,…</li>
											               <li> Mảng và các thao tác xử lý mảng.</li>
											               <li> Khái niệm về hàm, tạo và sử dụng hàm</li>
											               <li> Sử dụng các hàm include, require,..</li>
											               <li> Các đối tượng Session, Cookie trong PHP</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion2a" href="#collapse2a2">
											               2. Một số các kỹ thuật cơ bản
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2a2" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Làm việc với File và Upload file</li>
											               <li> Xử lý Email với thư viện PHPMailer và các ngoại lệ</li>
											               <li> Kỹ thuật rewriteUrl</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion2a" href="#collapse2a3">
											               3. Hệ quản trị cơ sở dữ liệu (MYSQL)
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2a3" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Khái niệm, kiểu dữ liệu,…</li>
											               <li> Các đối tượng cơ sở dữ liệu</li>
											               <li> Các câu lệnh thao tác dữ liệu(Select, insert, update, delete,…)</li>
											               <li> Sao lưu, phục hồi cơ sở dữ liệu (Backup, Restore)</li>
											               <li> Công cụ MySQL Workbench, Navicat,..</li>
											               <li> Xây dựng cơ sở dữ liệu: Tin tức, Giới thiệu và mua/bán sản phẩm trực tuyến</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion2a" href="#collapse2a4">
											               4. Lập trình PHP kết nối CSDL

											            </a>
											         </h4>
											      </div>
											      <div id="collapse2a4" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Kết nối từ PHP đến MySQL</li>
											               <li> Các hàm truy cập dữ liệu thông thường</li>
											               <li> Thực thi các câu lệnh T-SQL (Select, Insert, Update, Delete,..)</li>
											               <li> Trình bày dữ liệu từ MySQL trên trang PHP</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#accordion2a" href="#collapse2a5">
											               5. Lập trình hướng đối tượng trong PHP
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2a5" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Đối tượng (Object) và lớp (Class)</li>
											               <li> Thuộc tính (Properties) và phương thức (Method)</li>
											               <li>
											                   - Magic Method trong PHP
											                   <ul class="list">
											                       <li>Hàm __construct()</li>
											                       <li>Hàm __destruct()</li>
											                       <li>Hàm __toString()</li>
											                       <li>Hàm clone(); __sleep() ; __wakeup</li>
								                                    <li>- Tính kế thừa (extends) và viết đè (overwrite)</li>
								                                    <li>- Các bổ từ truy cập (public – protected – private)</li>
								                                    <li>- Self &amp; Parent</li>
								                                    <li>- Static, Constant, Final Method</li>
								                                    <li>- Abstract class</li>
								                                    <li>- Interfaces</li>
								                                    <li>- __set() &amp; __get() method</li>
								                                    <li>- Serialization</li>
								                                </ul>
											               </li>
											           </ul>
											         </div>
											      </div>
											   </div>
											</div>						         			
						         		</div>
						         		<div class="col-md-6">
						         			<div class="panel-group" id="#collapse2b">
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#collapse2b" href="#collapse2b1">
											               6. Lập trình php kết nối mysql và sử dụng các thư viện
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2b1" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Sử dụng thư viện PDO (PHP Data Object)</li>
											               <li> CRUD: Create – Read – Update – Delete</li>
											               <li> Thực thi các câu lệnh SQL sử dụng PDO</li>
											               <li>
											                   <ul class="list">
											                       <li>+ Hiển thị danh sách</li>
											                       <li>+ Thêm/sửa/Xóa </li>
											                   </ul>
											               </li>
											               <li> Sử dụng một số Template Engine</li>
											               <li><strong>Áp dụng với dự án:</strong> Tin tức, giới thiệu và mua/bán sản phẩm trực tuyến</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#collapse2b" href="#collapse2b2">
											               7. Giới thiệu mô hình MVC
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2b2" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Mô hình MVC</li>
											               <li> Model, View, Controller</li>
											               <li> Ưu , nhược điểm của mô hình MVC</li>
											               <li> Luồng xử lý trong mô hình MVC</li>
											               <li> Thực hành với mô hình MVC</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#collapse2b" href="#collapse2b3">
											               8. Một số kỹ thuật nâng cao
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2b3" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Thiết kế giỏ hàng</li>
											               <li> Tích hợp công cụ thanh toán trực tuyến (VD: nganluong.vn)</li>
											               <li> Nhúng mạng xã hội: Google Map, Google plus, Facebook,..</li>
											               <li> Hỗ trợ trực tuyến: skyper, yahoo,….</li>
											               <li> Công cụ quản lý mã nguồn: Git/SVN</li>
											               <li> AJAX trong ngôn ngữ PHP</li>
											               <li> Tăng tốc website bằng kỹ thuật Cache</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#collapse2b" href="#collapse2b4">
											               9. PHP FRAMEWORK và CMS
											            </a>
											         </h4>
											      </div>
											      <div id="collapse2b4" class="panel-collapse collapse">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Các Framework, CMS phổ biến: Zend, CakePHP, CodeIgniter,  WordPress, Durpal, Joomla, …</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											 
											</div>
						         		</div>
						         	</div>
						         </div>
						      </div>
						   </div>
						   <div class="panel panel-default wow bounceInUp" data-wow-delay="0.6s">
						      <div class="panel-heading">
						         <h4 class="panel-title">
						            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
						            	<strong>PHẦN 3</strong>: DỰ ÁN CUỐI KHÓA, XÂY DỰNG DỰ ÁN THỰC TẾ (CUỐI KHÓA)
						            	<span class="pull-right">
						            		<span class="glyphicon glyphicon-plus"></span>
						            	</span>
						            </a>
						         </h4>
						      </div>
						      <div id="collapse3" class="panel-collapse collapse">
						         <div class="panel-body">
						         	<div class="row">
						         		<div class="col-md-6">
						         			<div class="panel-group" id="#collapse3a">
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#collapse3a" href="#collapse3a1">
											               1. Xây dựng trang quản trị (BACKEND)
											            </a>
											         </h4>
											      </div>
											      <div id="collapse3a1" class="panel-collapse collapse in">
											         <div class="panel-body">
											            <ul class="list">
											               <li> Trang xử lý đăng nhập, đăng xuất</li>
											               <li> Trang quản trị</li>
											               <li> Xử lý các trang quản lý danh mục</li>
											               <li> Xử lý các trang quản lý khách hàng</li>
											               <li> Xử lý các trang quản trị đơn hàng</li>
											               <li> Xử lý thống kê (Sản phẩm, khách hàng, đơn hàng,..)</li>
											               <li> Xử lý các trang quản lý bình luận, đánh giá,</li>
											           </ul>
											         </div>
											      </div>
											   </div>
											</div>
						         		</div>
						         		<div class="col-md-6">
						         			<div class="panel-group" id="#collapse3b">
											   <div class="panel panel-default">
											      <div class="panel-heading">
											         <h4 class="panel-title">
											            <a data-toggle="collapse" data-parent="#collapse3b" href="#collapse3b1">
											            	2. XÂY dựng trang người dùng (FRONTEND)
											            </a>
											         </h4>
											      </div>
											      <div id="collapse3b1" class="panel-collapse collapse in">
											         <div class="panel-body">
											         	<ul class="list">
						                                    <li> Xây dựng trang chủ</li>
						                                    <li> Xây dựng trang đăng ký, đăng nhập thành viên</li>
						                                    <li> Xây dựng và xử lý menu người dùng</li>
						                                    <li> Xây dựng trang trình bày nội dung, sản phẩm</li>
						                                    <li> Xử lý các chức năng bình luận, đánh giá,…</li>
						                                    <li> Xây dựng trang giỏ hàng</li>
						                                    <li> Xử lý thanh toán và mua hàng,…</li>
						                                    <li> Giả lập các thanh toán trực tuyến</li>
						                                    <li> Nhúng mạng xã hội, Google Map, Google plus, Facebook,..</li>
						                                </ul>
											         </div>
											      </div>
											   </div>
											</div>
						         		</div>
						         	</div>
						         </div>
						      </div>
						   </div>
						   <div class="panel panel-default wow bounceInUp" data-wow-delay="0.8s">
						      <div class="panel-heading">
						         <h4 class="panel-title">
						            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
						            	<strong>PHẦN 4</strong>: BẢO VỆ ĐỒ ÁN CUỐI KHÓA
						            	<span class="pull-right">
						            		<span class="glyphicon glyphicon-plus"></span>
						            	</span>
						            </a>
						         </h4>
						      </div>
						      <div id="collapse4" class="panel-collapse collapse">
						         <div class="panel-body">
						         	Kết thúc nội dung khóa học chuyên đề, học viên làm dự án cuối khóa dưới sự hướng dẫn của chuyên gia và phòng thực tập dự án .<br>
						         	DEVMASTER tổ chức bảo vệ đồ án cuối khóa dưới sự nhận xét đánh giá của phòng chuyên môn và các doanh nghiệp tuyển dụng.
						         </div>
						      </div>
						   </div>
						</div> --}}
@endsection

@push('scripts_css')
<style>
.noi-dung-hoc{
    margin-top: 2em;
}
.noi-dung-hoc h5 {
        color: #c73735;
    font-family: 'Oswald', sans-serif;
    text-align: center;
    text-transform: uppercase;
}

.noi-dung-desc thead {
    background: #c73735;
    /* color:  #fff; */
}

.noi-dung-desc thead td h5 {
    color: #fff;
    padding-top:  1em;
    text-transform:  uppercase;
}
@media screen and (max-width: 768px) {
    .noi-dung-desc thead td h5{
        padding:0px;
        margin: 0!important;
    }
}
</style>


@endpush



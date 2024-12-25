<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', "dbtest" );
/** Username của database */
define( 'DB_USER', "testusr" );
/** Mật khẩu của database */
define( 'DB_PASSWORD', "asd@123" );
/** Hostname của database */
define( 'DB_HOST', "db" );
/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');
/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X%)!SEt|k>%2~,0fTIH(Sl^,uPvTNG,v0%-26.N})Z<U.OMjYZ;W13/u~(Q8$1vW' );
define( 'SECURE_AUTH_KEY',  'w6k,fWo$Gf}W{.oADhc;{U#5E/T82,iT[f/kW?:~#q`fwd^AOd NzvZr%vJu|/(~' );
define( 'LOGGED_IN_KEY',    'qca(n_q2|ij/{.0}y?}/}&]l5bzR&%+oC4e&7RLn{W7a$Jq|f#[2IlaPtT{H%X:Y' );
define( 'NONCE_KEY',        '3P9C(P797Yv*s`6X``9-8r1F07Lhj?P#FL||clea.>q#=W,w,*L/jFf,@nd1hD|>' );
define( 'AUTH_SALT',        '7@T#a{)cPuA)>`Bfm?>M5&v~S8dN x1*6cW`B1{9p.@ry3*Eu0!Xf`oe$V$UH#^%' );
define( 'SECURE_AUTH_SALT', '<##D1D~s_j>|-6_DgV2A] &;aIu~jyWoq;!rHEql;;4HS3z^q6).q[w=:fNCS#Q`' );
define( 'LOGGED_IN_SALT',   'q:=k5R4$EQ^boHzXFh,#1w6gE0uY]I>f7<EwA%7#N,5Q[bZ3oc6`5>7Mlp/0)6NE' );
define( 'NONCE_SALT',       'en_]SAOtw!][9?29<3b&VTbRTEM!+`Ekv(?89R;}#Yr99UF&:=$  @wn8piy,Fn`' );
/**#@-*/
/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';
/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */
/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
define( 'WP_AUTO_UPDATE_CORE', '' );
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

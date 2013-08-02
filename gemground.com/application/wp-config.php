<?php
/** 
 * WordPress 基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL 设置、数据库表名前缀、密钥、
 * WordPress 语言设定以及 ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑 wp-config.php} Codex 页面。MySQL 设置具体信息请咨询您的空间提供商。
 *
 * 这个文件用在于安装程序自动生成 wp-config.php 配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后输入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress 数据库的名称 */
if ($_SERVER['HTTP_REQUESR'] == 'localhost') {

	define('DB_NAME', 'gemground');

	/** MySQL 数据库用户名 */
	define('DB_USER', 'root');

	/** MySQL 数据库密码 */
	define('DB_PASSWORD', '');

	/** MySQL 主机 */
	define('DB_HOST', 'localhost');

	/** 创建数据表时默认的文字编码 */
	define('DB_CHARSET', 'utf8');

	/** 数据库整理类型。如不确定请勿更改 */
	define('DB_COLLATE', '');

}else{

	define('DB_NAME', 'gemground');

	/** MySQL 数据库用户名 */
	define('DB_USER', 'flyingwikime');

	/** MySQL 数据库密码 */
	define('DB_PASSWORD', '4!PRfW7i');

	/** MySQL 主机 */
	define('DB_HOST', 'mysql.duyujun.com');

	/** 创建数据表时默认的文字编码 */
	define('DB_CHARSET', 'utf8');

	/** 数据库整理类型。如不确定请勿更改 */
	define('DB_COLLATE', '');

}

/**#@+
 * 身份认证密匙设定。
 *
 * 您可以随意写一些字符
 * 或者直接访问 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私钥生成服务}，
 * 任何修改都会导致 cookie 失效，所有用户必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't9d?RM]{m7C5 E6~j8>,:C&Tsl]A7UIqP$qxpMg(a|kH=+M]Q~$CMfYs|dG,K7r<');
define('SECURE_AUTH_KEY',  'eR87!znQ}>Rm8!|~B2I>:6ZJdc[X@+O%!eC*Lp~8O=d6Y2(iAaOk)TaA5_8:mEhX');
define('LOGGED_IN_KEY',    '-)Sh h8#dvts{5DTjgX8-?N+Hd/H>Sl_7oA|>Rc!&#OC(RqB-~(:QHqS]Ia-Ch&]');
define('NONCE_KEY',        'x$<W|+WBMxH2WtImlDpp)~|(bQwB</OJP;4in5qXJ#S6F31(7|mRxf#=L-xG6feT');
define('AUTH_SALT',        'f1FF=FBD|d]k!K?p:u?1qe,nV?9GYkNbU:H`Y[Vwcc73zAeb{:?L{@tu-4MY=AKE');
define('SECURE_AUTH_SALT', 'QlTN!XIIR5_*K+UgP<3* $cb[1ZQ|53+yv-J)=.Ro+:RX4c](B7vAj27Qzn#:ipK');
define('LOGGED_IN_SALT',   '()_F!|_Rc|,<;*nV,eK#8>UZV_p2!i{IC+J>LM?qF@!vMwt<gSPdXiuOmJhRy^-X');
define('NONCE_SALT',       'wMTekvjvbk&Z)gbjQCyu^kDj+:!$} x+,QSrR2?6+Wy/w3Fe#+}[_GUI4b%eHG+u');

/**#@-*/

/**
 * WordPress 数据表前缀。
 *
 * 如果您有在同一数据库内安装多个 WordPress 的需求，请为每个 WordPress 设置不同的数据表前缀。
 * 前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'gwp_';

/**
 * WordPress 语言设置，中文版本默认为中文。
 *
 * 本项设定能够让 WordPress 显示您需要的语言。
 * wp-content/languages 内应放置同名的 .mo 语言文件。
 * 要使用 WordPress 简体中文界面，只需填入 zh_CN。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress 调试模式。
 *
 * 将这个值改为“true”，WordPress 将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用本功能。
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress 目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置 WordPress 变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

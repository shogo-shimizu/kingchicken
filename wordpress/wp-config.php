<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'kingchicken' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':J!yi>W|n}]!k4UjF9r_]I)UJcT{;kdRV@Nl4i*i%GY3m%(x_^WN/od~9JD_ZAI`' );
define( 'SECURE_AUTH_KEY',  'D@U1@|WlI|}Ixm{IAS?Ygpt~H5!Aw2H;nZD4m.l coF=.&h2Qd]A.:H&:NIJ%u#j' );
define( 'LOGGED_IN_KEY',    'oC/3o93pYO#Biv:4S:.h8VFCJ((Db|Q{wWP$xFLow>JI*Kj7;KF+_}3Vhnl>27xE' );
define( 'NONCE_KEY',        '<txO)QTvb2zHsWL+~;e->;(]e31C:o|.+<:%*rk.N[1WiK2JaF/F/!)$(dJs+muI' );
define( 'AUTH_SALT',        '&?Ol=S!1`U8dn50@jq$GCZ$P$UZeNSPfMy<JD5a|^cxwC5l;$y?gK-u0CH;8<t}E' );
define( 'SECURE_AUTH_SALT', 'VpePY*Y6F20wd,bW5Vv?NI>?+U!ngC[G7rni1*TKbwYnNi&>#lw1E/Nq-(X.b8.p' );
define( 'LOGGED_IN_SALT',   '/jhktFgF<||zC(+y;(6Q_i[4G%AL)90P/)1=?^nvFm1}:!.sGM3@+;-Vk8TNWbbn' );
define( 'NONCE_SALT',       ']Bm%+gmPM&^XwsCOI{y~!V^Ls;bN%3%Qx#:q#2P`a@ao[ZOAdTXy7&G5pJh>sMGV' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sitestudiodayse' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kp3BgcnC~nG,1a/yh#ol`JN<?#;CR:)6(bxZvNal-$cg37u#nqKh226:k!9hCLn`' );
define( 'SECURE_AUTH_KEY',  'c9r193IDZISC-D]7FfKo}oGE#},]s`fWs@xy;zedP.I^aFsxDgRX{L=JQaOCR4AY' );
define( 'LOGGED_IN_KEY',    '*pE7L828}=&=2|:E4-qT+ang)Q;$bOTOJ4Sm9Rw<?/~Ze=DzC$}F[`CdRlkYXAXM' );
define( 'NONCE_KEY',        'oJzOX]iY^N-qqEK8/K-q9iyw3+rEbv+QNgl+0R}BKgM}#?e_5hOWfyhjT @bE;K(' );
define( 'AUTH_SALT',        'apUu&&#bie4S>Gd1<#OLg6vqPb8()zRxMEc%jAdHRd[IF`cOd-,~$XJyO0G;}R`D' );
define( 'SECURE_AUTH_SALT', 'l|u=]nzS.P[,R^huCQzTiQG1a6~ZydMO?rzq9sO uz<%n2RwdVN|OpF1.kgM8DV7' );
define( 'LOGGED_IN_SALT',   '4*Ybt}~D|y{u:m#Op/|RQnNJx*!K,*_5lApq10+9y*&=lf{4(<lo?OfEh;y$1Y(T' );
define( 'NONCE_SALT',       'zs(dJXIym?9pM,[`un,yvv1t/yl},/dr:SbLDzLkCQBC$|,f7n Fj#1*.N;N@|f5' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */


/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

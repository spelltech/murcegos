<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'murcegos');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BomU6~{ #8|/g+;P&G16gtl&*#3)o-%|xyZKIl^&{Hj|RU3-@Fmo9?AQ@i0#-i(~');
define('SECURE_AUTH_KEY',  '79Ay``+Sj3qxYmV^INfiR}RW9!|zMIz$+_NN!guCmE54F YmiU6jssxBu.r+hvO3');
define('LOGGED_IN_KEY',    'CVt;`IM5f?AmChtzm$wBvdhXdUi;gK|p-I;7a l&q8*,Yx8-FeBO%/n+-)eL`!T=');
define('NONCE_KEY',        '~kk;<f.{i2e))MAgMn-:W!s@e+ MqM`!X>iTX>SX=Ri?hT@(/z=@}?k9yLj6/4ep');
define('AUTH_SALT',        '1|m+Ye&8[H|i-}Fp#:v4LE+YK0#JXY_~`[{;rM/t$ar>43h%pDW:ET!-#T?5KD#e');
define('SECURE_AUTH_SALT', 'B1mtyh:$Y4AAx0f|RIFeyI`Nv3%61vgtxh7X5*<RXm>0^B#{t7nF<5&@{v@vh.Cy');
define('LOGGED_IN_SALT',   '(;E[thS@-Dn97f&J1knx` 3A` I+@8bvJCowJ|Gbq,}:F=5Lt{BG3FKj:R[;{Fv$');
define('NONCE_SALT',       ' 2|PYe%Z?|_e$N!+D]t,=_YU:xmlO=TZw-S Yi`Ah$-C`#*G6bxz3+T|a3m&+f9s');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

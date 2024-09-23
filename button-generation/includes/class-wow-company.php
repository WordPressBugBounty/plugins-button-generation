<?php
/**
 * Class Wow_Company
 *
 * The Wow_Company class represents a company in the WordPress admin menu that provides Wow Plugins.
 *
 * @package    WowPlugin
 * @subpackage General
 * @author     Dmytro Lobov <dev@wow-company.com>, Wow-Company
 * @copyright  2024 Dmytro Lobov
 * @license    GPL-2.0+
 */


defined( 'ABSPATH' ) || exit;

final class Wow_Company {
	public function __construct() {

		add_action( 'admin_menu', [ $this, 'add_menu' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_style' ] );

	}

	public function add_menu(): void {
		$icon       = self::icon();
		$page_title = __( 'WordPress plugins from Wow-Company', 'button-generation' );
		$menu_title = __( 'Wow Plugins', 'button-generation' );
		$capability = 'manage_options';
		$slug       = 'wow-company';

		add_menu_page( $page_title, $menu_title, $capability, $slug, [ $this, 'welcome_page' ], $icon );
		add_submenu_page( $slug, $page_title, 'Hey 👋', $capability, $slug );
	}

	public function welcome_page(): void {
		require_once plugin_dir_path( __FILE__ ) . 'page-welcome.php';
		wp_enqueue_style( 'admin-wpie-page', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', null, '1.0' );
	}

	public function admin_style(): void {
		wp_enqueue_style( 'wow-plugins', plugin_dir_url( __FILE__ ) . 'assets/css/admin.css', null, '1.0' );
	}


	private static function icon(): string {
		return 'data:image/svg+xml;base64, PHN2ZyB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPHRpdGxlPldPVyBMT0dPPC90aXRsZT4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCB4MT0iNTAlIiB5MT0iMCUiIHgyPSI1MCUiIHkyPSIxMDAlIiBpZD0ibGluZWFyR3JhZGllbnQtMSI+CiAgICAgICAgICAgIDxzdG9wIHN0b3AtY29sb3I9IiNGN0NDNUYiIG9mZnNldD0iMCUiPjwvc3RvcD4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iI0U4NkUyQyIgb2Zmc2V0PSIxMDAlIj48L3N0b3A+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgICAgICA8bGluZWFyR3JhZGllbnQgeDE9IjUwJSIgeTE9IjAlIiB4Mj0iNTAlIiB5Mj0iMTAwJSIgaWQ9ImxpbmVhckdyYWRpZW50LTIiPgogICAgICAgICAgICA8c3RvcCBzdG9wLWNvbG9yPSIjRjdDQzVGIiBvZmZzZXQ9IjAlIj48L3N0b3A+CiAgICAgICAgICAgIDxzdG9wIHN0b3AtY29sb3I9IiNFODZFMkMiIG9mZnNldD0iMTAwJSI+PC9zdG9wPgogICAgICAgIDwvbGluZWFyR3JhZGllbnQ+CiAgICA8L2RlZnM+CiAgICA8ZyBpZD0iV09XLUxPR08iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+CiAgICAgICAgPGcgaWQ9Ikdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMTIuMDAwMDAwLCAxMDcuNTI2NTIxKSIgc3Ryb2tlPSJ1cmwoI2xpbmVhckdyYWRpZW50LTEpIiBzdHJva2Utd2lkdGg9IjM4Ij4KICAgICAgICAgICAgPHBhdGggZD0iTTAuNDMzMDEyNzAyLDg2LjkyNjkxNTggTDEwMC40MzMwMTMsMjYwLjEzMTk5NyBNMTAwLjQzMzAxMyw4Ni45MjY5MTU4IEwyMDAuNDMzMDEzLDI2MC4xMzE5OTcgTTM1MS41ODU3OTEsNS45OTUyMDQzM2UtMTUgTDIwMi4yNTU3MDcsMjYwLjE5MzI0NyIgaWQ9IkNvbWJpbmVkLVNoYXBlIj48L3BhdGg+CiAgICAgICAgPC9nPgogICAgICAgIDxwYXRoIGQ9Ik0yNTYsNDU2IEMzNjYuNDU2OTUsNDU2IDQ1NiwzNjYuNDU2OTUgNDU2LDI1NiBDNDU2LDE0NS41NDMwNSAzNjYuNDU2OTUsNTYgMjU2LDU2IEMxNDUuNTQzMDUsNTYgNTYsMTQ1LjU0MzA1IDU2LDI1NiBDNTYsMzY2LjQ1Njk1IDE0NS41NDMwNSw0NTYgMjU2LDQ1NiBaIiBpZD0iT3ZhbCIgc3Ryb2tlPSJ1cmwoI2xpbmVhckdyYWRpZW50LTIpIiBzdHJva2Utd2lkdGg9IjI4IiBzdHJva2UtZGFzaGFycmF5PSIxMTU1LjUyLDk5OTk5IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTYuMDAwMDAwLCAyNTYuMDAwMDAwKSByb3RhdGUoLTEzMi4wMDAwMDApIHRyYW5zbGF0ZSgtMjU2LjAwMDAwMCwgLTI1Ni4wMDAwMDApICI+PC9wYXRoPgogICAgPC9nPgo8L3N2Zz4=';

	}

}

new Wow_Company;
<?php
/**
 * Plugin Name: Keira Core
 * Description: Core plugin for Keira Theme
 * Author URI:  https://www.templatemonster.com/authors/inaikas/
 * Author:      inaikas
 * Version:     1.2
 * Text Domain: keira
 * License:     GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

define("PLUGIN_PATH", plugin_dir_path(__FILE__));

final class Keira_Core
{
    const VERSION = '1.3.0';

    const MINIMUM_ELEMENTOR_VERSION = '2.9.0';

    const MINIMUM_PHP_VERSION = '7.0';

    private static $_instance = null;

    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function __construct()
    {
        add_action('init', [$this, 'i18n']);
        add_action('plugins_loaded', [$this, 'init']);
    }

    public function i18n()
    {
        load_plugin_textdomain('keira');
    }

    public function admin_notice_missing_main_plugin()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }
        $message = sprintf(
            esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'keira'),
            '<strong>' . esc_html__('Elementor Test Extension', 'keira') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'keira') . '</strong>'
        );
        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    public function admin_notice_minimum_elementor_version()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }
        $message = sprintf(
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'keira'),
            '<strong>' . esc_html__('Elementor Test Extension', 'keira') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'keira') . '</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );
        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    public function admin_notice_minimum_php_version()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }
        $message = sprintf(
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'keira'),
            '<strong>' . esc_html__('Elementor Test Extension', 'keira') . '</strong>',
            '<strong>' . esc_html__('PHP', 'keira') . '</strong>',
            self::MINIMUM_PHP_VERSION
        );
        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    public function init_widgets()
    {
        require_once(__DIR__ . '/widgets/keira-header.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_header_widget());

        require_once(__DIR__ . '/widgets/keira-minimal-header.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_minimal_header_widget());

        require_once(__DIR__ . '/widgets/keira-slider.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_slider_widget());

        require_once(__DIR__ . '/widgets/keira-slider2.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_slider2_widget());

        require_once(__DIR__ . '/widgets/keira-about.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_about_widget());

        require_once(__DIR__ . '/widgets/keira-main-title.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_main_title_widget());

        require_once(__DIR__ . '/widgets/keira-service.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_service_widget());

        require_once(__DIR__ . '/widgets/keira-minimal-service.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_minimal_service_widget());

        require_once(__DIR__ . '/widgets/keira-fact.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_fact_widget());

        require_once(__DIR__ . '/widgets/keira-portfolio-main-title.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_portfolio_title_widget());

        require_once(__DIR__ . '/widgets/keira-portfolio.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_portfolio_widget());

        require_once(__DIR__ . '/widgets/keira-minimal-portfolio.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_minimal_portfolio_widget());

        require_once(__DIR__ . '/widgets/keira-resume.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_resume_widget());

        require_once(__DIR__ . '/widgets/keira-team.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_team_widget());

        require_once(__DIR__ . '/widgets/keira-brand-list.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_brand_list_widget());

        require_once(__DIR__ . '/widgets/keira-blog.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_blog_widget());

        require_once(__DIR__ . '/widgets/keira-contact-style2.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_contact_style2_widget());

        require_once(__DIR__ . '/widgets/keira-cf7.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \keira_cf7_shortcode_widget());

    }

    public function categories($elements_manager)
    {
        $elements_manager->add_category(
            'keira-category',
            [
                'title' => __('Keira Catagory', 'keira'),
                'icon' => 'fa fa-plug',
            ]
        );
        
    }

    public function init()
    {
        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);
            return;
        }
        if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);
            return;
        }
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);
            return;
        }
        add_action('elementor/widgets/widgets_registered', [$this, 'init_widgets']);
        add_action('elementor/elements/categories_registered', [$this, 'categories']);
    }
}

Keira_Core::instance();

<?php
if (class_exists('MBM_Ipak_Core')) {
    class MBM_Ipak_Ticket extends MBM_Ipak_Core
    {
        public function __construct()
        {
            add_action("admin_menu", array($this, "menu"));
            add_filter("mbm_ipak_models_url", array($this, "url"), 10, 1);
        }

        public function run()
        {
        }

        public function dashboard()
        {
            $MBM_Ipak_Ticket_Home = new MBM_Ipak_Ticket_Home;
            $MBM_Ipak_Ticket_Home->home();
        }

        public function insert_ticket()
        {
            $entity =  $this->get_entity("insert_ticket");
            $entity->render();
        }

        public function insert_unit()
        {
            $entity =  $this->get_entity("insert_unit");
            $entity->render();
        }

        public function insert_user_in_unit()
        {
            $entity =  $this->get_entity("insert_user_in_unit");
            $entity->render();
        }

        public function url($urls)
        {
            $urls[] = MBM_IPAK_TICKET_Include;
            return $urls;
        }

        public  function menu()
        {
            add_menu_page('ایپک ( تیکتینگ )', 'ایپک ( تیکتینگ )', 'manage_options', 'ipak-ticket-dashboard', array($this, "dashboard"));
            add_submenu_page('ipak-ticket-dashboard', 'داشبورد تیکتینگ', 'داشبورد تیکتینگ', 'manage_options', 'ipak-ticket-dashboard', array($this, "dashboard"));

            add_submenu_page('ipak-ticket-dashboard', 'تعریف بخش', 'تعریف بخش', 'manage_options', 'ipak-ticket-insert_unit', array($this, "insert_unit"));
            add_submenu_page('ipak-ticket-dashboard', 'ارتباط کاربران با بخش ها', 'ارتباط کاربران با بخش ها', 'manage_options', 'ipak-ticket-insert_user_in_unit', array($this, "insert_user_in_unit"));

            add_submenu_page('ipak-ticket-dashboard', 'ثبت تیکت', 'ثبت تیکت', 'manage_options', 'ipak-ticket-insert_ticket', array($this, "insert_ticket"));


            $this->add_entity(mbm_ipak\tools::get_model_from_url(), "list", MBM_IPAK_TICKET_Include);
        }

        public function count_menu()
        {
            global $wpdb;
            $table      = $wpdb->prefix . "hesab_model";
            $table_meta = $wpdb->prefix . "hesab_model_meta";
            $sql = "select count(1) from ";

            $query_string       = $wpdb->prepare($sql, array());
            $items       = $wpdb->get_results($query_string, ARRAY_A);

            add_submenu_page('ipak-ticket-dashboard', 'تیکت های من', 'تیکت های من' . '<span class="update-plugins count-1"><span class="plugin-count">1</span></span>', 'manage_options', 'ipak-ticket-report_my_ticket', array($this, "report_my_ticket"));
            add_submenu_page('ipak-ticket-dashboard', 'تیکت های بخش ', 'تیکت های بخش ', 'manage_options', 'ipak-ticket-report_unit_ticket', array($this, "report_unit_ticket"));
        }
    }
}

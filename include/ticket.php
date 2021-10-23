<?php
class MBM_Ipak_Ticket extends MBM_Ipak_Core
{
    public function __construct()
    {
        add_action("admin_menu", array($this, "menu")); 
        add_filter("mbm_ipak_models_url",array($this,"url"),10,1);
    }

    public function run()
    {
       
    } 

    public function dashboard()
    {
        $MBM_Ipak_Ticket_Home=new MBM_Ipak_Ticket_Home;
        $MBM_Ipak_Ticket_Home->home();
    }

    public function insert_ticket()
    {
        $entity =  $this->get_entity("insert_ticket");
        $entity->render();
    }

    public function url($urls)
    {
        $urls[]=MBM_IPAK_TICKET_Include;
       return $urls;
    }

    public  function menu()
    {
        add_menu_page('ایپک ( تیکتینگ )', 'ایپک ( تیکتینگ )', 'manage_options', 'ipak-ticket-dashboard', array($this, "dashboard"));
        add_submenu_page('ipak-ticket-dashboard', 'داشبورد تیکتینگ', 'داشبورد تیکتینگ', 'manage_options', 'ipak-ticket-dashboard', array($this, "dashboard"));

        add_submenu_page('ipak-ticket-dashboard', 'ثبت تیکت', 'ثبت تیکت', 'manage_options', 'ipak-ticket-insert_ticket', array($this, "insert_ticket"));

        $this->add_entity(mbm_ipak\tools::get_model_from_url(),"list",MBM_IPAK_TICKET_Include);
    }
}
<?php

class MBM_Ipak_Ticket_Hooks
{
    public function insert($insert_id, $model_id, $title, $values)
    {
        // var_dump($values);
        global $wpdb;
        $table     = $wpdb->prefix . "hesab_model";
        $table_meta = $table . "_meta";

        if ($model_id ==101) {
            $query_string       = $wpdb->prepare("insert into $table_meta(model_id,key_meta,value_meta) values(%d,%s,%d)", array($insert_id, "sender_id", get_current_user_id()));
            $query_result       = $wpdb->query($query_string);
        }
    }

    public function update($insert_id, $model_id, $title, $values)
    {
        // var_dump($values);
        global $wpdb;

  
    }

    public function delete($id)
    {
        // var_dump($values);
        global $wpdb;
    }

}

$table     = $wpdb->prefix . "hesab_model";

$MBM_Ipak_Ticket_Hooks = new MBM_Ipak_Ticket_Hooks;

add_action($table . "_after_insert", array($MBM_Ipak_Ticket_Hooks, "insert"), 10, 4);

add_action($table . "_after_update", array($MBM_Ipak_Ticket_Hooks, "update"), 10, 4);

add_action($table . "_after_delete", array($MBM_Ipak_Ticket_Hooks, "delete"), 10, 1);


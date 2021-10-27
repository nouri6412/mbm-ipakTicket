<?php
$this->models["insert_ticket"] = [];
$this->models["insert_ticket"]["id"] = "101";
$this->models["insert_ticket"]["name"] = "insert_ticket";
$this->models["insert_ticket"]["label"] = "تیکت";
$this->models["insert_ticket"]["primary_key"] = "id";
$this->models["insert_ticket"]["fields"] = array(
    "id" => array(
        "title" => "id",
        "label" => "شماره سیستمی تیکت",
        "sortable" => true,
        "in_table"=>true,
        "in_form" => true,
        "is_primary" => true
    ),
    "title" => array(
        "title" => "title",
        "label" => "عنوان تیکت",
        "sortable" => true,
        "in_form" => true,
        "is_title" => true,
        "is_require"=>true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-6")
    ),
    "unit_id" => array(
        "title" => "unit_id",
        "label" => "بخش",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select", "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=100", "key" => "id", "label" => "title"], "size" => 50, "class" => "col-md-6")
    ),
    "user_id" => array(
        "title" => "user_id",
        "label" => "کاربر",
        "sortable" => true,
        "is_require" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "users","where" => " ", "key" => "ID", "label" => "display_name"], "size" => 50, "class" => "col-md-6")
    ),
    "sender_id" => array(
        "title" => "sender_id",
        "label" => "ارسال کننده",
        "sortable" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "users","where" => " ", "key" => "ID", "label" => "display_name"], "size" => 50, "class" => "col-md-6")
    ),
    "description" => array(
        "title" => "description",
        "label" => "توضیحات",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "textarea","height"=>250, "size" => 1000,"class"=>"col-md-12")
    )
);

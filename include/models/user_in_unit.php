<?php
$this->models["insert_user_in_unit"] = [];
$this->models["insert_user_in_unit"]["id"] = "102";
$this->models["insert_user_in_unit"]["name"] = "insert_user_in_unit";
$this->models["insert_user_in_unit"]["label"] = "ارتباط کاربران با بخش";
$this->models["insert_user_in_unit"]["primary_key"] = "id";
$this->models["insert_user_in_unit"]["fields"] = array(
    "id" => array(
        "title" => "id",
        "label" => "شماره سیستمی ",
        "sortable" => true,
        "in_table"=>true,
        "in_form" => true,
        "is_primary" => true
    ),
    "title" => array(
        "title" => "title",
        "label" => "عنوان ارتباط",
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
        "is_require" => true,
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
    )
);

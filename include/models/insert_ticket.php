<?php
$this->models["insert_ticket"] = [];
$this->models["insert_ticket"]["id"] = "100";
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
    "description" => array(
        "title" => "description",
        "label" => "توضیحات",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "textarea", "size" => 1000,"class"=>"col-md-12")
    )
);

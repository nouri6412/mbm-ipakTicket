<?php
$this->models["insert_unit"] = [];
$this->models["insert_unit"]["id"] = "100";
$this->models["insert_unit"]["name"] = "insert_unit";
$this->models["insert_unit"]["label"] = "بخش";
$this->models["insert_unit"]["primary_key"] = "id";
$this->models["insert_unit"]["fields"] = array(
    "id" => array(
        "title" => "id",
        "label" => "شماره سیستمی بخش",
        "sortable" => true,
        "in_table"=>true,
        "in_form" => true,
        "is_primary" => true
    ),
    "title" => array(
        "title" => "title",
        "label" => "عنوان بخش",
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

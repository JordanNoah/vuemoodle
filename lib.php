<?php

defined('MOODLE_INTERNAL') || die();

function local_vue_extend_navigation(global_navigation $navigation){
    global $PAGE,$CFG;

    echo "<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet'>";
    echo "<link href='".$CFG->wwwroot."/local/vue/public/css/materialdesignicons.min.css' rel='stylesheet'>";
    echo "<link href='".$CFG->wwwroot."/local/vue/public/css/vuetify.min.css' rel='stylesheet'>";
    echo "<script src='".$CFG->wwwroot."/local/vue/public/javascript/vue.js'></script>";
    echo "<script src='".$CFG->wwwroot."/local/vue/public/javascript/vuetify.js'></script>";
}
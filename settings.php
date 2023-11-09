<?php

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {

    if ($ADMIN->fulltree) {

        $settings = new admin_settingpage('local_vue', get_string('pluginname', 'local_alerts_front'));

        $settings->add(
            new admin_setting_configcheckbox(
                'local_vue/production',
                "Production mode",
                '',
                false
            )
        );

        $ADMIN->add('localplugins', $settings);
    }
}
<?php
/*
 * Plugin Name: CHURCHANAGER
 */

register_activation_hook(
    __FILE__,
    'churchanager_up'
);
register_deactivation_hook(
    __FILE__,
    'churchanager_down'
);

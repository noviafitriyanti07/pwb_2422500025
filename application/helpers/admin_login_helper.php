<?php
if (!defined('BASEPATH')) exit ('No direct script access allowed');

function is_administrator_logged_in() {
    if (!isset($_SESSION['admin_login'])) {
    redirect(base_url('administrator/login'));
    }
}

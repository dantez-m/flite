<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Request_Model extends CI_Model
{
    var $table = 'geopos_accounts';

    public function __construct()
    {
        parent::__construct();
    }

}
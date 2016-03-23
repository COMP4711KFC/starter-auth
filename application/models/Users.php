<?php
/**
 * Created by PhpStorm.
 * User: Monet
 * Date: 3/23/2016
 * Time: 10:04 AM
 */

class Users extends MY_Model {
    public function __construct() {
        parent::__construct('users', 'id');
    }
}
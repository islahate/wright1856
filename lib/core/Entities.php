<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entities
 *
 * @author micro
 */
abstract class Entities {

    public $table = null;
    public $metadata = null;
    public $primaryKey = null;
    public $foreignKey = null;

    public abstract function tableShow();
}

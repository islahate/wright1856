<?php

class loginModel extends Model
{
    function setDefault()
    {
        if (!isset ($_SESSION ['type_compt']) || empty ($_SESSION ['type_compt'])) {

            parent::setClass("typeCompte");
            $t_compt = parent::selectByCondition("type_compte like 'nobody'");
            $_SESSION ['type_compt'] = serialize($t_compt [0]);
        }
        return true;
    }

    function permission($controller, $action)
    {
        return parent::havePermision($controller, $action);
    }
}

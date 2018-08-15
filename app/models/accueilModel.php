<?php

/**
 * Created by PhpStorm.
 * User: BBC
 * Date: 13/10/2017
 * Time: 15:56
 */
class accueilModel extends Model
{
    function getParams()
    {
        parent::setClass(parametre::class);
        return parent::selectAll();
    }

    function getMenu()
    {
        parent::setClass(categorie::class);
        return parent::selectByCondition("active = 'Y'");
    }

    function update_param($obj)
    {
        parent::setClass(categorie::class);
        return parent::update($obj);
    }

    function get_last_postes()
    {
        parent::setClass(post::class);
        return parent::selectByCondition("archived = 'N'", "titre, slug, date_creation", "date_creation DESC", 4);
    }

    function get_partenaires()
    {
        parent::setClass(partenaire::class);
        return parent::selectByCondition("active = 'Y'");
    }
}
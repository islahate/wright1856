<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/08/2018
 * Time: 08:57
 */

class accessoiresModel extends Model
{
    function get_by_slug($slug_acessoire)
    {
        parent::setClass(accessoire::class);
        $acess = parent::selectByCondition("slug like '{$slug_acessoire}' and lng = '{$_SESSION['langue']}'");

        return (!empty($acess)) ? $acess[0] : null;
    }

    function all_accessoires()
    {
        parent::setClass(accessoire::class);
        return parent::selectByCondition("lng = '{$_SESSION['langue']}'");
    }

    function product_by_collection($collection)
    {
        parent::setClass(accessoire::class);
        return parent::selectByCondition("collection like '{$collection}' and lng = '{$_SESSION['langue']}'");
    }

    function get_accessoires_by_produits($id_produit)
    {
        parent::setClass(accessoire::class);
        $result = parent::selectByCondition("id in (select id_accs from prod_acess where id_p = {$id_produit})");
        return (!empty($result)) ? $result : array();
    }

    function accessoires_by_gamme($gamme){
        parent::setClass(accessoire::class);
        return parent::selectByCondition("slug_gamme like '{$gamme}' and lng = '{$_SESSION['langue']}'");
    }

    function gammes(){
        parent::setClass(accessoire::class);
        return parent::selectGroupBy("lng = '{$_SESSION['langue']}'", 'gamme', 'gamme');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 27/07/2018
 * Time: 16:01
 */

class produitModel extends Model
{
    function get_by_slug($slug_product)
    {
        parent::setClass(produit::class);
        $prod = parent::selectByCondition("slug like '{$slug_product}' and lng = '{$_SESSION['langue']}'");

        return (!empty($prod)) ? $prod[0] : null;
    }

    function get_next($id_produit)
    {
        parent::setClass(produit::class);
        $prod = parent::selectByCondition("id > {$id_produit} and collection like (select collection from produit where id = {$id_produit})", '*', '1', '1');

        return (!empty($prod)) ? $prod[0] : null;
    }

    function get_previous($id_produit)
    {
        parent::setClass(produit::class);
        $prod = parent::selectByCondition("id < {$id_produit} and collection like (select collection from produit where id = {$id_produit})", '*', '1', '1');

        return (!empty($prod)) ? $prod[0] : null;
    }


    function all_products()
    {
        parent::setClass(produit::class);
        return parent::selectByCondition("lng = '{$_SESSION['langue']}'");
    }

    function product_by_collection($collection)
    {
        parent::setClass(produit::class);
        return parent::selectByCondition("collection like '{$collection}' and lng = '{$_SESSION['langue']}'");
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 27/07/2018
 * Time: 12:48
 */

class pagesController extends Controller
{

    function index()
    {

    }

    function the()
    {
        parent::loadModel('accueil');
        $_result['body_background'] = 'lethe_bg.png';
        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();


        $_result['sub_menu'] = $this->collection_sub_menu();

        parent::set($_result);
        parent::render('lethe');
    }

    function collections()
    {
        if ($_SESSION['langue'] == 'en') {
            $_result['collections'] = array(
                array('title' => 'Héritage', 'image' => 'collection_1.png', 'link' => 'heritage'),
                array('title' => '1001 Nuits', 'image' => 'collection_1.png', 'link' => '1001-nuits'),
                array('title' => 'Escapade', 'image' => 'collection_1.png', 'link' => 'escapade')
            );
        } else {
            $_result['collections'] = array(
                array('title' => 'Héritage', 'image' => 'collection_1.png', 'link' => 'heritage'),
                array('title' => '1001 Nuits', 'image' => 'collection_1.png', 'link' => '1001-nuits'),
                array('title' => 'Escapade', 'image' => 'collection_1.png', 'link' => 'escapade')
            );
        }

        $_result['sub_menu'] = $this->collection_sub_menu();


        parent::loadModel('produit');
        parent::loadModel('accueil');

        $_result['produits'] = $this->produit->all_products();
        $_result['body_background'] = 'bg_collections.png';

        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();


        parent::set($_result);
        parent::render('collections');
    }


    function collection($typ = null)
    {
        if (is_null($typ) || empty($typ)) {
            redirect(SITE_WEB . 'collections');
            exit;
        }

        if ($_SESSION['langue'] == 'en') {
            $_result['collections'] = array(
                array('title' => 'Héritage', 'image' => 'collection_1.png', 'link' => 'heritage'),
                array('title' => '1001 Nuits', 'image' => 'collection_1.png', 'link' => '1001-nuits'),
                array('title' => 'Escapade', 'image' => 'collection_1.png', 'link' => 'escapade')
            );
        } else {
            $_result['collections'] = array(
                array('title' => 'Héritage', 'image' => 'collection_1.png', 'link' => 'heritage'),
                array('title' => '1001 Nuits', 'image' => 'collection_1.png', 'link' => '1001-nuits'),
                array('title' => 'Escapade', 'image' => 'collection_1.png', 'link' => 'escapade')
            );
        }

        parent::loadModel('produit');
        parent::loadModel('accueil');

        $type_collection = ($typ == 'heritage')? 'Héritage':(($typ == 'escapade')? 'Escapade' : '1001 Nuits');

        $_result['produits'] = $this->produit->product_by_collection($type_collection);
        $_result['body_background'] = 'bg_collections.png';
        $_result['body_height'] = '50%';
        $_result['sub_menu'] = $this->collection_sub_menu();

        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();


        $_result['collection'] = str_replace('-', ' ', $typ);
        parent::set($_result);
        parent::render('collection');
    }

    function accessoires()
    {
        parent::loadModel('accueil');
        $_result['body_background'] = 'bg_collections.png';
        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();

        $_result['sub_menu'] = $this->collection_sub_menu();

        parent::set($_result);
        parent::render('accessoires');
    }

    function musee()
    {
        parent::loadModel('accueil');
        $_result['body_background'] = 'lethe_bg.png';
        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();


        $_result['sub_menu'] = $this->collection_sub_menu();

        parent::set($_result);
        parent::render('musee');
    }

    function our_rooms()
    {
        parent::loadModel('accueil');
        $_result['body_background'] = 'WrightTea_Bar_bg.png';
        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();


        $_result['sub_menu'] = $this->collection_sub_menu();

        parent::set($_result);
        parent::render('ourooms');
    }

    function reservation()
    {
        parent::loadModel('accueil');

        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();

        $_result['sub_menu'] = $this->collection_sub_menu();

        parent::set($_result);
        parent::render('reservation');
    }

    function detail($slug)
    {
        if (preg_match('~[a-zA-Z0-9\-]+~', $slug)) {
            parent::loadModel('produit');
            $produit = $this->produit->get_by_slug($slug);

            if (!is_null($produit)) {
                $list_images = array();
                $id = $produit->getId();


                foreach (scandir(ROOT . WEBROOT . "images" . DS . "products" . DS . $id . DS . "slider" . DS) as $image) {
                    $a = explode('.', $image);

                    if (end($a) == "png")
                        array_push($list_images, $image);
                }

                $_result['list_image'] = $list_images;

                parent::loadModel('accueil');

                foreach ($this->accueil->getParams() as $obj)
                    $_result['params'][$obj->getKey()] = $obj->getValue();

                $_result['id'] = $id;
                $_result['slug'] = $slug;
                $_result['produit'] = $produit;
                $_result['next'] = $this->produit->get_next($id);;
                $_result['previous'] = $this->produit->get_previous($id);
                $_result['sub_menu'] = $this->collection_sub_menu();

                parent::set($_result);
                parent::render('detail');
            } else {
                redirect(SITE_WEB);
                exit;
            }
        } else {
            redirect(SITE_WEB);
            exit;
        }
    }

    private function _collections()
    {
        return array('heritage' => COLLECTION_HERITAGE, '1001-nuits' => COLLECTION_1001_NUITS, 'escapade' => COLLECTION_ESCAPADE);
    }

    private function collection_sub_menu()
    {
        return array(
            'heritage' => array(
                array('slug' => 'riad-des-saadiens-tea', 'fr' => 'Riad des Saadiens Tea', 'en' => 'Riad des Saadiens Tea'),
                array('slug' => 'vallee-des-roses-tea', 'fr' => 'Vallée des roses Tea', 'en' => 'Vallée des roses Tea'),
                array('slug' => '1856-tea', 'fr' => '1856 Tea', 'en' => '1856 Tea'),
                array('slug' => 'palais-mauresque-tea', 'fr' => 'Palais Mauresque Tea', 'en' => 'Palais Mauresque Tea')
            ),

            '1001-nuits' => array(
                array('slug' => 'reine-de-saba-tea', 'fr' => 'Reine de saba Tea', 'en' => 'Reine de saba Tea'),
                array('slug' => 'majesty-tea', 'fr' => 'Majesty Tea', 'en' => 'Majesty Tea'),
                array('slug' => 'palais-ismahane-tea', 'fr' => 'Palais Ismahane Tea', 'en' => 'Palais Ismahane Tea'),
                array('slug' => 'suleyman-tea', 'fr' => 'Suleyman Tea', 'en' => 'Suleyman Tea'),
                array('slug' => 'parfum-orient-tea', 'fr' => "Parfum D'orient Tea", 'en' => "Parfum D'orient Tea"),
                array('slug' => 'layla-tea', 'fr' => 'Layla Tea', 'en' => 'Layla Tea'),
                array('slug' => 'elixir-tea', 'fr' => 'Elixir Tea', 'en' => 'Elixir Tea')
            ),

            'escapade' => array(

                array('slug' => 'grand-palais-tea', 'fr' => 'Grand Palais Tea', 'en' => 'Grand Palais Tea'),
                array('slug' => 'key-west-tea', 'fr' => 'Key West Tea', 'en' => 'Key West Tea'),
                array('slug' => 'kremlin-tea', 'fr' => 'Kremlin Tea', 'en' => 'Kremlin Tea'),
                array('slug' => 'via-condotti-tea', 'fr' => 'Via Condotti Tea', 'en' => 'Via Condotti Tea'),
                array('slug' => 'pondicherry-tea', 'fr' => 'Pondicherry Tea', 'en' => 'Pondicherry Tea'),
                array('slug' => 'kilimandjaro-tea', 'fr' => 'Kilimandjaro Tea', 'en' => 'Kilimandjaro Tea'),
                array('slug' => 'cite-interdite-tea', 'fr' => 'Cité Interdite Tea', 'en' => 'Cité Interdite Tea')
            )
        );
    }
}
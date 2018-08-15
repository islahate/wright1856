<?php

class accueilController extends Controller
{
    function index()
    {
        $_result = array();

        parent::loadModel('accueil');

        foreach ($this->accueil->getParams() as $obj)
            $_result['params'][$obj->getKey()] = $obj->getValue();

        $_result['body_background'] = 'bg_accueil.png';
        $_result['sub_menu'] = $this->collection_sub_menu();

        parent::set($_result);
        parent::render('index');
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
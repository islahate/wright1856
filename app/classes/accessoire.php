<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/08/2018
 * Time: 09:45
 */

class accessoire extends Entities
{


    private $id;
    private $slug;
    private $slug_gamme;
    private $name;
    private $gamme;
    private $slogan;
    private $collection;
    private $image;
    private $service;
    private $lng;

    function __construct($id = null, $slug = null, $slug_gamme = null, $name = null, $gamme = null, $slogan = null, $collection = null, $image = null, $service = null, $lng = null)
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->slug_gamme = $slug_gamme;
        $this->name = $name;
        $this->gamme = $gamme;
        $this->slogan = $slogan;
        $this->collection = $collection;
        $this->image = $image;
        $this->service = $service;
        $this->lng = $lng;

        $this->table = "accessoires";
        $this->primaryKey = "id";

        $this->metadata = array(
            'id' => 'id',
            'slug' => 'slug',
            'slug_gamme' => 'slug_gamme',
            'name' => 'name',
            'gamme' => 'gamme',
            'slogan' => 'slogan',
            'collection' => 'collection',
            'image' => 'image',
            'service' => 'service',
            'lng' => 'lng'
        );

    }

    /**
     * @return null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param null $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param null $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return null
     */
    public function getSlugGamme()
    {
        return $this->slug_gamme;
    }

    /**
     * @param null $slug_gamme
     */
    public function setSlugGamme($slug_gamme)
    {
        $this->slug_gamme = $slug_gamme;
    }


    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getGamme()
    {
        return $this->gamme;
    }

    /**
     * @param null $gamme
     */
    public function setGamme($gamme)
    {
        $this->gamme = $gamme;
    }

    /**
     * @return null
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param null $slogan
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    }


    /**
     * @return null
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param null $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return null
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param null $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return null
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param null $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    public function tableShow()
    {
        // TODO: Implement tableShow() method.
    }
}
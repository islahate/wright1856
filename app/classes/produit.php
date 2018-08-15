<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27/07/2018
 * Time: 14:38
 */

class produit Extends Entities
{
    private $id;
    private $description;
    private $slug;
    private $name;
    private $collection;
    private $image;
    private $ingrediant;

    function __construct($id = null, $description = null, $slug = null, $name = null, $collection = null, $image = null, $ingrediant = null)
    {
        $this->id = $id;
        $this->description = $description;
        $this->slug = $slug;
        $this->name = $name;
        $this->collection = $collection;
        $this->image = $image;
        $this->ingrediant = $ingrediant;

        $this->table = "produit";
        $this->primaryKey = "id";
        $this->metadata = array(
            'id' => 'id',
            'description' => 'description',
            'slug' => 'slug',
            'name' => 'name',
            'collection' => 'collection',
            'image' => 'image',
            'ingrediant' => 'ingrediant'
        );
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getIngrediant()
    {
        return $this->ingrediant;
    }

    /**
     * @param null $ingrediant
     */
    public function setIngrediant($ingrediant)
    {
        $this->ingrediant = $ingrediant;
    }

    public function tableShow()
    {
        // TODO: Implement tableShow() method.
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02/08/2018
 * Time: 09:17
 */

class prod_acess extends Entities
{

    private $id ;
    private $id_p ;
    private $id_accs ;

    public function __construct($id = null,$id_p = null,$id_accs = null )
    {
        $this->id = $id;
        $this->id_p = $id_p;
        $this->id_accs = $id_accs;

        $this->table = "prod_acess";
        $this->primaryKey = "id";
        $this->foreignKey = array(
            'id_p' => produit::class,'id_accs' => accessoires::class,
        );

        $this->metadata = array(
            'id' => 'id',
            'id_p' => 'id_p',
            'id_accs' => 'id_accs'
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
    public function getIdP()
    {
        return $this->id_p;
    }

    /**
     * @param null $id_p
     */
    public function setIdP($id_p)
    {
        $this->id_p = $id_p;
    }

    /**
     * @return null
     */
    public function getIdAccs()
    {
        return $this->id_accs;
    }

    /**
     * @param null $id_accs
     */
    public function setIdAccs($id_accs)
    {
        $this->id_accs = $id_accs;
    }

    public function tableShow()
    {
        // TODO: Implement tableShow() method.
    }
}
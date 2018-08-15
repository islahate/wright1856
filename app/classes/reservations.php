<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08/08/2018
 * Time: 09:36
 */

class reservations extends Entities
{
    private $id;
    private $nom;
    private $telephone;
    private $personnes;
    private $lieu;
    private $email;
    private $date_reserv;
    private $horaire;
    private $stat;
    private $date_creation;

    function __construct($id = null, $nom = null, $telephone = null, $personnes = null, $lieu = null, $email = null, $date_reserv = null, $horaire = null, $stat = null ,$date_creation = null )
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->telephone = $telephone;
        $this->personnes = $personnes;
        $this->lieu = $lieu;
        $this->email = $email;
        $this->date_reserv = $date_reserv;
        $this->horaire = $horaire;
        $this->stat = $stat;
        $this->date_creation = $date_creation;

        $this->table = "reservations";
        $this->primaryKey = "id";
        $this->metadata = array(
            'id' => 'id',
            'nom' => 'nom',
            'telephone' => 'telephone',
            'personnes' => 'personnes',
            'lieu' => 'lieu',
            'email' => 'email',
            'date_reserv' => 'date_reserv',
            'horaire' => 'horaire',
            'stat' => 'stat',
            'date_creation' => 'date_creation'
        );

    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param null $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param null $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return null
     */
    public function getPersonnes()
    {
        return $this->personnes;
    }

    /**
     * @param null $personnes
     */
    public function setPersonnes($personnes)
    {
        $this->personnes = $personnes;
    }

    /**
     * @return null
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param null $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return null
     */
    public function getDateReserv()
    {
        return $this->date_reserv;
    }

    /**
     * @param null $date_reserv
     */
    public function setDateReserv($date_reserv)
    {
        $this->date_reserv = $date_reserv;
    }

    /**
     * @return null
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * @param null $horaire
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;
    }

    /**
     * @return null
     */
    public function getStat()
    {
        return $this->stat;
    }

    /**
     * @param null $stat
     */
    public function setStat($stat)
    {
        $this->stat = $stat;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    public function tableShow()
    {
        // TODO: Implement tableShow() method.
    }
}
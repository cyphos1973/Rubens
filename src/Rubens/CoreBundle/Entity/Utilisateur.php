<?php

namespace Rubens\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class Utilisateur extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var integer
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $prenom;
    
    /**
     * @var string
     */
    protected $nom;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }    
    
    /**
    * Get credentials_expire_at
    *
    * @return \DateTime 
    */
   public function getCredentialsExpireAt()
   {
       return $this->credentialsExpireAt;
   }
}

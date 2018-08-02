<?php

namespace Projet\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\GeneralBundle\Entity\DemandesRepository")
 */
class Demandes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="typeMateriel", type="string", length=255)
     */
    private $typeMateriel;

    /**
     * @var string
     *
     * @ORM\Column(name="probleme", type="string", length=255)
     */
    private $probleme;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255)
     */
    private $localisation;


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
     * Set domaine
     *
     * @param string $domaine
     * @return Demandes
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    
        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set typeMateriel
     *
     * @param string $typeMateriel
     * @return Demandes
     */
    public function setTypeMateriel($typeMateriel)
    {
        $this->typeMateriel = $typeMateriel;
    
        return $this;
    }

    /**
     * Get typeMateriel
     *
     * @return string 
     */
    public function getTypeMateriel()
    {
        return $this->typeMateriel;
    }

    /**
     * Set probleme
     *
     * @param string $probleme
     * @return Demandes
     */
    public function setProbleme($probleme)
    {
        $this->probleme = $probleme;
    
        return $this;
    }

    /**
     * Get probleme
     *
     * @return string 
     */
    public function getProbleme()
    {
        return $this->probleme;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Demandes
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Demandes
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     * @return Demandes
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    
        return $this;
    }

    /**
     * Get localisation
     *
     * @return string 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }
}
<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 *
 * @ORM\Table(name="profil")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ProfilRepository")
 */
class Profil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="overview", type="text", nullable=true)
     */
    private $overview;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=255, nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=255, nullable=true)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="string", length=255, nullable=true)
     */
    private $skills;


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
     * Set overview
     *
     * @param string $overview
     *
     * @return Profil
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;
    
        return $this;
    }

    /**
     * Get overview
     *
     * @return string
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return Profil
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    
        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return Profil
     */
    public function setEducation($education)
    {
        $this->education = $education;
    
        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Profil
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set skills
     *
     * @param string $skills
     *
     * @return Profil
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    
        return $this;
    }

    /**
     * Get skills
     *
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }
}


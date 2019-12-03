<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\skills as Skill;

/**
 * Profil
 *
 * @ORM\Table(name="profil")
 * @ORM\Entity
 */
class Profil
{


    public function __construct()
    {
        $this->experience = new ArrayCollection();
        $this->education = new ArrayCollection();
        $this->skills = new ArrayCollection();
    }
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
     *
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\experience",mappedBy="profil")
     */
    private $experience;

    /**
     *
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\education",mappedBy="profil")
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     *
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\skills",inversedBy="skill")
     */
    private $skills;

    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Users",inversedBy="profil")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;





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
    public function setExperience(ArrayCollection $experience)
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
    public function setEducation(ArrayCollection $education)
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
     * Get skills
     *
     * @return Collection|Skill[]
     */
    public function getSkills()
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill)
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
        }
        return $this;
    }
    public function removeTag(Skill $skill)
    {
        if ($this->skills->contains($skill)) {
            $this->skills->removeElement($skill);
        }
        return $this;
    }

}


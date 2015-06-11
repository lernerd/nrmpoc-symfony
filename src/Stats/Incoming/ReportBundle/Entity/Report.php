<?php

namespace Stats\Incoming\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reports")
 */
class Report
{
    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="integer")
     */
    private $twitterShares;

    /**
     * @ORM\Column(type="integer")
     */
    private $facebookShares;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Report
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Report
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set twitterShares
     *
     * @param integer $twitterShares
     * @return Report
     */
    public function setTwitterShares($twitterShares)
    {
        $this->twitterShares = $twitterShares;

        return $this;
    }

    /**
     * Get twitterShares
     *
     * @return integer 
     */
    public function getTwitterShares()
    {
        return $this->twitterShares;
    }

    /**
     * Set facebookShares
     *
     * @param integer $facebookShares
     * @return Report
     */
    public function setFacebookShares($facebookShares)
    {
        $this->facebookShares = $facebookShares;

        return $this;
    }

    /**
     * Get facebookShares
     *
     * @return integer 
     */
    public function getFacebookShares()
    {
        return $this->facebookShares;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="schedule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ScheduleRepository")
 */
class Schedule
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
     * @var int
     *
     * @ORM\Column(name="calender_id", type="integer")
     */
    private $calenderId;

    /**
     * @ORM\ManyToOne(targetEntity="Track")
     * @ORM\JoinColumn(name="track_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $track;

    /**
     * @var int
     *
     * @ORM\Column(name="track_id", type="integer",nullable = true)
     */
    private $trackId;

    /**
     * @var \string
     *
     * @ORM\Column(name="day_date", type="date")
     */
    private $dayDate;
    //private $day_date;

    /**
     * @var \string
     *
     * @ORM\Column(name="start_time", type="string")
     */
    private $startTime;

    /**
     * @var \string
     *
     * @ORM\Column(name="end_time", type="string")
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calenderId
     *
     * @param integer $calenderId
     *
     * @return Schedule
     */
    public function setCalenderId($calenderId)
    {
        $this->calenderId = $calenderId;

        return $this;
    }

    /**
     * Get calenderId
     *
     * @return int
     */
    public function getCalenderId()
    {
        return $this->calenderId;
    }

    /**
     * Set track
     *
     * @param \AppBundle\Entity\Track $track
     *
     * @return Track
     */
    public function setTrack(\AppBundle\Entity\Track $track = null)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Get track
     *
     * @return \AppBundle\Entity\Track
     */
    public function getTrack()
    {
        return $this->track;
    }


    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }


    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Schedule
     */
    public function setDayDate($dayDate)
    {
        $this->dayDate = $dayDate;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getDayDate()
    {
        return $this->dayDate;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Schedule
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Schedule
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
     * Set trackId
     *
     * @param integer $trackId
     *
     * @return User
     */
    public function setTrackId($trackId)
    {
        $this->trackId = $trackId;
        return $this;
    }
    /**
     * Get trackId
     *
     * @return integer
     */
    public function getTrackId()
    {
        return $this->trackId;
    }
}

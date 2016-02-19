<?php

namespace CoreBundle\Entity;

/**
 * Scan
 */
class Scan
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $executedAt;

    /**
     * @var \CoreBundle\Entity\ScanData
     */
    private $scanData;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Scan
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set executedAt
     *
     * @param \DateTime $executedAt
     *
     * @return Scan
     */
    public function setExecutedAt($executedAt)
    {
        $this->executedAt = $executedAt;

        return $this;
    }

    /**
     * Get executedAt
     *
     * @return \DateTime
     */
    public function getExecutedAt()
    {
        return $this->executedAt;
    }

    /**
     * Set scanData
     *
     * @param \CoreBundle\Entity\ScanData $scanData
     *
     * @return Scan
     */
    public function setScanData(\CoreBundle\Entity\ScanData $scanData = null)
    {
        $this->scanData = $scanData;

        return $this;
    }

    /**
     * Get scanData
     *
     * @return \CoreBundle\Entity\ScanData
     */
    public function getScanData()
    {
        return $this->scanData;
    }
}

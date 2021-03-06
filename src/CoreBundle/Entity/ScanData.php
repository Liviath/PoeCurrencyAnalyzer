<?php

namespace CoreBundle\Entity;

/**
 * ScanData
 */
class ScanData
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $scanId;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var \CoreBundle\Entity\CurrencyItem
     */
    private $currencyItem;


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
     * Set scanId
     *
     * @param integer $scanId
     *
     * @return ScanData
     */
    public function setScanId($scanId)
    {
        $this->scanId = $scanId;

        return $this;
    }

    /**
     * Get scanId
     *
     * @return integer
     */
    public function getScanId()
    {
        return $this->scanId;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return ScanData
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set currencyItem
     *
     * @param \CoreBundle\Entity\CurrencyItem $currencyItem
     *
     * @return ScanData
     */
    public function setCurrencyItem(\CoreBundle\Entity\CurrencyItem $currencyItem = null)
    {
        $this->currencyItem = $currencyItem;

        return $this;
    }

    /**
     * Get currencyItem
     *
     * @return \CoreBundle\Entity\CurrencyItem
     */
    public function getCurrencyItem()
    {
        return $this->currencyItem;
    }
}

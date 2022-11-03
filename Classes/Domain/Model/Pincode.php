<?php

namespace Checkitsedo\FormPincodes\Domain\Model;

/*
 * This file is part of the "Form Pincodes" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Pincode extends AbstractEntity
{
    /**
     * @var string
     * @validate NotEmpty
     */
    protected $pincode;

    /**
     * @var bool
     */
    protected $isActive = false;

    /**
     * @var bool
     */
    protected $isUsed = false;

    public function setPincode(string $pincode)
    {
        $this->pincode = $pincode;
    }

    public function getPincode(): string
    {
        return $this->pincode;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }
  
    public function isIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsUsed(bool $isUsed)
    {
        $this->isUsed = $isUsed;
    }

    public function getIsUsed(): bool
    {
        return $this->isUsed;
    }
  
    public function isIsUsed(): bool
    {
        return $this->isUsed;
    }
}

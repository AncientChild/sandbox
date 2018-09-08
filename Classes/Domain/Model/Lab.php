<?php

namespace MyVendor\Sandbox\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Lab extends AbstractEntity
{
    /**
     * The name of the lab
     * 
     * @var string
     */
    protected $name = '';

    /**
     * Lab constructor
     * 
     * @param string $name
     */
    public function __construct($name='')
    {
        $this->setName($name);
    }

    /**
     * Sets the name of the lab
     * 
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets the name of the lab
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Doctrine\UserField\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="b_user_field", uniqueConstraints={@ORM\UniqueConstraint(name="ux_user_type_entity", columns={"ENTITY_ID", "FIELD_NAME"})})
 * @ORM\Entity
 */
class UserField
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITY_ID", type="string", length=20, nullable=true)
     */
    protected $entityId;

    /**
     * @var string
     *
     * @ORM\Column(name="FIELD_NAME", type="string", length=20, nullable=true)
     */
    protected $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_TYPE_ID", type="string", length=50, nullable=true)
     */
    protected $userTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="XML_ID", type="string", length=255, nullable=true)
     */
    protected $xmlId;

    /**
     * @var integer
     *
     * @ORM\Column(name="SORT", type="integer", nullable=true)
     */
    protected $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="MULTIPLE", type="string", length=1, nullable=false)
     */
    protected $multiple;

    /**
     * @var string
     *
     * @ORM\Column(name="MANDATORY", type="string", length=1, nullable=false)
     */
    protected $mandatory;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOW_FILTER", type="string", length=1, nullable=false)
     */
    protected $showFilter;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOW_IN_LIST", type="string", length=1, nullable=false)
     */
    protected $showInList;

    /**
     * @var string
     *
     * @ORM\Column(name="EDIT_IN_LIST", type="string", length=1, nullable=false)
     */
    protected $editInList;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_SEARCHABLE", type="string", length=1, nullable=false)
     */
    protected $isSearchable;

    /**
     * @var string
     *
     * @ORM\Column(name="SETTINGS", type="text", length=65535, nullable=true)
     */
    protected $settings;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->multiple = 'N';
        $this->mandatory = 'N';
        $this->showFilter = 'N';
        $this->showInList = 'Y';
        $this->editInList = 'Y';
        $this->isSearchable = 'N';
    }
    
    /**
     * @param string $editInList
     */
    public function setEditInList($editInList)
    {
        $this->editInList = $editInList;
    }

    /**
     * @return string
     */
    public function getEditInList()
    {
        return $this->editInList;
    }

    /**
     * @param string $entityId
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $isSearchable
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;
    }

    /**
     * @return string
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @param string $mandatory
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
    }

    /**
     * @return string
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * @param string $multiple
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
    }

    /**
     * @return string
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * @param string $settings
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
    }

    /**
     * @return string
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param string $showFilter
     */
    public function setShowFilter($showFilter)
    {
        $this->showFilter = $showFilter;
    }

    /**
     * @return string
     */
    public function getShowFilter()
    {
        return $this->showFilter;
    }

    /**
     * @param string $showInList
     */
    public function setShowInList($showInList)
    {
        $this->showInList = $showInList;
    }

    /**
     * @return string
     */
    public function getShowInList()
    {
        return $this->showInList;
    }

    /**
     * @param int $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $userTypeId
     */
    public function setUserTypeId($userTypeId)
    {
        $this->userTypeId = $userTypeId;
    }

    /**
     * @return string
     */
    public function getUserTypeId()
    {
        return $this->userTypeId;
    }

    /**
     * @param string $xmlId
     */
    public function setXmlId($xmlId)
    {
        $this->xmlId = $xmlId;
    }

    /**
     * @return string
     */
    public function getXmlId()
    {
        return $this->xmlId;
    }
}

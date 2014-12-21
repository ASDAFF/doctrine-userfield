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
 * @ORM\Table(name="b_user_field_enum", uniqueConstraints={@ORM\UniqueConstraint(name="ux_user_field_enum", columns={"USER_FIELD_ID", "XML_ID"})})
 * @ORM\Entity
 */
class UserFieldEnum
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
     * @var integer
     *
     * @ORM\Column(name="USER_FIELD_ID", type="integer", nullable=true)
     */
    protected $userFieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUE", type="string", length=255, nullable=false)
     */
    protected $value;

    /**
     * @var string
     *
     * @ORM\Column(name="DEF", type="string", length=1, nullable=false)
     */
    protected $def;

    /**
     * @var integer
     *
     * @ORM\Column(name="SORT", type="integer", nullable=false)
     */
    protected $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="XML_ID", type="string", length=255, nullable=false)
     */
    protected $xmlId;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->def = 'N';
        $this->sort = 500;
    }

    /**
     * @param string $def
     */
    public function setDef($def)
    {
        $this->def = $def;
    }

    /**
     * @return string
     */
    public function getDef()
    {
        return $this->def;
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
     * @param int $userFieldId
     */
    public function setUserFieldId($userFieldId)
    {
        $this->userFieldId = $userFieldId;
    }

    /**
     * @return int
     */
    public function getUserFieldId()
    {
        return $this->userFieldId;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
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

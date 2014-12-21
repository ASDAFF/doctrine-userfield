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
 * @ORM\Table(name="b_user_field_confirm", indexes={@ORM\Index(name="ix_b_user_field_confirm1", columns={"USER_ID", "CONFIRM_CODE"})})
 * @ORM\Entity
 */
class UserFieldConfirm
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
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     */
    protected $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CHANGE", type="datetime", nullable=false)
     */
    protected $dateChange;

    /**
     * @var string
     *
     * @ORM\Column(name="FIELD", type="string", length=255, nullable=false)
     */
    protected $field;

    /**
     * @var string
     *
     * @ORM\Column(name="FIELD_VALUE", type="string", length=255, nullable=false)
     */
    protected $fieldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="CONFIRM_CODE", type="string", length=32, nullable=false)
     */
    protected $confirmCode;

    /**
     * @param string $confirmCode
     */
    public function setConfirmCode($confirmCode)
    {
        $this->confirmCode = $confirmCode;
    }

    /**
     * @return string
     */
    public function getConfirmCode()
    {
        return $this->confirmCode;
    }

    /**
     * @param \DateTime $dateChange
     */
    public function setDateChange($dateChange)
    {
        $this->dateChange = $dateChange;
    }

    /**
     * @return \DateTime
     */
    public function getDateChange()
    {
        return $this->dateChange;
    }

    /**
     * @param string $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $fieldValue
     */
    public function setFieldValue($fieldValue)
    {
        $this->fieldValue = $fieldValue;
    }

    /**
     * @return string
     */
    public function getFieldValue()
    {
        return $this->fieldValue;
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
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

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
 * @ORM\Table(name="b_user_field_lang")
 * @ORM\Entity
 */
class UserFieldLang
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USER_FIELD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $userFieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="LANGUAGE_ID", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="EDIT_FORM_LABEL", type="string", length=255, nullable=true)
     */
    protected $editFormLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="LIST_COLUMN_LABEL", type="string", length=255, nullable=true)
     */
    protected $listColumnLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="LIST_FILTER_LABEL", type="string", length=255, nullable=true)
     */
    protected $listFilterLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="ERROR_MESSAGE", type="string", length=255, nullable=true)
     */
    protected $errorMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="HELP_MESSAGE", type="string", length=255, nullable=true)
     */
    protected $helpMessage;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->userFieldId = 0;
        $this->languageId = '';
    }

    /**
     * @param string $editFormLabel
     */
    public function setEditFormLabel($editFormLabel)
    {
        $this->editFormLabel = $editFormLabel;
    }

    /**
     * @return string
     */
    public function getEditFormLabel()
    {
        return $this->editFormLabel;
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $helpMessage
     */
    public function setHelpMessage($helpMessage)
    {
        $this->helpMessage = $helpMessage;
    }

    /**
     * @return string
     */
    public function getHelpMessage()
    {
        return $this->helpMessage;
    }

    /**
     * @param string $languageId
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    /**
     * @return string
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * @param string $listColumnLabel
     */
    public function setListColumnLabel($listColumnLabel)
    {
        $this->listColumnLabel = $listColumnLabel;
    }

    /**
     * @return string
     */
    public function getListColumnLabel()
    {
        return $this->listColumnLabel;
    }

    /**
     * @param string $listFilterLabel
     */
    public function setListFilterLabel($listFilterLabel)
    {
        $this->listFilterLabel = $listFilterLabel;
    }

    /**
     * @return string
     */
    public function getListFilterLabel()
    {
        return $this->listFilterLabel;
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
}

<?php

namespace Panda86\MasterBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    protected $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}

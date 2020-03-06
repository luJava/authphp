<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="produto")
 */

class User{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    
    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $email;

    
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $password;

}
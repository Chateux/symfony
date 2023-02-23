<?php

namespace App\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait TimestampTrait {

    /**
     * @var \DateTime $created_at
     *
     * @ORM\Column(type="datetime")
     */
    private $created_at = null;

    /**
     * @var \DateTime $created_at
     *
     * @ORM\Column(type="datetime")
     */
    private $updated_at = null;


    
















}
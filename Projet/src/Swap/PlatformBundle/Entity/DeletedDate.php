<?php

namespace Swap\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="deletedDates")
 * @ORM\Entity(repositoryClass="Swap\PlatformBundle\Repository\DeletedDateRepository")
 */
class DeletedDate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="deletedDate", type="string", nullable=true)
     */
    private $deletedDate;

    /**
     * @ORM\ManyToOne(targetEntity="Swap\PlatformBundle\Entity\Service",inversedBy="deletedDates")
     * @ORM\JoinColumn(nullable=true)
     */
    private $service;

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
     * Set deletedDate
     *
     * @param string $deletedDate
     *
     * @return DeletedDate
     */
    public function setDeletedDate($deletedDate)
    {
        $this->deletedDate = $deletedDate;

        return $this;
    }

    /**
     * Get deletedDate
     *
     * @return string
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }

    /**
     * Set service
     *
     * @param \Swap\PlatformBundle\Entity\Service $service
     *
     * @return DeletedDate
     */
    public function setService(\Swap\PlatformBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Swap\PlatformBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}

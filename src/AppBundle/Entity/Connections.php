<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="connections")
 */
class Connections
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users", inversedBy="connection")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     */
    protected $sender_id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users", inversedBy="connection")
     * @ORM\JoinColumn(name="recipient_id", referencedColumnName="id")
     */
    protected $recipient_id;

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
     * Set sender_id
     *
     * @param \AppBundle\Entity\Users $senderId
     * @return Connections
     */
    public function setSenderId(\AppBundle\Entity\Users $senderId = null)
    {
        $this->sender_id = $senderId;

        return $this;
    }

    /**
     * Get sender_id
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * Set recipient_id
     *
     * @param \AppBundle\Entity\Users $recipientId
     * @return Connections
     */
    public function setRecipientId(\AppBundle\Entity\Users $recipientId = null)
    {
        $this->recipient_id = $recipientId;

        return $this;
    }

    /**
     * Get recipient_id
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getRecipientId()
    {
        return $this->recipient_id;
    }
}

<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="connections")
 */
class Connection
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="connection")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     */
    protected $sender_id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="connection")
     * @ORM\JoinColumn(name="recipient_id", referencedColumnName="id")
     */
    protected $recipient_id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Card", inversedBy="connection")
     * @ORM\JoinColumn(name="card_id", referencedColumnName="id")
     */
    protected $card_id;

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
     * @param \AppBundle\Entity\User $senderId
     * @return Connection
     */
    public function setSenderId(User $senderId = null)
    {
        $this->sender_id = $senderId;

        return $this;
    }

    /**
     * Get sender_id
     *
     * @return \AppBundle\Entity\User
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * Set recipient_id
     *
     * @param \AppBundle\Entity\User $recipientId
     * @return Connection
     */
    public function setRecipientId(User $recipientId = null)
    {
        $this->recipient_id = $recipientId;

        return $this;
    }

    /**
     * Get recipient_id
     *
     * @return \AppBundle\Entity\User
     */
    public function getRecipientId()
    {
        return $this->recipient_id;
    }
}

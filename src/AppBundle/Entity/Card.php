<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cards")
 */
class Card implements \JsonSerializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="cards")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="cards")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category_id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $company_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $street1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $street2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $city;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $state;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $zipcode;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $country;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone_mobile;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone_business;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone_fax;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone_home;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $website;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $facebook;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $twitter;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $logo;

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
     * Set email
     *
     * @param string $email
     * @return Card
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set company_name
     *
     * @param string $companyName
     * @return Card
     */
    public function setCompanyName($companyName)
    {
        $this->company_name = $companyName;

        return $this;
    }

    /**
     * Get company_name
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Set street1
     *
     * @param string $street1
     * @return Card
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;

        return $this;
    }

    /**
     * Get street1
     *
     * @return string 
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * Set street2
     *
     * @param string $street2
     * @return Card
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;

        return $this;
    }

    /**
     * Get street2
     *
     * @return string 
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Card
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Card
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Card
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Card
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone_mobile
     *
     * @param string $phoneMobile
     * @return Card
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phone_mobile = $phoneMobile;

        return $this;
    }

    /**
     * Get phone_mobile
     *
     * @return string 
     */
    public function getPhoneMobile()
    {
        return $this->phone_mobile;
    }

    /**
     * Set phone_business
     *
     * @param string $phoneBusiness
     * @return Card
     */
    public function setPhoneBusiness($phoneBusiness)
    {
        $this->phone_business = $phoneBusiness;

        return $this;
    }

    /**
     * Get phone_business
     *
     * @return string 
     */
    public function getPhoneBusiness()
    {
        return $this->phone_business;
    }

    /**
     * Set phone_fax
     *
     * @param string $phoneFax
     * @return Card
     */
    public function setPhoneFax($phoneFax)
    {
        $this->phone_fax = $phoneFax;

        return $this;
    }

    /**
     * Get phone_fax
     *
     * @return string 
     */
    public function getPhoneFax()
    {
        return $this->phone_fax;
    }

    /**
     * Set phone_home
     *
     * @param string $phoneHome
     * @return Card
     */
    public function setPhoneHome($phoneHome)
    {
        $this->phone_home = $phoneHome;

        return $this;
    }

    /**
     * Get phone_home
     *
     * @return string 
     */
    public function getPhoneHome()
    {
        return $this->phone_home;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Card
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Card
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Card
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Card
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set user_id
     *
     * @param \AppBundle\Entity\User $userId
     * @return Card
     */
    public function setUserId(User $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set category_id
     *
     * @param \AppBundle\Entity\Category $categoryId
     * @return Card
     */
    public function setCategoryId(Category $categoryId = null)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get category_id
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'userId' => $this->getUserId(),
            'categoryId' => $this->getCategoryId(),
            'email' => $this->getEmail(),
            'companyName' => $this->getCompanyName(),
            'street1' => $this->getStreet1(),
            'street2' => $this->getStreet2(),
            'city' => $this->getCity(),
            'state' => $this->getState(),
            'country' => $this->getCountry(),
            'phone' => [
                'mobile' => $this->getPhoneMobile(),
                'business' => $this->getPhoneBusiness(),
                'fax' => $this->getPhoneFax(),
                'home' => $this->getPhoneHome()
            ],
            'social' => [
                'website' => $this->getWebsite(),
                'twitter' => $this->getTwitter(),
                'facebook' => $this->getFacebook()
            ],
            'logo' => $this->getLogo()
        ];
    }
}

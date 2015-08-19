<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cards")
 */
class Cards implements \JsonSerializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users", inversedBy="cards")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories", inversedBy="cards")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $company_name;

    /**
     * @ORM\Column(type="string")
     */
    protected $street1;

    /**
     * @ORM\Column(type="string")
     */
    protected $street2;

    /**
     * @ORM\Column(type="string")
     */
    protected $city;

    /**
     * @ORM\Column(type="string")
     */
    protected $state;

    /**
     * @ORM\Column(type="string")
     */
    protected $zipcode;

    /**
     * @ORM\Column(type="string")
     */
    protected $country;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone_mobile;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone_business;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone_fax;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone_home;

    /**
     * @ORM\Column(type="string")
     */
    protected $website;

    /**
     * @ORM\Column(type="string")
     */
    protected $facebook;

    /**
     * @ORM\Column(type="string")
     */
    protected $twitter;

    /**
     * @ORM\Column(type="string")
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @return Cards
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
     * @param \AppBundle\Entity\Users $userId
     * @return Cards
     */
    public function setUserId(Users $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set category_id
     *
     * @param \AppBundle\Entity\Categories $categoryId
     * @return Cards
     */
    public function setCategoryId(Categories $categoryId = null)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get category_id
     *
     * @return \AppBundle\Entity\Categories 
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

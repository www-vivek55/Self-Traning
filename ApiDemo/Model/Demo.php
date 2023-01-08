<?php

namespace Custom\ApiDemo\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Framework\Model\AbstractModel;
use Custom\ApiDemo\Api\Data\Custom;
use Custom\DemoDb\Model\ResourceModel\DemoMember as DemoMemberResource;
use Custom\ApiDemo\Api\Data\DemoMemberInterface;

class Demo extends AbstractExtensibleModel implements DemoMemberInterface
{
    protected function _construct()
    {
        $this->_init(DemoMemberResource::class);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(DemoMemberInterface::ID);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(DemoMemberInterface::NAME);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(DemoMemberInterface::ADDRESS);
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->getData(DemoMemberInterface::STATUS);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(DemoMemberInterface::PHONE_NUMBER);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(DemoMemberInterface::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(DemoMemberInterface::UPDATED_AT);
    }

    /**
     * @param int $id
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface|void
     */
    public function setId($id)
    {
        $this->setData(DemoMemberInterface::ID, $id);
    }

    /**
     * @param string $name
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface|void
     */
    public function setName($name)
    {
        $this->setData(DemoMemberInterface::NAME, $name);
    }

    /**
     * @param string $address
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface|void
     */
    public function setAddress($address)
    {
        // TODO: Implement setAddress() method.
        $this->setData(DemoMemberInterface::ADDRESS, $address);
    }

    /**
     * @param bool $status
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface|void
     */
    public function setStatus($status)
    {
        $this->setData(DemoMemberInterface::STATUS, $status);
    }

    /**
     * @param string $phoneNumber
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface|void
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->setData(DemoMemberInterface::PHONE_NUMBER, $phoneNumber);
    }

    /**
     * @return \Custom\ApiDemo\Api\Data\DemoMemberExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @param \Custom\ApiDemo\Api\Data\DemoMemberExtensionInterface $demoMemberExtension
     * @return $this
     */
    public function setExtensionAttributes(\Custom\ApiDemo\Api\Data\DemoMemberExtensionInterface $demoMemberExtension)
    {
        return $this->_setExtensionAttributes($demoMemberExtension);
    }
}

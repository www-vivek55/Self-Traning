<?php

namespace Custom\ApiDemo\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface DemoMemberInterface extends ExtensibleDataInterface
{
    const ID = "entity_id";
    const NAME = "name";
    const ADDRESS = "address";
    const STATUS = "status";
    const PHONE_NUMBER = "phone_number";
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getAddress();

    /**
     * @return boolean
     */
    public function getStatus();

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @param int $id
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface
     */
    public function setId($id);

    /**
     * @param string $name
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface
     */
    public function setName($name);

    /**
     * @param string $address
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface
     */
    public function setAddress($address);

    /**
     * @param boolean $status
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface
     */
    public function setStatus($status);

    /**
     * @param string $phoneNumber
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * @return \Custom\ApiDemo\Api\Data\DemoMemberExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \Custom\ApiDemo\Api\Data\DemoMemberExtensionInterface $demoMemberExtension
     * @return $this
     */
    public function setExtensionAttributes(\Custom\ApiDemo\Api\Data\DemoMemberExtensionInterface $demoMemberExtension);
}

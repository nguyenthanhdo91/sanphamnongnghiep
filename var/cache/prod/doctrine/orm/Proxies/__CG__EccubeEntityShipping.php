<?php

namespace Proxies\__CG__\Eccube\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Shipping extends \Eccube\Entity\Shipping implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'name01', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'name02', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'kana01', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'kana02', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'company_name', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'phone_number', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'postal_code', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'addr01', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'addr02', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_delivery_name', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'time_id', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_delivery_time', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_delivery_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'tracking_number', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'note', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'mail_send_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Order', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'OrderItems', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Pref', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Delivery', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'ProductClassOfTemp', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Creator'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'name01', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'name02', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'kana01', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'kana02', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'company_name', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'phone_number', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'postal_code', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'addr01', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'addr02', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_delivery_name', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'time_id', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_delivery_time', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_delivery_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'shipping_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'tracking_number', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'note', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'mail_send_date', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Order', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'OrderItems', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Pref', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Delivery', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'ProductClassOfTemp', '' . "\0" . 'Eccube\\Entity\\Shipping' . "\0" . 'Creator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Shipping $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getShippingMultipleDefaultName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMultipleDefaultName', []);

        return parent::getShippingMultipleDefaultName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromCustomerAddress(\Eccube\Entity\CustomerAddress $CustomerAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromCustomerAddress', [$CustomerAddress]);

        return parent::setFromCustomerAddress($CustomerAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function clearCustomerAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearCustomerAddress', []);

        return parent::clearCustomerAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName01($name01)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName01', [$name01]);

        return parent::setName01($name01);
    }

    /**
     * {@inheritDoc}
     */
    public function getName01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName01', []);

        return parent::getName01();
    }

    /**
     * {@inheritDoc}
     */
    public function setName02($name02)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName02', [$name02]);

        return parent::setName02($name02);
    }

    /**
     * {@inheritDoc}
     */
    public function getName02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName02', []);

        return parent::getName02();
    }

    /**
     * {@inheritDoc}
     */
    public function setKana01($kana01)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKana01', [$kana01]);

        return parent::setKana01($kana01);
    }

    /**
     * {@inheritDoc}
     */
    public function getKana01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKana01', []);

        return parent::getKana01();
    }

    /**
     * {@inheritDoc}
     */
    public function setKana02($kana02)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKana02', [$kana02]);

        return parent::setKana02($kana02);
    }

    /**
     * {@inheritDoc}
     */
    public function getKana02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKana02', []);

        return parent::getKana02();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName($companyName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', [$companyName]);

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', []);

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber($phone_number = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phone_number]);

        return parent::setPhoneNumber($phone_number);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode($postal_code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', [$postal_code]);

        return parent::setPostalCode($postal_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', []);

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddr01($addr01 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddr01', [$addr01]);

        return parent::setAddr01($addr01);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddr01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddr01', []);

        return parent::getAddr01();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddr02($addr02 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddr02', [$addr02]);

        return parent::setAddr02($addr02);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddr02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddr02', []);

        return parent::getAddr02();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingDeliveryName($shippingDeliveryName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingDeliveryName', [$shippingDeliveryName]);

        return parent::setShippingDeliveryName($shippingDeliveryName);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingDeliveryName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingDeliveryName', []);

        return parent::getShippingDeliveryName();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingDeliveryTime($shippingDeliveryTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingDeliveryTime', [$shippingDeliveryTime]);

        return parent::setShippingDeliveryTime($shippingDeliveryTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingDeliveryTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingDeliveryTime', []);

        return parent::getShippingDeliveryTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingDeliveryDate($shippingDeliveryDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingDeliveryDate', [$shippingDeliveryDate]);

        return parent::setShippingDeliveryDate($shippingDeliveryDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingDeliveryDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingDeliveryDate', []);

        return parent::getShippingDeliveryDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingDate($shippingDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingDate', [$shippingDate]);

        return parent::setShippingDate($shippingDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingDate', []);

        return parent::getShippingDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSortNo($sortNo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSortNo', [$sortNo]);

        return parent::setSortNo($sortNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSortNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortNo', []);

        return parent::getSortNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailSendDate($mailSendDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailSendDate', [$mailSendDate]);

        return parent::setMailSendDate($mailSendDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailSendDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailSendDate', []);

        return parent::getMailSendDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrderItem(\Eccube\Entity\OrderItem $OrderItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrderItem', [$OrderItem]);

        return parent::addOrderItem($OrderItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrderItem(\Eccube\Entity\OrderItem $OrderItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrderItem', [$OrderItem]);

        return parent::removeOrderItem($OrderItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItems', []);

        return parent::getOrderItems();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductOrderItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductOrderItems', []);

        return parent::getProductOrderItems();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(\Eccube\Entity\Master\Country $country = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setPref(\Eccube\Entity\Master\Pref $pref = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPref', [$pref]);

        return parent::setPref($pref);
    }

    /**
     * {@inheritDoc}
     */
    public function getPref()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPref', []);

        return parent::getPref();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelivery(\Eccube\Entity\Delivery $delivery = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelivery', [$delivery]);

        return parent::setDelivery($delivery);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelivery()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelivery', []);

        return parent::getDelivery();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductClassOfTemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductClassOfTemp', []);

        return parent::getProductClassOfTemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductClassOfTemp(\Eccube\Entity\ProductClass $ProductClassOfTemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductClassOfTemp', [$ProductClassOfTemp]);

        return parent::setProductClassOfTemp($ProductClassOfTemp);
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(\Eccube\Entity\Order $Order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$Order]);

        return parent::setOrder($Order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingNumber($trackingNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackingNumber', [$trackingNumber]);

        return parent::setTrackingNumber($trackingNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackingNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackingNumber', []);

        return parent::getTrackingNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function isShipped()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isShipped', []);

        return parent::isShipped();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeId($timeId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeId', [$timeId]);

        return parent::setTimeId($timeId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeId', []);

        return parent::getTimeId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Eccube\Entity\Member $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullNameKana()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullNameKana', []);

        return parent::getFullNameKana();
    }

}

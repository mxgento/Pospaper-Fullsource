<?php
namespace Magento\Payment\Model\Info;

/**
 * Interceptor class for @see \Magento\Payment\Model\Info
 */
class Interceptor extends \Magento\Payment\Model\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $paymentData, $encryptor, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalInformation($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAdditionalInformation');
        if (!$pluginInfo) {
            return parent::setAdditionalInformation($key, $value);
        } else {
            return $this->___callPlugins('setAdditionalInformation', func_get_args(), $pluginInfo);
        }
    }
}

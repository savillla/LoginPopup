<?php
namespace Once\LoginPopup\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper{
    const XML_PATH_ONCE_LOGINPOPUP = 'once_loginpopup/';

	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_ONCE_LOGINPOPUP .'general/'. $code, $storeId);
	}
}
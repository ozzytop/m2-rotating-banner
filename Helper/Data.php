<?php
namespace Ozzytop\Banner\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Data Helper
 */
class Data extends AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    private $httpContext;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Http\Context $httpContext
    ) {
        parent::__construct($context);
        $this->httpContext = $httpContext;
    }

    public function isLoggedIn()
    {
        $isLoggedIn = $this->httpContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
        return $isLoggedIn;
    }
}
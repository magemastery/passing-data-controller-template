<?php

declare(strict_types=1);

namespace MageMastery\FirstLayout\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

/**
 * Class View
 */
class View extends Action
{
    /**
     * @return Page
     */
    public function execute()
    {
        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('magemastery.first.layout.example');
        $block->setData('custom_parameter', 'Data from the Controller');

        return $page;
    }
}

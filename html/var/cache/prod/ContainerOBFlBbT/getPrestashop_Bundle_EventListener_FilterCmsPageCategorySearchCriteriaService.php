<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.event_listener.filter_cms_page_category_search_criteria' shared service.

return $this->services['prestashop.bundle.event_listener.filter_cms_page_category_search_criteria'] = new \PrestaShopBundle\EventListener\FilterCmsPageCategorySearchCriteriaListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

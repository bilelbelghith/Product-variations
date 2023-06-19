<?php

class ProductListingFrontController extends ProductListingFrontControllerCore
{
    public function initContent()
    {
        // Your custom code here

        // Optionally call parent method
        parent::initContent();
    }

    public function getListingLabel()
    {
        // TODO: Implement getListingLabel() method.
    }

    protected function getProductSearchQuery()
    {
        // TODO: Implement getProductSearchQuery() method.
    }

    protected function getDefaultProductSearchProvider()
    {
        // TODO: Implement getDefaultProductSearchProvider() method.
    }

    protected function prepareMultipleProductsForTemplate(array $products)
    {
        // Your custom code here.
        // ...
var_dump("TEST");
        // Optionally, you can call the parent method, if you want to keep some of its functionality
        // return parent::prepareMultipleProductsForTemplate($products);
    }
}

<?php
// override/classes/ProductAssembler.php
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;

class ProductAssembler extends ProductAssemblerCore
{
//    private $context;
//    private $searchContext;
//
//    /**
//     * ProductAssemblerCore constructor.
//     *
//     * @param \Context $context
//     */
//    public function __construct(Context $context)
//    {
//        parent::__construct($context);
//        $this->context = $context;
//        $this->searchContext = new ProductSearchContext($context);
//    }
//
//    private function addMissingProductFields(array $rawProduct)
//    {
//        $idShop = (int) $this->searchContext->getIdShop();
//        $idLang = (int) $this->searchContext->getIdLang();
//        $idProduct = (int) $rawProduct['id_product'];
//        $prefix = _DB_PREFIX_;
//
//        $nbDaysNewProduct = (int) Configuration::get('PS_NB_DAYS_NEW_PRODUCT');
//        if (!Validate::isUnsignedInt($nbDaysNewProduct)) {
//            $nbDaysNewProduct = 20;
//        }
//
//        $now = date('Y-m-d') . ' 00:00:00';
//
//        $sql = "SELECT
//                    p.*,
//                    ps.*,
//                    pl.*,
//                    sa.out_of_stock,
//                    IFNULL(sa.quantity, 0) as quantity,
//                    (DATEDIFF(
//                        p.`date_add`,
//                        DATE_SUB(
//                            '$now',
//                            INTERVAL $nbDaysNewProduct DAY
//                        )
//                    ) > 0) as new
//                FROM {$prefix}product p
//                LEFT JOIN {$prefix}product_lang pl
//                    ON pl.id_product = p.id_product
//                    AND pl.id_shop = $idShop
//                    AND pl.id_lang = $idLang
//                LEFT JOIN {$prefix}stock_available sa
//			        ON sa.id_product = p.id_product
//			        AND sa.id_shop = $idShop
//                LEFT JOIN {$prefix}product_shop ps
//			        ON ps.id_product = p.id_product
//			        AND ps.id_shop = $idShop
//			    WHERE p.id_product = $idProduct
//			    LIMIT 1";
//
//        $rows = Db::getInstance()->executeS($sql);
//        if ($rows === false) {
//            return $rawProduct;
//        }
//        echo $sql;
//        $product = array_merge($rows[0], $rawProduct);
//        if($product['product_type'] == "combinations"){
//
//        }
//        return array_merge($rows[0], $rawProduct);
//    }
//
//    public function assembleProduct(array $rawProduct) {
//        $idLang = (int) $this->searchContext->getIdLang();
//        $enrichedProduct = $this->addMissingProductFields($rawProduct);
//
//        $product = Product::getProductProperties(
//            $this->searchContext->getIdLang(),
//            $enrichedProduct,
//            $this->context);
//        $item = new Product($product['id_product']);
//        if($item->hasCombinations()){
//            $attributes = $item->getAttributeCombinations($idLang);
//            $uniqueProductAttributes = [];
//            foreach ($attributes as $attribute) {
//                if ($attribute['is_color_group'] === '1') {
//                    $key = $attribute['id_attribute'];
//                    if (!isset($uniqueProductAttributes[$key])) {
//                        $uniqueProductAttributes[$key] = $attribute;
//                    }
//                }
//            }
//            $uniqueValues = array_values($uniqueProductAttributes);
//            if(count($uniqueValues)){
//                $newProducts = array();
//                foreach ($uniqueValues as $item){
//                    $new_product = $product;
//                    $link = new Link();
//                    $product_url = $link->getProductLink((int)$product['id_product'], null, null, null, null, null, $item['id_product_attribute']);
//                    $new_product['name'] .= ' ' . $item['group_name'] . ' : ' . $item['attribute_name'];
//                    $new_product['link'] = $product_url;
//                    $newProducts[] = $new_product;
//                }
//                return $newProducts;
//            }
//
//        }
//        return $product;
//    }
}

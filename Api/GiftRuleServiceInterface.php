<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\GiftSalesRule
 * @author    Maxime Queneau <maxime.queneau@smile.fr>
 * @copyright 2019 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\GiftSalesRule\Api;

use Magento\Quote\Model\Quote;

/**
 * Class GiftRuleService
 *
 * @api
 * @author    Maxime Queneau <maxime.queneau@smile.fr>
 * @copyright 2019 Smile
 */
interface GiftRuleServiceInterface
{
    /**
     * Get available gifts
     *
     * @param Quote $quote Quote
     *
     * @return mixed[]
     *     {gift_rule_id} => [
     *         maximum_number_product => {number}
     *         code => {gift_rule_code}
     *         items => [
     *             {product_id} => [ {product_sku} ]
     *             ...
     *         ]
     *         quote_items => [
     *             {product_id} => {qty}
     *             ...
     *         ]
     *     ]
     */
    public function getAvailableGifts(Quote $quote);

    /**
     * Add gift products
     *
     * @param Quote    $quote      Quote
     * @param array    $products   Products
     * @param string   $identifier Identifier
     * @param int|null $giftRuleId Gift rule id
     *
     * @return mixed
     */
    public function addGiftProducts(Quote $quote, array $products, string $identifier, int $giftRuleId = null);

    /**
     * Replace gift products
     *
     * @param Quote    $quote      Quote
     * @param array    $products   Products
     * @param string   $identifier Identifier
     * @param int|null $giftRuleId Gift rule id
     *
     * @return mixed
     */
    public function replaceGiftProducts(Quote $quote, array $products, string $identifier, int $giftRuleId = null);
}

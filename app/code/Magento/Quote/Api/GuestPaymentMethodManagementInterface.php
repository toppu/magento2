<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Quote\Api;

/**
 * Payment method management interface for guest carts.
 */
interface GuestPaymentMethodManagementInterface
{
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Magento\Quote\Api\Data\PaymentInterface $method The payment method.
     * @return int Payment method ID.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     * @throws \Magento\Framework\Exception\State\InvalidTransitionException The billing or shipping address
     * is not set, or the specified payment method is not available.
     */
    public function set($cartId, \Magento\Quote\Api\Data\PaymentInterface $method);

    /**
     * Returns the payment method for a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @return \Magento\Quote\Api\Data\PaymentInterface  Payment method object.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     */
    public function get($cartId);

    /**
     * Lists available payment methods for a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @return \Magento\Quote\Api\Data\PaymentMethodInterface[] Array of payment methods.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     */
    public function getList($cartId);
}

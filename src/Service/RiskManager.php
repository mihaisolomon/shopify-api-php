<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service;

use Slince\Shopify\Model\Risk;
use Slince\Shopify\Service\Contracts\RiskManagerInterface;

class RiskManager extends NestCrudable implements RiskManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'risks';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Risk::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'risk';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function count($orderId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
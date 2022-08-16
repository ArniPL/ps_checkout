<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PrestaShop\Module\Checkout\Dependency\Symfony\Component\EventDispatcher\Debug;

use PrestaShop\Module\Checkout\Dependency\Symfony\Component\EventDispatcher\EventDispatcherInterface;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @method reset() Resets the trace.
 */
interface TraceableEventDispatcherInterface extends EventDispatcherInterface
{
    /**
     * Gets the called listeners.
     *
     * @return array An array of called listeners
     */
    public function getCalledListeners();
    /**
     * Gets the not called listeners.
     *
     * @return array An array of not called listeners
     */
    public function getNotCalledListeners();
}

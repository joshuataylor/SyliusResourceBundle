<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ResourceBundle\Manager\Doctrine;

use Sylius\Bundle\ResourceBundle\Manager\ResourceManagerInterface;

/**
 * Doctrine resource manager interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface DoctrineResourceManagerInterface extends ResourceManagerInterface
{
    function getObjectManager();
}
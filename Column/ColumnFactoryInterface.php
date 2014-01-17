<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Column;

/**
 * Interface ColumnFactoryInterface
 *
 * @package Sg\DatatablesBundle\Column
 */
interface ColumnFactoryInterface
{
    /**
     * Returns a column.
     *
     * @param string $property An entity's property
     * @param string $name     The name of the column class
     *
     * @throws \Exception
     * @return ColumnInterface
     */
    public function createColumnByName($property, $name);
}
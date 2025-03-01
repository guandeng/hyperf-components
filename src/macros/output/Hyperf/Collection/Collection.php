<?php

declare(strict_types=1);
/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */

namespace Hyperf\Collection;

class Collection
{
    /**
     * Determine if the collection contains a single element.
     * @deprecated since v3.1, use `containsOneItem` instead, will be removed in v3.2.
     * @return bool
     */
    public function isSingle()
    {
    }

    /**
     * Collapse the collection of items into a single array while preserving its keys.
     *
     * @return static<mixed, mixed>
     */
    public function collapseWithKeys()
    {
    }
}

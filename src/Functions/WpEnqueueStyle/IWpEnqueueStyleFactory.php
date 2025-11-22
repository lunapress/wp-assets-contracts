<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Functions\WpEnqueueStyle;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Functions\WpEnqueueStyle\IWpEnqueueStyleFunction;

defined('ABSPATH') || exit;

interface IWpEnqueueStyleFactory extends IFactory
{
    public function make(string $handle): IWpEnqueueStyleFunction;
}

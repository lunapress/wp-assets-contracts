<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgsFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDepsWpFunctionArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IIWpEnqueueScriptModuleDeps;
}

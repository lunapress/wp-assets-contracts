<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgsIFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDepsFactory extends IWpFunctionArgsIFactory
{
    public function make(): IIWpEnqueueScriptModuleDeps;
}

<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleIFactory extends IFactory
{
    public function make(string $id): IWpEnqueueScriptModuleFunctionI;
}

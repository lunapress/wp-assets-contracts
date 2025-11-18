<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgsIFactory;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgsFactory extends IWpFunctionArgsIFactory
{
    public function make(): IIWpRegisterScriptArgs;
}

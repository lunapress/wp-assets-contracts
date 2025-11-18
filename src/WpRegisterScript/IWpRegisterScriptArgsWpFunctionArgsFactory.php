<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgsFactory;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgsWpFunctionArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IIWpRegisterScriptArgs;
}

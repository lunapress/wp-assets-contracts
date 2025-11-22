<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Functions\WpRegisterScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgsFactory;
use LunaPress\Wp\AssetsContracts\Functions\WpRegisterScript\IWpRegisterScriptArgs;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpRegisterScriptArgs;
}

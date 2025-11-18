<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpRegisterScriptIFactory extends IFactory
{
    public function make(string $handle, string|false $src): IWpRegisterScriptFunctionI;
}

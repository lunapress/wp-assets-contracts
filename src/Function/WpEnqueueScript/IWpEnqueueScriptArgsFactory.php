<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Functions\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Enum\ScriptStrategy;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptArgsFactory extends IFactory
{
    public function make(ScriptStrategy $strategy, bool $inFooter): IWpEnqueueScriptArgs;
}

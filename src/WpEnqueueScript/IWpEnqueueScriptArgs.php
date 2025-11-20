<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\Wp\AssetsContracts\WpEnqueueScript\Enum\WpEnqueueScriptStrategy;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptArgs extends IWpFunctionArgs
{
    public function strategy(WpEnqueueScriptStrategy|WpArgState $strategy): self;
    public function inFooter(bool|WpArgState $inFooter): self;

    public function getStrategy(): WpEnqueueScriptStrategy|WpArgState;
    public function getInFooter(): bool|WpArgState;
}

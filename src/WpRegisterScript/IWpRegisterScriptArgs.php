<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgs extends IWpFunctionArgs
{
    public function strategy(string|WpArgState $strategy): self;
    public function inFooter(bool|WpArgState $inFooter): self;

    public function getStrategy(): string|WpArgState;
    public function isInFooter(): bool|WpArgState;
}

<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpArray;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgs extends IWpFunctionArgs
{
    public function strategy(string|WpUnset $strategy): self;
    public function inFooter(bool|WpUnset $inFooter): self;

    public function getStrategy(): string|WpUnset;
    public function isInFooter(): bool|WpUnset;
}

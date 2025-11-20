<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;
use LunaPress\Wp\AssetsContracts\IAssetDependency;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptFunction extends IExecutableFunction
{
    public function getHandle(): string;
    public function getSrc(): string|WpArgState;

    /**
     * @return IAssetDependency[]|WpArgState
     */
    public function getDeps(): array|WpArgState;
    public function getVersion(): string|bool|WpArgState;
    /**
     * @return IWpEnqueueScriptArgs|WpArgState|bool
     */
    public function getArgs(): IWpEnqueueScriptArgs|WpArgState|bool;

    public function handle(string $handle): self;
    public function src(string|WpArgState $src): self;
    /**
     * @param IAssetDependency[]|WpArgState $deps
     * @return self
     */
    public function deps(array|WpArgState $deps): self;
    public function version(string|bool|WpArgState $version): self;
    public function args(IWpEnqueueScriptArgs|WpArgState|bool $args): self;
}

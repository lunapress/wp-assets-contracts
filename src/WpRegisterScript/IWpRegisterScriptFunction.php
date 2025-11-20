<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\AssetsContracts\IAssetDependency;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpRegisterScriptFunction extends IExecutableFunction
{
    public function handle(string $handle): self;

    public function src(string|false $src): self;

    /**
     * @param IAssetDependency[]|WpArgState $deps
     * @return self
     */
    public function deps(array|WpArgState $deps): self;

    public function version(string|bool|null|WpArgState $version): self;

    public function args(IWpRegisterScriptArgs|WpArgState|bool $args): self;

    public function getHandle(): string;
    public function getSrc(): string|false;
    /**
     * @return IAssetDependency[]|WpArgState
     */
    public function getDeps(): array|WpArgState;
    public function getVersion(): string|bool|null|WpArgState;
    /**
     * @return IWpRegisterScriptArgs|WpArgState|bool
     */
    public function getArgs(): IWpRegisterScriptArgs|WpArgState|bool;

    public function executeWithArgs(array $args): bool;
}

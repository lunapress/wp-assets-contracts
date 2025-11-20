<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleFunction extends IExecutableFunction
{
    public function id(string $id): self;

    public function src(string|WpArgState $src): self;

    /**
     * @param IWpEnqueueScriptModuleDep[]|WpArgState $deps
     * @return self
     */
    public function deps(array|WpArgState $deps): self;

    public function version(string|false|null|WpArgState $version): self;

    public function getId(): string;
    public function getSrc(): string|WpArgState;

    /**
     * @return IWpEnqueueScriptModuleDep[]|WpArgState
     */
    public function getDeps(): array|WpArgState;
    public function getVersion(): string|false|null|WpArgState;

    public function executeWithArgs(array $args): void;
}

<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueStyle;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\AssetsContracts\IAssetDependency;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpEnqueueStyleFunction extends IExecutableFunction
{
    public function handle(string $handle): self;

    public function src(string|WpArgState $src): self;

    /**
     * @param IAssetDependency[]|WpArgState $deps
     * @return self
     */
    public function deps(array|WpArgState $deps): self;

    public function version(string|bool|null|WpArgState $version): self;

    public function media(string|WpArgState $media): self;

    public function getHandle(): string;
    public function getSrc(): string|WpArgState;

    /**
     * @return IAssetDependency[]|WpArgState
     */
    public function getDeps(): array|WpArgState;
    public function getVersion(): string|bool|null|WpArgState;
    public function getMedia(): string|WpArgState;

    public function executeWithArgs(array $args): void;
}

<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Entity\AssetDependency;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Entity\AssetDependency\IAssetDependency;

defined('ABSPATH') || exit;

interface IAssetDependencyFactory extends IFactory
{
    public function make(string $handle): IAssetDependency;
}

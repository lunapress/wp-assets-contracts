<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule\Enum\WpEnqueueScriptModuleImport;
use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpArgState;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDep extends IWpFunctionArgs
{
    public function id(string $id): self;

    public function import(WpEnqueueScriptModuleImport|WpArgState $import): self;

    public function getId(): string;

    public function getImport(): WpEnqueueScriptModuleImport|WpArgState;
}

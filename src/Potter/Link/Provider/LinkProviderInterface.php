<?php

declare(strict_types=1);

namespace Potter\Link\Provider;

use \Psr\Link\LinkProviderInterface as PsrLinkProviderInterface, \Traversable;

interface LinkProviderInterface extends PsrLinkProviderInterface
{
    public function getLinks(): array|Traversable;
    public function getLinksByRel(string $rel): array|Traversable;
}
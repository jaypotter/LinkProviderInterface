<?php

declare(strict_types=1);

namespace Potter\Link\Provider;

use \Psr\Link\{
    LinkInterface,
    LinkProviderInterface as PsrLinkProviderInterface
};
use \Traversable;

interface LinkProviderInterface extends PsrLinkProviderInterface
{
    public function getFirstLink(): LinkInterface;
    public function getLastLink(): LinkInterface;
    public function getLinks(): array|Traversable;
    public function getLinksByRel(string $rel): array|Traversable;
    public function hasLink(LinkInterface $link): bool;
}
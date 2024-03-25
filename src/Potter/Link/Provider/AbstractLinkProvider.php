<?php

declare(strict_types=1);

namespace Potter\Link\Provider;

use \Traversable;

abstract class AbstractLinkProvider implements LinkProviderInterface
{
    abstract public function getLinks(): array|Traversable;
    abstract public function getLinksByRel(string $rel): array|Traversable;
    abstract public function hasLink(LinkInterface $link): bool;
    abstract protected function setLinks(array|Traversable $links): void;
}

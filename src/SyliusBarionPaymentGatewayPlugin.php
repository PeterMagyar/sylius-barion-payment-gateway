<?php

declare(strict_types=1);

namespace GoncziAkos\SyliusBarionPaymentGateway;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusBarionPaymentGatewayPlugin extends Bundle
{
    use SyliusPluginTrait;
}

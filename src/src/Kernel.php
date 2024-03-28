<?php declare(strict_types=1);

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

/**
 * Kernel.
 *
 * @package   App
 * @copyright Copyright (c) 2024, Robert Durica
 * @since     2024-03-21
 */
class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}

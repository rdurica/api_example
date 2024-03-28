<?php declare(strict_types=1);

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Post;
use App\State\DailyQuestStateProcessor;

/**
 * DailyQuest.
 *
 * @package   App\ApiResource
 * @copyright Copyright (c) 2024, Robert Durica
 * @since     2024-03-23
 */
#[ApiResource(
    shortName: 'Example',
    description: 'Example description',
    operations: [
        new Post(processor: DailyQuestStateProcessor::class,),
    ],

)]
final class DailyQuest
{
    public string $start;
}

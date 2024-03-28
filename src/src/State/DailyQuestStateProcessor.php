<?php declare(strict_types=1);

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * DailyQuestStateProcessor.
 *
 * @package   App\State
 * @copyright Copyright (c) 2024, Robert Durica
 * @since     2024-03-23
 */
class DailyQuestStateProcessor implements ProcessorInterface
{
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): JsonResponse
    {
        // Handle the state
        // dd($data->start);
        $responseData = [
            'message' => 'State processed successfully.'
        ];

        return new JsonResponse($responseData, Response::HTTP_CREATED);
    }
}

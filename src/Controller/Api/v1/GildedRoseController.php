<?php

namespace App\Controller\Api\v1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Items;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

/** @Route("/api/v1/gilded/rose") */
class GildedRoseController extends AbstractController
{
    /**
     * List the rewards of the specified user.
     *
     * This call takes into account all confirmed awards, but not pending or refused awards.
     *
     * @Route("", methods={"POST"}, name="app_api_v1_gilded_rose")
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns the rewards of an user",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Items::class, groups={"full"}))
     *     )
     * )
     *
     * @OA\Parameter(
     *     name="order",
     *     in="query",
     *     description="The field used to order rewards",
     *     @OA\Schema(type="string")
     * )
     */
    public function index(): Response
    {
        return new JsonResponse(['1111']);
    }
}

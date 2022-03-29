<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Items;

class ItemsService
{
    /** @var EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return Items[] array
     */
    public function findAll(): array
    {
        $itemsRepository = $this->entityManager->getRepository(Items::class);
        return $itemsRepository->findAll();
    }
}

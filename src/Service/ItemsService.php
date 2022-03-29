<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Items;

class ItemsService
{
    private EntityManagerInterface $entityManager;

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

    public function save(Items $items)
    {
        $this->entityManager->persist($items);
        $this->entityManager->flush();
    }
}

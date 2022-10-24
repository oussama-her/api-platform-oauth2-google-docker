<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $customer = new Customer();
        $customer->setEmail("dhmouss22@gmail.com");
        $customer->setPassword("1234");
        $customer->setRoles(['ROLE_CUSTOMER']);
        $manager->persist($customer);

        $manager->flush();
    }
}

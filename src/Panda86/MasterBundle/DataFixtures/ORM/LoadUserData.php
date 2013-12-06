<?php

namespace Panda86\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Panda86\MasterBundle\DataFixtures\YamlLoader;
use Panda86\MasterBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $users = YamlLoader::load('MasterAdmin/users.yml');

        foreach($users as $user)
        {
            $admin = new User();
            $admin->setEnabled(true);
            $admin->addRole('ROLE_ADMIN'); # assign admin role
            $admin->setUsername($user['username']);
            $admin->setEmail($user['email']);
            $admin->setPlainPassword($user['password']);


            $manager->persist($admin);
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
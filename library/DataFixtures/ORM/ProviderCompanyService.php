<?php

namespace DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Ivoz\Provider\Domain\Model\CompanyService\CompanyService;

class ProviderCompanyService extends Fixture implements DependentFixtureInterface
{
    use \DataFixtures\FixtureHelperTrait;

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->disableLifecycleEvents($manager);
        $manager->getClassMetadata(CompanyService::class)->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);
    
        $item1 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item1->setCode("94");
        $item1->setCompany($this->getReference('_reference_ProviderCompany1'));
        $item1->setService($this->getReference('_reference_ProviderService1'));
        $this->addReference('_reference_ProviderCompanyService1', $item1);
        $this->sanitizeEntityValues($item1);
        $manager->persist($item1);

        $item2 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item2->setCode("95");
        $item2->setCompany($this->getReference('_reference_ProviderCompany1'));
        $item2->setService($this->getReference('_reference_ProviderService2'));
        $this->addReference('_reference_ProviderCompanyService2', $item2);
        $this->sanitizeEntityValues($item2);
        $manager->persist($item2);

        $item3 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item3->setCode("93");
        $item3->setCompany($this->getReference('_reference_ProviderCompany1'));
        $item3->setService($this->getReference('_reference_ProviderService3'));
        $this->addReference('_reference_ProviderCompanyService3', $item3);
        $this->sanitizeEntityValues($item3);
        $manager->persist($item3);

        $item4 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item4->setCode("00");
        $item4->setCompany($this->getReference('_reference_ProviderCompany1'));
        $item4->setService($this->getReference('_reference_ProviderService4'));
        $this->addReference('_reference_ProviderCompanyService4', $item4);
        $this->sanitizeEntityValues($item4);
        $manager->persist($item4);

        $item5 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item5->setCode("94");
        $item5->setCompany($this->getReference('_reference_ProviderCompany2'));
        $item5->setService($this->getReference('_reference_ProviderService1'));
        $this->addReference('_reference_ProviderCompanyService5', $item5);
        $this->sanitizeEntityValues($item5);
        $manager->persist($item5);

        $item6 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item6->setCode("95");
        $item6->setCompany($this->getReference('_reference_ProviderCompany2'));
        $item6->setService($this->getReference('_reference_ProviderService2'));
        $this->addReference('_reference_ProviderCompanyService6', $item6);
        $this->sanitizeEntityValues($item6);
        $manager->persist($item6);

        $item7 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item7->setCode("93");
        $item7->setCompany($this->getReference('_reference_ProviderCompany2'));
        $item7->setService($this->getReference('_reference_ProviderService3'));
        $this->addReference('_reference_ProviderCompanyService7', $item7);
        $this->sanitizeEntityValues($item7);
        $manager->persist($item7);

        $item8 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item8->setCode("00");
        $item8->setCompany($this->getReference('_reference_ProviderCompany2'));
        $item8->setService($this->getReference('_reference_ProviderService4'));
        $this->addReference('_reference_ProviderCompanyService8', $item8);
        $this->sanitizeEntityValues($item8);
        $manager->persist($item8);

        $item9 = $this->createEntityInstanceWithPublicMethods(CompanyService::class);
        $item9->setCode("21");
        $item9->setCompany($this->getReference('_reference_ProviderCompany1'));
        $item9->setService($this->getReference('_reference_ProviderService4'));
        $this->addReference('_reference_ProviderCompanyService9', $item9);
        $this->sanitizeEntityValues($item9);
        $manager->persist($item9);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            ProviderCompany::class,
            ProviderService::class
        );
    }
}

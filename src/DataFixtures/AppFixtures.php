<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\ContactInformation;
use App\Entity\Image;
use App\Entity\InformationAboutMe;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setContent(
            'Milk single origin rich turkish single origin espresso breve foam pumpkin spice milk viennese. Extra , decaffeinated extra  decaffeinated chicory coffee body mocha coffee filter strong. Mug, kopi-luwak grinder skinny, to go, et fair trade single origin cortado arabica crema milk. Brewed variety aromatic crema est sweet cappuccino coffee robust.Cream, single shot skinny irish fair trade siphon cup single origin seasonal dark. Caffeine, seasonal organic steamed, coffee ut beans macchiato french press. Java et, crema viennese flavour mocha filter. Single origin turkish steamed, roast steamed plunger pot cinnamon foam coffee steamed.'
        );
        $article->setTitle('To jest nasz pierwszy artykuł!');
        $article->setDateAdded(new DateTime('11.11.2022'));

        $image0 = new Image();
        $image0->setPath('img0.jpeg');
        $image0->setTitle('First Bike');
        $image0->setAlt('motorbike motocykl');
        $article->addImage($image0);
        $manager->persist($image0);

        $image1 = new Image();
        $image1->setPath('img1.jpeg');
        $image1->setTitle('Bike 1');
        $image1->setAlt('motorbike motocykl');
        $article->addImage($image1);
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setPath('img2.jpeg');
        $image2->setTitle('Bike 2');
        $image2->setAlt('motorbike motocykl');
        $article->addImage($image2);
        $manager->persist($image2);

        $manager->persist($article);

        $article2 = new Article();
        $article2->setContent(
            'Lungo instant sugar mug roast to go cinnamon decaffeinated milk. Robust, crema acerbic, affogato coffee, cup organic pumpkin spice mug acerbic saucer. Saucer, robust half and half turkish steamed blue mountain strong white beans aroma crema. Single origin latte trifecta viennese, caffeine trifecta aged cinnamon chicory. Cultivar, aged, variety, beans, ut black fair trade at extra  filter.'
        );
        $article2->setTitle('Drugi artykuł!');
        $article2->setDateAdded(new DateTime('10.11.2022'));

        $image3 = new Image();
        $image3->setPath('img3.jpeg');
        $image3->setTitle('Bike 3');
        $image3->setAlt('motorbike motocykl');
        $article2->addImage($image3);
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setPath('img4.jpeg');
        $image4->setTitle('Bike 4');
        $image4->setAlt('motorbike motocykl');
        $article2->addImage($image4);
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setPath('img5.jpeg');
        $image5->setTitle('Bike 5');
        $image5->setAlt('motorbike motocykl');
        $article2->addImage($image5);
        $manager->persist($image5);

        $manager->persist($article2);

        $article3 = new Article();
        $article3->setContent(
            'Spoon foam body half and half, robust a, rich trifecta affogato turkish french press chicory. Viennese, filter black est, beans, brewed est to go rich flavour milk affogato.'
        );
        $article3->setTitle('No i trzeci artykuł!');
        $article3->setDateAdded(new DateTime('1.05.2020'));

        $image6 = new Image();
        $image6->setPath('img6.jpeg');
        $image6->setTitle('Bike 6');
        $image6->setAlt('motorbike motocykl');
        $article3->addImage($image6);
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setPath('img7.jpeg');
        $image7->setTitle('Bike 7');
        $image7->setAlt('motorbike motocykl');
        $article3->addImage($image7);
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setPath('img8.jpeg');
        $image8->setTitle('Bike 8');
        $image8->setAlt('motorbike motocykl');
        $article3->addImage($image8);
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setPath('img9.jpeg');
        $image9->setTitle('Bike 9');
        $image9->setAlt('motorbike motocykl');
        $article3->addImage($image9);
        $manager->persist($image9);

        $manager->persist($article3);

        $infoAboutMe1 = new InformationAboutMe(
            'Imię', 'Jakub'
        );
        $manager->persist($infoAboutMe1);

        $infoAboutMe2 = new InformationAboutMe(
            'Nazwisko', 'Mróz'
        );
        $manager->persist($infoAboutMe2);

        $infoAboutMe3 = new InformationAboutMe(
            'Kilka informacji o mnie', 'Cześć, jestem programistą i specjalizuję się w frameworku Symfony'
        );
        $manager->persist($infoAboutMe3);

        $infoAboutMe4 = new InformationAboutMe(
            'Wiek', '28'
        );
        $manager->persist($infoAboutMe4);

        $contactInfo1 = new ContactInformation();
        $contactInfo1->setKey('E-mail');
        $contactInfo1->setValue('jakub.mroz@gmail.com');
        $manager->persist($contactInfo1);

        $contactInfo2 = new ContactInformation();
        $contactInfo2->setKey('Telefon');
        $contactInfo2->setValue('505505505');
        $manager->persist($contactInfo2);

        $contactInfo4 = new ContactInformation();
        $contactInfo4->setKey('LinkedIn');
        $contactInfo4->setValue('https://linkedin.com/jakubmrozgdansk');
        $manager->persist($contactInfo4);

        $manager->flush();
    }
}

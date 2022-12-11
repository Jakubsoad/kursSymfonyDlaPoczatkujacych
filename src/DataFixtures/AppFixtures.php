<?php

namespace App\DataFixtures;

use App\Entity\Article;
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
        $manager->persist($article);

        $article2 = new Article();
        $article2->setContent(
            'Lungo instant sugar mug roast to go cinnamon decaffeinated milk. Robust, crema acerbic, affogato coffee, cup organic pumpkin spice mug acerbic saucer. Saucer, robust half and half turkish steamed blue mountain strong white beans aroma crema. Single origin latte trifecta viennese, caffeine trifecta aged cinnamon chicory. Cultivar, aged, variety, beans, ut black fair trade at extra  filter.'
        );
        $article2->setTitle('Drugi artykuł!');
        $article2->setDateAdded(new DateTime('10.11.2022'));
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setContent(
            'Spoon foam body half and half, robust a, rich trifecta affogato turkish french press chicory. Viennese, filter black est, beans, brewed est to go rich flavour milk affogato.'
        );
        $article3->setTitle('No i trzeci artykuł!');
        $article->setDateAdded(new DateTime('1.05.2020'));
        $manager->persist($article3);

        $manager->flush();
    }
}

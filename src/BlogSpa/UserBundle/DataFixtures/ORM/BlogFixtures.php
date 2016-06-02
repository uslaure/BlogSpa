<?php
namespace BlogSpa\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogSpa\UserBundle\Entity\Blog;

Class BlogFixtures implements FixtureInterface {

	public function load(ObjectManager $manager) {
		$blog1 = new Blog();
        $blog1->setTitle('Qu\'est-ce-que la SPA ?');
        $blog1->setBlog('La Société protectrice des animaux ou S.P.A. est une association privée créée en 1845 et est reconnue d\'utilité publique en 1860.

La SPA agit quotidiennement pour assurer la protection et la défense des animaux en France. Elle gère des refuges, des fourrières, ainsi que des dispensaires de soin aux animaux. Elle intervient aussi contre les mauvais traitements aux animaux à l\'aide d\'un réseau de délégués-enquêteurs bénévoles et d\'inspecteurs qui travaillent en lien avec la direction juridique de la SPA afin de poursuivre en justice les personnes suspectées de mauvais traitement envers les animaux.
La S.P.A. compte 146 000 donateurs chaque année, 21000 adhérents, 3 000 bénévoles, 600 salariés, et 1 000 délégués-enquêteurs. 55 refuges accueillant et hébergeant des animaux sont répartis dans toute la France, ainsi que 12 dispensaires pour soigner les animaux, une Cellule Anti-Trafic, et 16 Club jeunes pour sensibiliser les adolescents à la protection animale7.

En 2014, 43 083 animaux ont trouvé refuge à la S.P.A., 34 365 ont été adoptés, 130 000 ont bénéficié de soins, 3 271 ont retrouvé leur propriétaire, 2 324 enquêtes ont été menées, 2 678 visites de suivi post-adoption ont été effectuées, 439 ont été déposées, et 1 267 dossiers d\'aides financières ont été traités7.');
        $blog1->setImage('logospa.png');
        $blog1->setAuthor('USLaure');
        $blog1->setTags('blog, bienvenue, SPA,');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('Que sont-ils devenus?');
        $blog2->setBlog('Chaque année, 100.000 animaux (principalement des chiens et des chats sont abandonnés chaque année). C\'est donc plus de 40 000 animaux qui finissent dans nos différents refuges de la SPA. Nous avons constaté que le pique d\'abandons se situe à l\'approche de l\'été. Ces braves bêtes finissent donc appeurés à la SPA en attendant un nouveau foyer. Nous avons pris le cas de Calzino,un croisé labrador arrivé chez nous en mai 2013, agé d\'à peine un an après avoir été découvert errant dans Paris. Après avoir passé plusieurs mois au sein du refuge Grammont à Genevilliers (92), Calzino rebaptisé Scott a été adopté par une famille. Depuis, il a reprit du poil de la bête, est très heureux au sein de sa nouvelle famille qu\'il a très vite adopté. Le cas de Scott n\'est pas anaudin car il y a chaque année 16.000 chiens et 13.000 chats adoptés chaque année. Cependant la SPA doit faire face au fléau des différents abandons quotidiens. C\'est pour cela, que les différents refuges organisent plusieurs fois par an des week-end portes ouvertes.  
');
        $blog2->setImage('scott.jpg');
        $blog2->setAuthor('USLaure');
        $blog2->setTags('Spa, abandon, refuge, scott, adopter');
        $blog2->setCreated(new \DateTime());
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Conseils: L\'alimentation des chiens');
        $blog3->setBlog('
Très jeune, le chien devra être habitué à manger à heures régulières, dans un plat toujours placé au même endroit. Pour de simples raisons d’hygiène, mais aussi pour éviter toute sollicitation, il ne devra jamais manger en même temps que ses maîtres et il faudra éviter de lui faire partager les restes du repas. L’accès à la nourriture fait en effet partie des prérogatives des dominants, le chien ne doit pas mendier à table. Pour autant, il ne faut pas chercher à lui retirer son repas.
Le chien peut fort bien manger le même type d’alimentation durant toute sa vie. Toutefois, si vous constatez une certaine lassitude, n’hésitez pas à varier ses repas et à changer de recette. Une transition alimentaire progressive est toujours conseillée : il conviendra de mélanger très progressivement l’ancien aliment au nouveau. Ce peut être nécessaire quand l\’animal vieillit ou qu\’il présente une maladie qui impose une modification de la formule de son aliment.
Les os sont bons pour la santé, car ils fournissent du calcium et du phosphore a l’organisme. Même si ces substances figurent dans les aliments préparés industriellement, il n’est pas interdit d’offrir un os à votre chien, en guise de récompense. Cependant, tous ne sont pas recommandables. En règle générale, il faut se méfier des os friables. Ainsi, les os de poulet et de lapin donnés tel quel sont proscrits. Quand l’animal les croque, ils se fragmentent sous forme d’esquilles et peuvent provoquer des blessures à l’intestin, qui peuvent entraîner des perforations très graves, ou former des bouchons. L’idéal, c’est un gros os de boeuf, de veau ou de mouton que le chien pourra mordiller et ronger sans danger.
Comme tout être vivant, l’animal doit trouver dans son alimentation quotidienne les éléments indispensables pour couvrir un ensemble de besoins :

        les besoins d’entretien, correspondant aux dépenses pour les fonctions vitales et d’activité. 
        les besoins de production, nécessaires à la croissance, au travail ou à la reproduction.

Les nutriments apportés par les aliments sont essentiellement des sources d’énergie (pour les lipides et les glucides) et des nutriments de construction (pour les protéines et les sels minéraux). Ils sont utilisés en association avec d’autres éléments indispensables, tels que les vitamines, les oligo-éléments et l’eau. Tous les nutriments nécessaires à la vie doivent figurer dans la ration journalière de manière très équilibrée.');
        $blog3->setImage('gamelle.jpg');
        $blog3->setAuthor('USLaure');
        $blog3->setTags('spa, nutrition, alimentation, conseils');
        $blog3->setCreated(new \DateTime());
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('Conseils: Bien comprendre votre chat');
        $blog4->setBlog('Le langage des félins est composé d\'un grand nombre d\'expressions et de sons particuliers. En observant votre compagnon, vous apprendrez à déchiffrer son langage personnel car chaque chat a son caractère. Néanmoins, nous allons vous aider à mieux le comprendre et à communiquer avec lui. Le miaulement constitue une demande. Suivant sa tonalité, il se fait chuchotement ou protestation.

Votre chat vocalise en boucle, avec peu de silences entre deux miaulements ? C\'est pour lui une situation plutôt positive, excitante.
Votre chat émet des vocalises courtes espacées par de longs silences ? C’est une façon de lancer un SOS. D’ailleurs, les chatons utilisent ce signal pour alerter leur mère.
Les ronronnements sont associés au plaisir le plus souvent mais aussi parfois à l\'anxiété : le chat ronronne alors pour se rassurer lui-même.

Les sifflements ou crachements sont la manifestation de la colère ou de la peur : dans ce cas, mieux vaut le laisser en paix.

Il arrive que votre chat présente un claquement de dents associé à un miaulement ? Ce comportement est caractéristique d’un chat qui regarde une proie. Votre chat le fait peut-être lorsque vous lui préparez son repas. Sentiment de peur : Quand la peur s\'installe, les oreilles se couchent, le cou est rentré, la queue est sur le sol, agitée de petits mouvements nerveux. Cette agitation de la queue signifie souvent un début d\'attaque alors attention !

Sentiment de colère : Avec la colère, le corps s\'élève, le poil se dresse, la queue dessine un arc, les crocs sont sortis et les griffes aussi !');
        $blog4->setImage('chat.jpg');
        $blog4->setAuthor('USLaure');
        $blog4->setTags('comportement, chat, peur, anxiété');
        $blog4->setCreated(new \DateTime());
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

        // $blog5 = new Blog();
        // $blog5->setTitle('You\'re either a one or a zero. Alive or dead');
        // $blog5->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        // $blog5->setImage('one_or_zero.jpg');
        // $blog5->setAuthor('Gary Winston');
        // $blog5->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        // $blog5->setCreated(new \DateTime("2011-04-25 15:34:18"));
        // $blog5->setUpdated($blog5->getCreated());
        // $manager->persist($blog5);

        $manager->flush();
	}
}
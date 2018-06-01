<?php

return [

    'tempo' => '
        <p class="ui orange big label">Cette société est en cours de création et ce site web n\'est pas encore ouvert au
            public. Cet accès n\'est qu\'à but de test "live" pour les développeurs web
        </p>',

    'definitions' => '
        <h2  class="ui dividing header">Préambule: Définitions</h2>
            <ul>
            <li>Annonceur : Toute personne physique majeure ou morale déposant une Annonce via le
                service '.env('LEGAL_COMPAGNY_PSEUDONAME').'.</li>
            <li>Annonce : Composition des textes, images et vidéos publiés par l\'annonceur via la
                service '.env('LEGAL_COMPAGNY_PSEUDONAME').'.</li>
            <li>Compte Pro: Espace sécurisé gratuit d\'un annonceur permettant l\'accès aux données
                personnelles et ouvrant droit à la mise en ligne gratuite ou payante d\'annonces</li>
            <li>Site Internet: désigne le site internet exploité par
                '.env('LEGAL_COMPAGNY_PSEUDONAME').', notament toutes les URL du nom de domaine
                '.substr (Illuminate\Support\Facades\Request::root(), 7).'
            </li>
        </ul>',

    'diffusionRulesTitle' => 'Règles de diffusion des annonces',

    'diffusionsRules' => '
            <p>L\'annonceur s\'engage à ne diffuser d\'Annonces qu\'en son nom de société et pour son
                propre compte. Ainsi, sauf accord préalable et exprès de
                '. env('LEGAL_COMPAGNY_PSEUDONAME').', l\'Annonceur ne peut utiliser le Service
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' pour diffuser des Annonces au nom et/ ou
                pour le compte d\'un tiers.
            </p>
            <p>'. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve le droit de :</p>
            <ul>
                <li>Supprimer toute Annonce diffusée par l\'Annonceur au nom  et/ou pour le compte d\'un tiers et ce sans qu\'aucun remboursement et/ou indemnisation ne puisse lui être réclamé(e) par l\'Annonceur.</li>
                <li>supprimer sans préavis le « Compte Pro » et toutes Annonces en cours de diffusion d\'un Annonceur qui contreviendrait à la présente interdiction et ce sans qu\'aucun remboursement et/ou indemnisation ne puisse lui être réclamé(e) par l\'Annonceur.</li>
                <li>d\'interdire l\'utilisation du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').' aux fins de diffusion d\'Annonce à l\'Annonceur qui contreviendrait à la présente interdiction et ce sans qu\'aucun remboursement et/ou indemnisation ne puisse lui être réclamé(e) par l\'Annonceur.</li>
            </ul>
            <p>
                Sans que cela ne crée à sa charge une obligation de vérifier le contenu,
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve le droit d\'accepter, de refuser
                ou de supprimer, toute annonce déposée ou modifiée par l\'Annonceur.
            </p>
            <p>'. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve le droit de refuser ou supprimer
                une Annonce qui contreviendrait aux dispositions des présentes <a href="'. route('cgu').'">CGU</a> , qui ne serait
                pas conforme au présent paragraphe et aux règles de diffusion du Service
                '. env('LEGAL_COMPAGNY_PSEUDONAME').', ou dont le contenu serait manifestement
                contraire aux dispositions légales et réglementaires en vigueur, telles que
                détaillées dans les <a href="'. route('cgu').'">CGU</a> à l\'article « Engagement de l\'annonceur ».
            </p>
            <p>
                Dans l\'hypothèse où l\'Annonce contient une photographie,
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve le droit de ne pas diffuser
                l\'Annonce :
            </p>
            <ul>
                <li>si la qualité de la photo est insuffisante.</li>
                <li>si la photo est contraire aux règles de diffusion du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').'.</li>
                <li>si la photo ne représente pas le bien objet de l\'Annonce et se limite à une représentation du logo et/ou visuel commercial de l\'Annonceur.</li>
            </ul>
            <p>
                Dans l\'hypothèse où l\'Annonce contient une vidéo,
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve le droit de ne pas diffuser
                l\'Annonce :
            </p>
            <ul>
                <li>si la qualité de la vidéo est insuffisante.</li>
                <li>si la vidéo est contraire aux règles de diffusion du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').'.</li>
                <li>si la vidéo ne représente pas le bien l’objet de l\'Annonce et se limite à une représentation du logo et/ou d’un vidée commercial de l\'Annonceur.</li>
            </ul>
            <p>
                En aucun cas une Annonce ne pourra servir à diffuser un message publicitaire autre
                que la présentation d\'un bien en particulier. Si une Annonce est refusée, avant sa
                mise en ligne, par '. env('LEGAL_COMPAGNY_PSEUDONAME').', l\'Annonceur en sera
                informé par email envoyé à l\'adresse indiquée lors de la création du Compte Pro,
                aucun paiement ne sera demandé à l’annonceur.
                <br />Un tel refus ne fait naître au profit de l\'Annonceur aucun droit à indemnité.
                Toute Annonce publiée est diffusée sur '. env('LEGAL_COMPAGNY_PSEUDONAME').' pour
                une durée de '. env('ADVERT_LIFE_TIME').' jours renouvelable, sauf retrait anticipé
                du fait de l\'Annonceur ou de '. env('LEGAL_COMPAGNY_PSEUDONAME').' notamment en raison de
                contenu illicite.
            </p>
            <p>
                Les Annonces sont classées sur '. env('LEGAL_COMPAGNY_PSEUDONAME').' par ordre
                chronologique, en fonction de la date et de l\'heure de leur mise en ligne.
                En conséquence, l\'Annonceur reconnaît et accepte que la présence en tête de liste de
                son Annonce ne soit que provisoire.
            </p>',

    'v' => [

        'title' => 'Conditions Générales de Vente',
        'object' => '
            <h2  class="ui dividing header">Article 1: Objet</h2>
            <p>
                Les présentes <a href="'.route('cgv').'">Conditions Générales de Vente</a> établissent les conditions 
                contractuelles exclusivement applicables au passage d\'une Commande par un Annonceur 
                depuis le Site Internet.
            </p>',

        'accept' => '
            <h2  class="ui dividing header">Article 2: Acceptation</h2>
            <p>
                L\'annonceur déclare avoir pris connaissance des présentes
                <a href="'.route('cgv').'">Conditions Générales de Vente</a> et
                <a href="'. route('cgu').'">Conditions Générales d\'utilisation</a> et les accepter
                expressément, sans réserve et/ou modification de quelque nature que ce soit.
                L\'annonceur renonce ainsi à se prévaloir de ses propres conditions générales d\'achat.
            </p>
            <p>
                Toute condition contraire opposée par l\'Annonceur sera donc à défaut
                d\'acceptation expresse, inopposable à '.env('LEGAL_COMPAGNY_PSEUDONAME').', quel
                que soit le moment où elle aura pu être portée à sa connaissance.
            </p>
            <p>
                Le fait que '.env('LEGAL_COMPAGNY_PSEUDONAME').' ne se prévale pas à un moment
                donné de l\'une quelconque des présentes <a href="'.route('cgv').'">Conditions Générales de Vente</a> ne peut être
                interprété comme valant renonciation à se prévaloir ultérieurement de l\'une
                quelconque desdites conditions.
            </p>',

        'ordering' => '
            <h2  class="ui dividing header">Article 3: Passage d\'une commande</h2>
            <h3 class="ui header">Règles générales</h3>
            <p>
                Le bénéfice de toute Commande (Frais d\'Insertion, Option(s) Payante(s)), est personnel à l\'Annonceur qui l\'a effectuée
                et ne peut être cédé, transféré sans l\'accord de '.env('LEGAL_COMPAGNY_PSEUDONAME').'. Aucun remboursement n\'est
                possible après le début d\'exécution de toute commande passée et validé par '.env('LEGAL_COMPAGNY_PSEUDONAME').'.
            </p>
            
            <h3 class="ui header">Moment de la commande, paiement et facturation</h3>
            <p>Le paiement se fait par paypal ou par carte bancaire au moment du dépot de l\'annonce</p>
            <p>Les tarifs sont indiqués en euros et sont exprimés HT (hors taxes)</p>
            <p>Les tarifs sont communiqués à l\'Annonceur sur simple demande et sont disponibles dans les présentes
               <a href="'.route('cgv').'">Conditions Générales de Vente</a>.
            </p>
            <p>
                Le tarif des frais d\'insertion, de renouvellement et de chaque Option payante est celui en vigueur au jour de la
                Commande par l\'Annonceur.
                '.env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve la possibilité de modifier ses tarifs à tout moment.
            </p>
            <p>Si l\'Annonce est refusée par le service modération de '.env('LEGAL_COMPAGNY_PSEUDONAME').', en raison de sa
                non-conformité aux règles de diffusion, le paiement par carte bancaire ou paypal sera annulé et l\'Annonceur non
                débité. L\'Annonceur en sera informé par email.</p>
            <p>Si l\'Annonce est publiée par le service modération de '.env('LEGAL_COMPAGNY_PSEUDONAME').', le paiement sera
                capturé et l\'annonce sera mise en ligne sur le Site Internet.</p>
            <p>
                Aucun remboursement n\'est possible après exécution de la prestation soit validation par le service modération de
                '.env('LEGAL_COMPAGNY_PSEUDONAME').'.
            </p>
            <p>
                Le montant de la facture, exprimé en euro hors taxes, sera majoré de celui de la TVA et/ou de toute autre taxe à la
                charge de l\'Annonceur, au taux en vigueur à la date de parution.
            </p>
            <p>
                Une facture est automatiquement envoyée par mail à l\'annonceur après validation de l\'annonce par le service
                modération de '.env('LEGAL_COMPAGNY_PSEUDONAME').'.
            </p>',

        'description' => '
            <h2 class="ui dividing header">Article 4: Descriptif et tarifs</h2>
            <h4 class="ui header">Composition des tarifs</h4>
            <p>
                Les tarifs appliqués à la mise en ligne d\'une nouvelle annonce sont composés de la somme:
            </p>
            <ul>
                <li>Des frais d\'insertion: ce sont les frais appliqués à chaque annonce lors de la mise en ligne quelque soit
                    la catégorie et les options payantes choisies</li>
                <li>Des options payantes: ce sont des options « Vidéo », «photos supplémentaire», « Urgent », « à Négocier »</li>
            </ul>
            <p>
                Le tarif appliqué au renouvellement d\'une annonce est fixe et ne dépend pas des options choisies à la première
                mise en ligne de l\'annonce
            </p>
            
            <h4 class="ui header">Frais d\'insertion</h4>
            <p>A ce jour les frais d\'insertion sont offerts.</p>
            
            <h4 class="ui header">Les Options Payantes</h4>
            <p>Les options payantes sont souscrites au moment du depot de l\'Annonce et pour la durée de diffusion de l\'Annonce
                soit pour une durée maximum de '. env('ADVERT_LIFE_TIME').' jours
            </p>
            <p>Une option payante n\'est souscrite que pour une seule Annonce. En conséquence, il n\'est pas possible de transférer le
                bénéfice d\'une option payante d\'une Annonce à une autre.
            </p>
            <p>Il est possible de souscrire à plusieurs options payantes pour une même Annonce.</p>
            <p>Le prix de chaque option payante varie en fonction de ladite option.</p>
            <p>La souscription d\'une option payante ne proroge pas la durée de l\'Annonce.</p>
            <p>Lors du retrait anticipé de l\'Annonce (soit du fait de l\'Annonceur, soit du fait
                de '.env('LEGAL_COMPAGNY_PSEUDONAME').' notamment en cas de non-respect des présentes CGU ou des Règles de
                diffusion sur le Service '.env('LEGAL_COMPAGNY_PSEUDONAME').') ou à l\'expiration de sa durée de diffusion,
                l\'Option Payante cesse de produire ses effets.
            </p>
            <p>Le renouvellement d\'une Annonce prolonge la durée de toutes ses options payantes intemporelles.</p>
            <p>
                L\'Annonceur reconnait et accepte que toute Annonce déposée dans une catégorie ne correspondant pas au
                produit ou au service proposé puisse être supprimée à tout moment, par '.env('LEGAL_COMPAGNY_PSEUDONAME').' et ce
                sans indemnité ni droit à remboursement des sommes engagées aux fins de la souscription à des Options Payantes.
            </p>',

        'options' => [

            'urgent' => '
                <h5 class="ui header">Ajouter l’option « Urgent »</h5>
                <p>Prix de l\'option: ' . \App\Common\MoneyUtils::getPriceWithDecimal(\App\Common\CostUtils::getCostIsUrgent(true),'EUR',true) .' HT</p>
                <p>Cette option permet:</p>
                <ul>
                    <li>d’afficher un logo « urgent » sur l’annonce</li>
                    <li>de faire partie du critère de filtre global « urgent » dans la recherche de résultat</li>
                </ul>
                <p>Pour en bénéficier, il convient de la selectionner directement sur la page de création de l\'Annonce en cochant
                    l’option « URGENT ».
                </p>
                <p>
                    Si l\'Annonce est validée par le service de modération de '. env('LEGAL_COMPAGNY_PSEUDONAME').', elle sera mise en
                    ligne sur le Site Internet et les Applications Universelle iPhone/iPad et Android et sera signalée par un logo dans
                    la liste de résultats.
                </p>',

            'toNegociate' => '
                <h5 class="ui header">Ajouter l’option « à Négocier »</h5>
                <p>Prix de l\'option: offert</p>
                <p>Cette option permet :</p>
                <ul>
                    <li>d’afficher un logo « à négocier » sur l’annonce en lieu et place du prix de vente de l’objet</li>
                    <li>de faire partie du critère de filtre global « à negocier » dans la recherche de résultat</li>
                </ul>
                <p>Pour en bénéficier, il convient de la selectionner directement sur la page de création de l\'Annonce en cochant
                    l’option « à négocier ».
                </p>
                <p>
                    Si l\'Annonce est validée par le service de modération de '. env('LEGAL_COMPAGNY_PSEUDONAME') .', elle sera mise en
                    ligne sur le Site Internet et les Applications Universelle iPhone/iPad et Android et sera signalée par un logo dans
                    la liste de résultats.
                </p>',

            'video' => '
                <h5 class="ui header">Ajouter une option vidéo</h5>
                <p>Prix de l\'option: '.  \App\Common\MoneyUtils::getPriceWithDecimal(\App\Common\CostUtils::getCostVideo(true),'EUR',true).' HT</p>
                <p>Cette option permet :</p>
                <ul>
                    <li>d’ajouter une vidéo à mon annonce</li>
                </ul>
                <p>
                    Pour en bénéficier, il convient de la selectionner directement sur la page de création de l\'Annonce en cliquant le
                    bouton « +Ajouter une vidéo ».
                </p>
                <p>
                    Si l\'Annonce est validée par le service de modération de '. env('LEGAL_COMPAGNY_PSEUDONAME') .', elle sera mise en
                    ligne sur le Site Internet et les Applications Universelle iPhone/iPad et Android et la vidéo sera visionnable
                    dans la page dédiée de l\'annonce.
                </p>
                <p>
                    L\'Annonceur reconnait et accepte qu\'en raison de l\'ergonomie des solutions de '. env('LEGAL_COMPAGNY_PSEUDONAME') .',
                    si la vidéo de l’annonceur ne correspond pas à l’adaptions des applications
                    de '. env('LEGAL_COMPAGNY_PSEUDONAME') .', '. env('LEGAL_COMPAGNY_PSEUDONAME') .' ne pourra être tenu responsable du
                    non fonctionnement de la vidéo de l’annonceur.
                </p>
                <p>
                    '. env('LEGAL_COMPAGNY_PSEUDONAME') .' n’est aucunement responsable d’une vidéo dont le ou les caractères seraient
                    interdites par les lois Française ou Européen. '. env('LEGAL_COMPAGNY_PSEUDONAME') .' se verrai dans l’obligation
                    d’en référé aux autorités compétentes, sans avoir à contacter l’annonceur.
                </p>',

            'photos1' => '
                <h5 class="ui header">Ajouter l’option Photos supplémentaires</h5>
                <p>Prix de l\'option:</p>
                <ul>',

            'photos2' => '
                <li>annonce avec :compt photos: :price HT</li>',

            'photos3' => '
                </ul>
                <p>Cette option permet :</p>
                <ul>
                    <li>d’ajouter '. (config('runtime.nbMaxPictures')-config('runtime.nbFreePictures')) .' photographies supplémentaires
                        dans une Annonce en plus des '. config('runtime.nbFreePictures') .' photo(s) gratuite(s) et
                        ainsi de présenter au maximum '.  config('runtime.nbMaxPictures') .' photographies dans une Annonce.
                    </li>
                </ul>
                <p>
                    Pour en bénéficier, il convient de la selectionner directement sur la page de création de l\'Annonce en cliquant le
                    bouton « +Ajouter une photo ».
                </p>
                <p>
                    Si l\'Annonce est validée par le service de modération de '. env('LEGAL_COMPAGNY_PSEUDONAME') .', elle sera mise en
                    ligne sur le Site Internet et les Applications Universelle iPhone/iPad et Android et les photos seront visibles
                    dans la page dédiée de l\'annonce.
                </p>
                <p>
                    L\'Annonceur reconnait et accepte qu\'en raison de l\'ergonomie des solutions de '. env('LEGAL_COMPAGNY_PSEUDONAME') .',
                    si la (les) photo(s) de l’annonceur ne correspond(ent) pas à l’adaptions des applications
                    de '. env('LEGAL_COMPAGNY_PSEUDONAME') .', '. env('LEGAL_COMPAGNY_PSEUDONAME') .' ne pourra être tenu responsable du
                    non fonctionnement de (des) photo(s) de l’annonceur.
                </p>
                <p>
                    '. env('LEGAL_COMPAGNY_PSEUDONAME') .' n’est aucunement responsable d’une photo dont le ou les caractères seraient
                    interdites par les lois Française ou Européen. '. env('LEGAL_COMPAGNY_PSEUDONAME') .' se verrai dans l’obligation
                    d’en référé aux autorités compétentes, sans avoir à contacter l’annonceur.
                </p>',

            'edition' => '
                <h4 class="ui header">Edition d\'une annonce</h4>
                <p>Prix pour editer une annonce: '. \App\Common\MoneyUtils::getPriceWithDecimal(\App\Common\CostUtils::getCostIsEdit(true),'EUR',true).' HT</p>
                <p>
                    Cette option permet aux annonceurs d\'éditer leurs annonces pour les champs "titre", "description", "catégorie",
                    "prix", "lieu", "photo", "vidéo".
                    <br />L\'édition des champs "quantitée totale" et "lot minimal de vente" sont GRATUITS.
                    <br />Votre annonce est automatiquement et GRATUITEMENT remise en tête de liste avec cette option.
                </p>
                <p>
                    Une annonce n\'est éligible à l\'édition que si sa durée de publication restante est supérieure à
                    '. env('REMAINING_HOURS_FOR_EDIT_ELIGIBILITY').' heures
                    <br />Toutes les options déjà présentes restent acquises.
                    <br />Par exemple, si l\'annonce éditée contient
                    '. (config('runtime.nbFreePictures')+1).' photos (donc 1 payante), alors l\'annonceur peut remplacer ces
                    '. (config('runtime.nbFreePictures')+1).' photos sans coût supplémentaire à celui de cette présente option d\'édition.
                    Si celui-ci souhaite en rajouter 1 et passer son annonce à '. (config('runtime.nbFreePictures')+2).' photos, alors
                    le tarif applicable aux photos supplémentaires sera appliqué à cette dernière.
                    <br />Le fait de supprimer une option pendant l\'édition rendra cette suppression définitive après validation des
                    modifications.
                </p>',

            'renew' => '
                <h4 class="ui header">Renouvellement d\'une annonce</h4>
                <p>Prix du renouvellement d\'une annonce : '.  \App\Common\MoneyUtils::getPriceWithDecimal(\App\Common\CostUtils::getCostIsRenew(true),'EUR',true).' HT</p>
                <p>
                    Le renouvellement d\'une annonce prolonge celle-ci pour une durée de '. env('ADVERT_LIFE_TIME').' jours.
                    Toutes ses options intemporelles sont renouvellées.
                    Votre annonce est automatiquement et GRATUITEMENT remise en tête de liste avec cette option.
                </p>',

            'backToTop' => '
                <h4 class="ui header">Remontée en tête de liste d\'une annonce</h4>
                <p>Prix pour remonter une annonce en tête de liste: '.  \App\Common\MoneyUtils::getPriceWithDecimal(\App\Common\CostUtils::getCostIsBackToTop(true),'EUR',true).' HT</p>
                <p>
                    La remontée en tête de liste permet de placer l\'annonce tout en haut de la liste des annonces. Cette option ne
                    garantie pas la durée pendant laquelle votre annonce restera en tête de liste.
                </p>',

            'highlight1' => '
                <h4 class="ui header">Placement d\'une annonce à la Une</h4>
                <p>Prix pour placer une annonce en Une:
                    <br />Le prix est variable. Il est fixé au moment de la demande. Il dépend du nombre d\'annonce déjà à la Une [notées \'nbU\'].
                    <br />La formule de calcul est la suivante: '. config('runtime.highlightCost').'/<span style="font-size: large">&Sqrt;</span>nbU.
                    <br />Exemples:
                </p>
                <ul>',

            'highlight2' => '<li>nbU= :case => prix = :price HT</li>',

            'highlight3' => '
                </ul>
                <p>
                    La mise à la Une permet de placer l\'annonce dans une seconde liste à coté des resultats de recherche.
                    Cette seconde liste est composée de '. env('HIGHLIGHT_QUANTITY').' emplacements.
                    L\'annonce etant en concurrence avec les autres annonces à la Une déjà présentes, celle-ci sera choisie et placée
                    de manière aléatoire durant la durée de vie de l\'option.
                    La durée de vie de cette option est fixée à '. env('HIGHLIGHT_HOURS_DURATION').' heures.
                    Cette option ne garantie pas le nombre d\'affichage à la Une.
                    Une annonce n\'est éligible à cette option que si sa durée de publication restante est supérieure à
                    '. env('HIGHLIGHT_HOURS_DURATION').' heures
                </p>'
        ],

        'major' => '
            <h2  class="ui dividing header">Article 5: Cas de force majeure</h2>
            <p>
                Ni l\'Annonceur, d\'une part, ni '. env('LEGAL_COMPAGNY_PSEUDONAME'). ', ses
                sous-traitants ou fournisseurs, d\'autre part, ne pourra être tenu pour responsable de
                tout retard, inexécution ou autre manquement à ses obligations résultant d\'un cas de
                force majeure. Seront notamment considérés comme des cas de force majeur ceux
                habituellement retenus par la jurisprudence des Cours et Tribunaux français ainsi que
                les grèves totales ou partielles, internes ou externes à l\'une des parties, à un
                fournisseur ou sous-traitant, lock-out, blocages des moyens de transport ou
                d\'approvisionnement pour quelque raison que ce soit, incendies, tempêtes, inondations,
                dégâts des eaux, restrictions gouvernementales ou légales, modifications légales ou
                réglementaires des formes de commercialisation, blocage des moyens de
                télécommunications, y compris les réseaux, et tout autre cas indépendant de la volonté
                de l\'Annonceur, de '. env('LEGAL_COMPAGNY_PSEUDONAME'). ', ses sous-traitants ou
                fournisseurs empêchant l\'exécution normale des prestations.
            </p>
            <p>
                Chaque partie notifiera à l\'autre partie par lettre recommandée avec accusé de
                réception la survenance de tout cas de force majeure.
            </p>
            <p>
                En présence d\'un cas de force majeur, si l\'empêchement d\'exécuter normalement
                l\'obligation contractuelle devait perdurer plus de 1 mois, les parties seront libérées
                de leurs obligations réciproques, de plein droit, sans formalité judiciaire, sans
                préavis et sans qu\'aucune indemnité de quelque nature que ce soit ne puisse être
                réclamée à la partie défaillante, après l\'envoi d\'une lettre recommandée avec accusé
                de réception ayant effet immédiat.
            </p>',

        'modifications' => '
            <h2  class="ui dividing header">Article 6: Modification des <a href="'.route('cgv').'">CGV</a></h2>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve la possibilité, à tout moment, de
                modifier en tout ou partie les <a href="'. route('cgv').'">CGV</a>.
            </p>
            <p>Les Annonceurs sont invités à consulter régulièrement connaissance des
                <a href="'. route('cgv').'">CGV</a> afin de prendre connaissance de changements
                apportés.
            </p>',

        'juridiction' => '
            <h2  class="ui dividing header">Article 7: Attribution de juridiction et dispositions diverses</h2>
            <p>
                Tout litige relève de la compétence exclusive du tribunal de Commerce de Tours
                (37000) en France, même en cas d\'appel en garantie ou de pluralité de défendeurs,
                ou en cas de procédure d\'urgence ou conservatoire, en référé ou par requête.
                Les présentes <a href="'. route('cgu').'">conditions générales d\'utilsation</a> et
                <a href="'. route('cgv').'">conditions générales de vente</a> sont soumises à la loi française.
            </p>
            <p>
                Si une partie des <a href="'. route('cgv').'">conditions générales de vente</a> devait s\'avérer illégale,
                invalide ou inapplicable, pour quelque raison que ce soit, les dispositions en
                question seraient réputées non écrites, sans remettre en cause la validité des
                autres dispositions qui continueront de s\'appliquer entre les Annonceurs et
                '. env('LEGAL_COMPAGNY_PSEUDONAME').'.
            </p>
            <p>
                Il est à noter que le présent contrat et les présentes
                <a href="'. route('cgv').'">conditions générales de vente</a> sont soumises aux dispositions de la loi du
                N°2004-575 du 21 Juin 2004 art 25-II et l\'Ordonnance N°2005-674 du 16 Juin 2005 et
                aux articles 1369-1 à 1369-2 du Code Civil
            </p>',
    ],

    'u' => [

        'title' => 'Conditions Générales d\'utilisation',

        'object' => '
            <h2  class="ui dividing header">Article 1: Objet</h2>
            <p>
                Les présentes <a href="'. route('cgu').'">Conditions Générales d\'utilisation</a>
                établissent les conditions contractuelles applicables à l\'utilisation du Site Internet
                par un Annonceur.
                <br /><br />Les conditions de souscription d\'option(s) payante(s) par l\'annonceur sont décrites
                dans les <a href="'. route('cgv').'">Conditions Générales de Ventes</a>
            </p>',

        'accept' => '
            <h2  class="ui dividing header">Article 2: Acceptation</h2>
            <p>
                L’utilisation du Site Internet implique l’acceptation pleine et entière des conditions
                générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont
                susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du Site
                Internet sont donc invités à les consulter de manière régulière.
            </p>',

        'using' => '
            <h2  class="ui dividing header">Article 3: Utilisation du service '. env('LEGAL_COMPAGNY_PSEUDONAME').'</h2>
            <h3 class="ui header">Règles relatives au compte Pro</h3>
            <h4 class="ui header">Création et titularité du compte Pro</h4>
            <p>
                Tout Annonceur qui souhaite diffuser des Annonces via le Service
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' doit obligatoirement se créer un « Compte
                Pro » à partir du Site Internet en remplissant le formulaire d\'activation mis à sa
                disposition sur le Site Internet, et choisir ses Identifiants de connexion.
            </p>
            <p>
                Un Compte Pro est personnel à l\'Annonceur et ne peut être transféré ou cédé à aucun
                tiers sans l\'accord écrit et préalable de '. env('LEGAL_COMPAGNY_PSEUDONAME').'.
                Il est interdit d\'utiliser un Compte Pro pour plusieurs points de vente, chaque
                Compte Pro étant attribué spécifiquement pour un point de vente. Il n\'existe donc
                qu\'un seul Compte Pro par point de vente, celui-ci étant identifié par une seule
                adresse email.
            </p>
            <h4 class="ui header">Ordres réalisables par l\'Annonceur depuis son compte Pro</h4>
            <p>
                L\'Annonceur ne peut procèder au dépôt d’annonce avec ou sans option payante
                uniquement que depuis son Compte Pro.
            </p>
            <p>
                L\'Annonceur peut à partir de son Compte Pro:
            </p>
            <ul>
                <li>Déposer des Annonces</li>
                <li>Visualiser ses Annonces en cours de diffusion et leurs statistiques de visites et de favoris</li>
                <li>Supprimer ses annonces</li>
            </ul>
            <p> Le dépôt ou le renouvellement des annonces peut entrainer la souscription d\'options payantes telles que:</p>
            <ul>
                <li>l\'apposition du Logo Urgent</li>
                <li>la publication d’une Vidéo dans l’annonce</li>
                <li>Photos supplémentaire au dela de '. config('runtime.nbFreePictures').' photo(s)</li>
                <li>Renouvellement d’une annonce</li>
            </ul>
            <h4 class="ui header">Résiliation du compte Pro</h4>
            <p>
                Le Compte Pro est gratuit et créé pour une durée indéterminée, il peut être résilié
                à tout moment sans préavis par l\'Annonceur en écrivant au service client en cliquant
                sur le lien <a href="'. route('contact').'">Contact</a>.
            </p>
            <p>
                La suppression par un Annonceur de son Compte Pro entraîne la suppression
                automatique des annonces attachées à ce compte, ce que l\'Annonceur reconnaît et
                accepte.
            </p>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve le droit, sous condition d\'un
                préavis de 8 jours à compter de l\'envoi d\'un email notifiant la résiliation des
                présentes à l\'Annonceur adressé sur l\'adresse email renseignée par l\'Annonceur lors
                de l\'ouverture de son Compte Pro ou de la souscription au Service
                '. env('LEGAL_COMPAGNY_PSEUDONAME').', de modifier, d\'interrompre ou d\'arrêter
                l\'accessibilité à tout ou partie du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').' 
                et/ou du Site Internet ou des Applications Universelle iPhone/iPad et Android, sans
                être tenue de verser à l\'Annonceur une indemnité de quelque nature que ce soit.
                L\'Annonce payée qui, de ce fait, n\'est pas diffusée, est le cas échéant remboursée à
                l\'Annonceur.
            </p>',

        'diffusionsRulesTitle' => '
            <h2 class="ui dividing header">Article 4: Règles de diffusion et modération des annonces</h2>',

        'advertisserEngagment' => '
            <h2 class="ui dividing header">Article 5: Engagements de l\'annonceur</h2>
            <ol>
                <li>
                    L\'Annonceur certifie que l\'Annonce, quel que soit sa diffusion, est conforme à
                    l\'ensemble des dispositions légales et réglementaires en vigueur (notamment
                    relatives à la publicité, à la concurrence, à la promotion des ventes, à
                    l\'utilisation de la langue du pays de vente, à l\'utilisation de données
                    personnelles, à la prohibition de la commercialisation de certains biens ou
                    services), respecte les dispositions des
                    <a href="'. route('cgu').'">CGU</a> et <a href="'. route('cgv').'">CGV</a> et les
                    <a href="'. route('diffusionRules').'">règles de diffusion du Service</a>
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' et ne porte pas atteinte aux droits des
                    tiers (notamment aux droits de propriété intellectuelle et aux droits de la
                    personnalité …).
                    <br/><br/>L\'Annonceur garantit que le contenu de ses Annonces est strictement conforme aux
                    obligations légales s\'imposant à son activité.
                    <br/><br/>L\'Annonceur garantit à '. env('LEGAL_COMPAGNY_PSEUDONAME').' être
                    l\'auteur unique et exclusif du texte, des dessins, des vidéos, photographies
                    etc. composant l\'Annonce. A défaut, il déclare disposer de tous les droits,
                    notamment les droits de propriété intellectuelle et autorisations nécessaires à
                    la diffusion de l\'Annonce.
                    <br/><br/>En conséquence, toute Annonce déposée et diffusée sur le Service
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' paraît sous la responsabilité exclusive
                    de l\'Annonceur
                    <br/><br/>En conséquence, l\'Annonceur relève '. env('LEGAL_COMPAGNY_PSEUDONAME').',
                    ses sous-traitants et fournisseurs, de toutes responsabilités, les garantit
                    contre tout recours ou action en relation avec l\'Annonce qui pourrait être
                    intenté contre ces derniers par tout tiers, et prendra à sa charge tous les
                    dommages-intérêts ainsi que les frais et dépens auxquels ils pourraient être
                    condamnés ou qui seraient prévus à leur encontre par un accord transactionnel
                    signé par ces derniers avec ce tiers , nonobstant tant tout dommages-intérêts
                    dont '. env('LEGAL_COMPAGNY_PSEUDONAME').', ses sous-traitants et fournisseurs
                    pourraient réclamer à raison des faits dommageables de l\'Annonceur.
                    <br/><br/>L\'Annonceur reconnaît et accepte que
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' est en droit de supprimer, sans préavis
                    ni indemnité ni droit à remboursement, toute Annonce en cours de diffusion qui
                    ne serait pas conforment aux règles de diffusions du Service et/ou qui serait
                    susceptible de porter atteinte aux droits d\'un tiers ou contiendrait un contenu
                    illicite.
                    <br/><br/>
                </li>
                <li>
                    L\'Annonceur s\'engage à ne proposer dans les Annonces que des biens disponibles
                    dont il dispose. L\'Annonceur s\'engage, en cas d\'indisponibilité du bien, à
                    procéder au retrait de l\'Annonce du Service
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' dans les plus brefs délais.
                    <br/><br/>
                </li>
                <li>
                    A ce titre, l\'Annonceur reconnaît et accepte que pour des raisons d\'ordre
                    technique, la mise en ligne d\'une Annonce sur le Site Internet et les
                    Applications Universelle iPhone/iPad et Android ne sera pas instantanée avec sa
                    validation.
                    <br/><br/>
                </li>
                <li>
                    L\'Annonceur déclare connaître l\'étendue de diffusion du Site Internet, avoir
                    pris toutes précautions pour respecter la législation en vigueur des lieux de
                    réception et décharger '. env('LEGAL_COMPAGNY_PSEUDONAME').' de toutes
                    responsabilités à cet égard.
                    <br/><br/>
                </li>
                <li>
                    L\'Annonceur accepte que les données collectées ou recueillies sur le Site
                    Internet soient conservées par les fournisseurs d\'accès et utilisées à des fins
                    statistiques ou pour répondre à des demandes déterminées ou émanant des pouvoirs
                    publics.
                    <br/><br/>
                </li>
                <li>
                    Pour être recevable, toute réclamation devra indiquer précisément le(s)
                    défaut(s) allégué(s) de l\'Annonce et être transmise par écrit à
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' dans un délai de huit (8) jours ouvrables
                    à compter de la date de dépôt.
                    <br/><br/>
                </li>
                <li>
                    L\'Annonceur déclare être informé qu\'il devra, pour accéder au Service
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' disposer d\'un accès à l\'Internet
                    souscrit auprès du fournisseur de son choix, dont le coût est à sa charge, et
                    reconnaît que :
                    <ul>
                        <li>La fiabilité des transmissions est aléatoire en raison, notamment, du caractère hétérogène des
                            infrastructures et réseaux sur lesquelles elles circulent et que, en particulier, des pannes ou
                            saturations peuvent intervenir.
                        </li>
                        <li>Il appartient à l\'Annonceur de prendre toute mesure qu\'il jugera appropriée pour assurer la sécurité de
                            son équipement et de ses propres données, logiciels ou autres, notamment contre la contamination par
                            tout virus et/ou de tentative d\'intrusion dont il pourrait être victime.
                        </li>
                        <li>Tout équipement connecté au Site Internet est et reste sous l\'entière responsabilité de l\'Annonceur, la
                            responsabilité de '. env('LEGAL_COMPAGNY_PSEUDONAME').' ne pourra pas être recherchée pour tout dommage
                            direct ou indirect qui pourrait subvenir du fait de leur connexion au Site Internet.
                        </li>
                    </ul>
                    <br/>L\'Annonceur s\'engage en outre à respecter et à maintenir la confidentialité des
                    Identifiants de connexion à son Compte Pro et reconnaît expressément que toute
                    connexion sur son Compte Pro, ainsi que toute transmission de données sur ou
                    depuis son Compte Pro sera réputée avoir été effectuée par l\'Annonceur.
                    <br/><br/>Toute perte, détournement ou utilisation des Identifiants de connexion et
                    leurs éventuelles conséquences relèvent de la seule et entière responsabilité de
                    l\'Annonceur.
                </li>
            </ol>',

        'propertyIntellect' => '
            <h2  class="ui dividing header">Article 6: Propriété intellectuelle</h2>
            <ol>
                <li>
                    Tous les droits de propriété intellectuelle (tels que notamment droits d\'auteur,
                    droits voisins, droits des marques, droits des producteurs de bases de données)
                    portant tant sur la structure que sur les contenus du Site Internet et des
                    Applications Universelle iPhone/iPad et Android et notamment les images, sons,
                    vidéos, photographies, logos, marques, éléments graphiques, textuels, visuels,
                    outils, logiciels, documents, données, etc. (ci-après désignés dans leur
                    ensemble « Eléments ») sont réservés. Ces Eléments sont la propriété de
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').'. Ces Eléments sont mis à disposition des
                    Annonceurs, à titre gracieux, pour la seule utilisation du Service
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' et dans le cadre d\'une utilisation
                    normale de ses fonctionnalités. Les Annonceurs s\'engagent à ne modifier en
                    aucune manière les Eléments.
                    <br/><br/>Toute utilisation non expressément autorisée des Eléments du Site
                    Internet et des Applications Universelle iPhone/iPad et Android entraîne une
                    violation des droits de propriété intellectuelle et constitue une contrefaçon.
                    Elle peut aussi entraîner une violation des droits à l\'image, droits des
                    personnes ou de tous autres droits et réglementations en vigueur. Elle peut
                    donc engager la responsabilité civile et/ou pénale de son auteur.
                    <br/><br/>
                </li>
                <li>
                    Il est interdit à tout Annonceur de copier, modifier, créer une œuvre dérivée,
                    inverser la conception ou l\'assemblage ou de toute autre manière tenter de
                    trouver le code source, vendre, attribuer, sous licencier ou transférer de
                    quelque manière que ce soit tout droit afférent aux Eléments.
                    <br/><br/>Tout Annonceur du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').'
                    s\'engage notamment à ne pas :
                    <ul>
                        <li>utiliser le Service '. env('LEGAL_COMPAGNY_PSEUDONAME').' pour le compte ou au profit d\'autrui.</li>
                        <li>reproduire en nombre, à des fins commerciales ou non, des informations ou des Annonces présentes sur le
                            Service '. env('LEGAL_COMPAGNY_PSEUDONAME').' et sur Site Internet et des Applications Universelle
                            iPhone/iPad et Android.
                        </li>
                        <li>intégrer tout ou partie du contenu du Site Internet et des Application Universelle iPhone/iPad et
                            Android dans un site tiers, à des fins commerciales ou non.
                        </li>
                        <li>utiliser un robot, notamment d\'exploration (spider), une application de recherche ou récupération de
                            sites Internet ou tout autre moyen permettant de récupérer ou d\'indexer tout ou partie du contenu du
                            Site Internet et des Applications Universelle iPhone/iPad et Android, excepté en cas d\'autorisation
                            expresse et préalable '. env('LEGAL_COMPAGNY_PSEUDONAME').'.
                        </li>
                        <li>copier les informations sur des supports de toute nature permettant de reconstituer tout ou partie des
                            fichiers d\'origine.
                        </li>
                    </ul>
                    <br/>Toute reproduction, représentation, publication, transmission, utilisation
                    ou modification, extraction, de tout ou partie des Eléments et ce de quelque
                    manière que ce soit, faite sans l\'autorisation préalable et écrite de
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' est illicite. Ces actes illicites
                    engagent la responsabilité de ses auteurs et sont susceptibles d\'entraîner des
                    poursuites judiciaires à leur encontre et notamment pour contrefaçon.
                    <br/><br/>
                </li>
                <li>
                    Les marques et logos '. env('LEGAL_COMPAGNY_PSEUDONAME').' ainsi les marques et
                    logos des partenaires de '. env('LEGAL_COMPAGNY_PSEUDONAME').' sont des marques
                    déposées. Toute reproduction totale ou partielle de ces marques et/ou logos sans
                    l\'autorisation préalable et écrite de '. env('LEGAL_COMPAGNY_PSEUDONAME').' est
                    interdite.
                    <br/><br/>
                </li>
                <li>
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' est producteur des bases de données du
                    Service '. env('LEGAL_COMPAGNY_PSEUDONAME').'. En conséquence, toute extraction
                    et/ou réutilisation de la ou des bases de données au sens des articles L 342-1
                    et L 342-2 du code de la propriété intellectuelle est interdite.
                    <br/><br/>
                </li>
                <li>
                    '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve la possibilité de saisir
                    toutes voies de droit à l\'encontre des personnes qui n\'auraient pas respecté les
                    interdictions contenues dans le présent article.
                    <br/><br/>
                </li>
            </ol>',

        'responsabilityDestock' => '
            <h2 class="ui dividing header">Article 7: Responsabilité et garanties de '. env('LEGAL_COMPAGNY_PSEUDONAME').'</h2>
            <h3 class="ui header">Limitation de responsabilité de '. env('LEGAL_COMPAGNY_PSEUDONAME').'</h3>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' s\'engage à mettre en œuvre tous les moyens
                nécessaires afin d\'assurer au mieux la fourniture du Service
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' qu\'elle propose à l\'Annonceur dans le cadre
                d\'une obligation de moyens. Sauf engagement écrit contraire, la prestation
                commercialisée par '. env('LEGAL_COMPAGNY_PSEUDONAME').' se limite à la diffusion
                d\'Annonce, avec souscription d\'options, sur le Service
                '. env('LEGAL_COMPAGNY_PSEUDONAME').', à l\'exclusion de toute autre prestation.
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' ne garantit aucunement les éventuels
                résultats escomptés par l\'Annonceur suite à la diffusion des Annonces.
            </p>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' ne pourra être tenue responsable de la
                capture des données qui serait faite à son insu, ni de la traçabilité qui en
                résulterait.
            </p>
            <p>
                Le Site Internet contient un certain nombre de liens hypertextes vers d’autres sites,
                mis en place avec l’autorisation de '. env('LEGAL_COMPAGNY_PSEUDONAME').'. Cependant,
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' n’a pas la possibilité de vérifier le contenu des
                sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.
            </p>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' ne pourra être tenue responsable des
                interruptions et modifications du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').'
                et/ou du Site Internet ou des Applications Universelle iPhone/iPad et Android, et
                de la perte de données ou d\'informations stockées par
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' ou par l\'Annonceur sur son Compte Pro; il
                incombe à l\'Annonceur de prendre toute précautions utiles pour conserver les
                annonces qu\'ils publient sur le Site Internet.
            </p>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' ne pourra pas non plus être tenue responsable
                en cas d\'utilisation non conforme du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').'
                par l\'Annonceur, et en cas de non-conformité du Service aux besoins ou aux attentes
                spécifiques de l\'Annonceur.
            </p>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' ne pourra être tenue responsable, notamment
                ni du fait de préjudices ou dommages directs ou indirects, de quelque nature que ce
                soit, résultant de la gestion, l\'utilisation, l\'exploitation, l\'interruption ou le
                dysfonctionnement du Site Internet et des Applications Universelle iPhone/iPad et
                Android et/ou du Service '. env('LEGAL_COMPAGNY_PSEUDONAME').'.
            </p>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').', ses sous-traitants ou fournisseurs, ne
                pourront être tenus pour responsables des retards ou impossibilités de remplir leurs
                obligations contractuelles, en cas:
            </p>
            <ul>
                <li>de force majeure,</li>
                <li>d\'interruption de la connexion au Site Internet en raison d\'opérations de maintenance ou d\'actualisation des
                    informations publiées.
                </li>
                <li>d\'impossibilité momentanée d\'accès au Site Internet en raison de problèmes techniques, quelle qu\'en soit
                    l\'origine.
                </li>
                <li>d\'attaque ou piratage informatique, privation, suppression ou interdiction, temporaire ou définitive, et pour
                    quelque cause que ce soit, de l\'accès au réseau Internet.
                </li>
            </ul>
            <p>
                L\'Annonceur reconnaît en outre qu\'en l\'état actuel de la technique et en l\'absence
                de garantie des opérateurs de télécommunications, la disponibilité permanente du
                Service '. env('LEGAL_COMPAGNY_PSEUDONAME').' et notamment du Site Internet ne peut
                être garantie.
            </p>
            <p>
                Compte tenu des impératifs techniques liés à l\'architecture du Site Internet, les
                indications d\'emplacement et les statistiques des visites et des pages vues par les
                visiteurs du Site Internet sont mentionnés à titre indicatif. Ces dernières ne
                peuvent entraîner aucun recours ou demande d\'indemnités de quelque nature que ce
                soit de la part de l\'Annonceur.
            </p>
            <p>
                Sauf dol ou faute lourde, '. env('LEGAL_COMPAGNY_PSEUDONAME').', ses sous-traitants
                et fournisseurs ne seront tenus en aucun cas à réparation, pécuniaire ou en nature,
                du fait d\'erreurs ou d\'omissions dans la composition d\'une Annonce. En particulier,
                de tels événements ne pourront en aucun cas justifier un refus de paiement, même
                partiel, ni ouvrir droit à une Annonce aux frais de
                '. env('LEGAL_COMPAGNY_PSEUDONAME').', ou à une indemnisation.
            </p>
            <p>
                Il est expressément prévu que, dans l\'hypothèse où l\'un des Services
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' fournit par
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' à l\'Annonceur n\'aboutirait pas, la
                responsabilité de '. env('LEGAL_COMPAGNY_PSEUDONAME').' au titre des présentes est
                limitée à la refourniture de la prestation mise en cause et n\'ayant pas abouti.
            </p>
            <p>
                En tout état de cause, la responsabilité de '. env('LEGAL_COMPAGNY_PSEUDONAME').'
                au titre d\'un dommage quelconque sera limitée à un montant ne pouvant excéder les
                sommes hors taxes effectivement payées par l\'Annonceur à
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' au cours des DEUX (2) mois précédant le fait
                générateur de la responsabilité de '. env('LEGAL_COMPAGNY_PSEUDONAME').'. En outre,
                la responsabilité de '. env('LEGAL_COMPAGNY_PSEUDONAME').' ne pourra être engagée
                que pour les dommages directs subis par l\'Annonceur, résultant d\'un manquement à ses
                obligations contractuelles telles que définies aux présentes. L\'Annonceur renonce
                donc à demander réparation à '. env('LEGAL_COMPAGNY_PSEUDONAME').' à quelque titre
                que ce soit, de dommages indirects tels que le manque à gagner, la perte de chance,
                le préjudice commercial ou financier, l\'augmentation de frais généraux ou les pertes
                trouvant leur origine ou étant la conséquence de l\'exécution des présentes.
            </p>
            <h3 class="ui header">Garantie de '. env('LEGAL_COMPAGNY_PSEUDONAME').'</h3>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' s\'engage à assurer la permanence, la
                continuité et la qualité de l\'accès et de l\'exploitation du Site Internet et du
                Compte Pro (annonceurs publicitaires).
            </p>
            <p>
                A ce titre, '. env('LEGAL_COMPAGNY_PSEUDONAME').' fera ses meilleurs efforts pour
                maintenir un accès à son Site Internet avec une accessibilité de garantie de 99% du
                temps sur une année sauf cas de force majeure. En cas de nécessité,
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve la possibilité de limiter ou de
                suspendre l\'accès au Site Internet et/ou au Compte Pro pour procéder à toute
                opération de maintenance et/ou d\'amélioration. Pour minimiser l\'impact de celle-ci,
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' s\'efforcera de la planifier entre 20h et 7h
                sauf cas d\'impérative nécessité."
            </p>
            <p>
                L\'Annonceur reconnaît expressément que la présente garantie ne couvre pas toute
                panne ou interruption du service intervenant du fait des opérateurs télécoms et/ou
                de la société hébergeant le Site Internet.
            </p>
            <p>
                Il est expressément convenu entre les parties que les obligations souscrites par
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' dans le cadre du présent article sont de
                moyens.
            </p>
            <h3 class="ui header">Sous-traitance</h3>
            <p>'. env('LEGAL_COMPAGNY_PSEUDONAME').' pourra librement recourir aux prestataires et/ou sous-traitants de son choix
                pour la réalisation de
                tout ou partie des prestations, sans avoir à en informer l\'Annonceur, ni à requérir son accord sur l\'identité de ces
                tiers.
            </p>',

        'modification' => '
            <h2  class="ui dividing header">Article 8: Modification du service '. env('LEGAL_COMPAGNY_PSEUDONAME').'</h2>
            <p>
                '. env('LEGAL_COMPAGNY_PSEUDONAME').' se réserve le droit a tout moment de modifier ou interrompre l\'accessibilité
                de tout ou partie de son service et/ou du Site Internet ou des Applications.
            </p>',

        'juridiction' => '
            <h2  class="ui dividing header">Article 9: Attribution de juridiction et dispositions diverses</h2>
            <p>
                Tout litige relève de la compétence exclusive du tribunal de Commerce de Tours
                (37000) en France, même en cas d\'appel en garantie ou de pluralité de défendeurs,
                ou en cas de procédure d\'urgence ou conservatoire, en référé ou par requête.
                Les présentes <a href="'. route('cgu').'">conditions générales d\'utilsation</a> et
                <a href="'. route('cgv').'">conditions générales de vente</a> sont soumises à la loi française.
            </p>
            <p>
                Si une partie des <a href="'. route('cgu').'">CGU</a> devait s\'avérer illégale,
                invalide ou inapplicable, pour quelque raison que ce soit, les dispositions en
                question seraient réputées non écrites, sans remettre en cause la validité des
                autres dispositions qui continueront de s\'appliquer entre les Annonceurs et
                '. env('LEGAL_COMPAGNY_PSEUDONAME').'.
            </p>',

    ]

];

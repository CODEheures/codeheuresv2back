<?php

return [

    'title' => 'Vie privée et cookies',
    'explanations' => '
            <h2  class="ui dividing header">Vie privée</h2>
            <p>
                Conformément au Règlement Général sur la Protection des Données (RGPD Europeen), cette page a pour but 
                de vous lister les informations que nous collectons, pour quelle  raison et comment nous les utilisons.<br />
                Pour utiliser nos services, vous devrez acceptez que notre société collecte certaines de vos 
                informations personnelles.
            </p>',

    'CollectedList' => '
        <h3  class="ui dividing header">Quelles sont les données collectées</h3>
            <ol>
              <li>
                Les données que vous renseignez
                <ul>
                  <li>
                    Lors d\'une simple visite<br />
                    Nous ne vous demandons de renseigner aucune donnée.
                  </li>
                  <li>
                    Lors d’une inscription à la news-letter<br />
                    Nous collectons votre adresse email. Optionnellement vous pouvez renseigner votre nom et un numéro de téléphone.
                  </li>
                  <li>
                    Lors d’une création de compte professionnel<br />
                    Pour créer un compte vous devez renseigner votre email, un nom d’utilisateur et un mot de passe. 
                    Si vous en donnez votre accord, une position géographique est enregistrée à des fins de 
                    facturation ultérieure. Dans le cas contraire, elle est déduite des données collectées automatiquement.
                  </li>
                  <li>
                    Complément de renseignements du compte professionnel<br />
                    Lors de la création d’une annonce vous êtes amenés à renseigner votre numéro de TVA 
                    Intracommunautaire dans le but d\'établir une facture valide. Nous recueillons alors automatiquement 
                    le nom de votre société et l’adresse de celle-ci (en remplacement de l’adresse initialement 
                    obtenue lors de la création du compte). Vous pouvez optionnellement renseigner un numéro de 
                    téléphone dans le but de la mettre à disposition dans vos annonces.
                  </li>
                </ul>
              </li>
              <li>
                Les données collectées automatiquement à l\'utilisation de nos services<br />
                Nous recueillons les informations suivantes relatives aux services que vous utilisez et à l’usage que 
                vous en faîtes :<br />
                Des données techniques : adresse IP, connexion internet, type de navigateur, informations concernant 
                votre ordinateur<br /> 
                Des données recueillies à l’aide de cookies: pour de plus amples informations, nous vous invitons à 
                vous rendre sur la rubrique COOKIES
              </li>
              <li>
                Les données collectées par des tiers<br />
                Notre passerelle de paiement <a href="https://www.braintreepayments.com/">Braintree</a> possède sa propre 
                politique de confidentialité disponible <a href="https://www.paypal.com/webapps/mpp/ua/privacy-full">ici</a><br />
                Notre fournisseur de statistiques de visites <a href="https://analytics.google.com//">Google analytics</a> 
                possède sa propre politique de confidentialité disponible 
                <a href="https://www.google.com/intl/fr/policies/privacy/">ici</a><br />
                Une sortie ou une redirection hors de notre site, exclu l\'application de la présente Politique de
                Confidentialité.
              </li>
            </ol>',

    'Uses' => '
        <h3  class="ui dividing header">Quel est l\'usage des données collectées</h3>
            <ol>
              <li>
                Fournir nos services<br />
                Vous assurer l\'accèsl’accès à nos services et leur utilisation, et notamment :
                <ul>
                  <li>assurer la publication de votre annonce</li>
                  <li>assurer la gestion de votre compte</li>
                  <li>géolocaliser votre bien</li>
                  <li>répondre à vos questions</li>
                  <li>acheminer les messages et contenus privés échangés via la Messagerie.</li>
                </ul>
                Conformément à l’article 68 de la loi pour une République numérique, les messages et contenus échangés 
                entre les Utilisateurs et les Annonceurs via la Messagerie relèvent de la correspondance privée et sont 
                confidentiels.
              </li>
              <li>
                Faire des analyses marketing<br />
                 Par le biais de synthèses anonymisée des données afin de comprendre à travers des tableaux de bord 
                 comment nos utilisateurs utilisent nos services dans le but d’ameliorer ceux-ci.
              </li>
            </ol>',

    'Destinations' => '
        <h3  class="ui dividing header">Destinataires des données personnelles colectées</h3>
            <p>Conformément à la loi nº78-17 du 6 janvier 1978 modifiée par la Loi n°2004-801 du 6 août 2004, 
             ' . env("LEGAL_COMPAGNY_PSEUDONAME") . ' s\'engage à conserver toutes les données personnelles recueillies 
             via son service et à ne les transmettre à aucun tiers.<br />
            Par dérogation, l\'Utilisateur et l\'Annonceur sont informés que ' . env("LEGAL_COMPAGNY_PSEUDONAME") . ' 
            peut être amenée à communiquer les données personnelles collectées via son service :</p>
            <ul>
              <li>Aux autorités administratives et judiciaires autorisées, uniquement sur réquisition judiciaire</li>
              <li>Aux prestataires techniques de service qui nous aident à fournir et améliorer le service</li>
              <li>A des prestataires techniques de service en vue de vous proposer des services et offres adaptés à 
              vos centres d\'intérêts (<a href="https://www.google.com/settings/u/0/ads">Google Customer Match</a>)</li>
            </ul>',

    'manage' => '
        <h3  class="ui dividing header">Gestion et suppression de mes données personnelles</h3>
            <ol>
              <li>
                Accès et Modification<br />
                Vous pouvez, à tout moment, accéder et modifier aux données personnelles de votre Compte. Il vous 
                suffit de vous rendre dans votre Compte. Si un numéro de TVA est renseigné, seul un numéro de TVA 
                valide pourra venir remplacer l’existant.
              </li>
              <li>
                Supression<br />
                Conformément aux articles 38, 39 et 40 de la loi nº78-17 du 6 janvier 1978 modifiée par la Loi 
                n°2004-801 du 6 août 2004, toute personne physique dispose à tout moment d\'un droit d\'accès, de 
                rectification, de suppression ainsi que d\'opposition au traitement des données le concernant.
 
                L\'Utilisateur et l\'Annonceur peuvent exercer ce droit en contactant ' . env("LEGAL_COMPAGNY_PSEUDONAME") . '
                 via la rubrique "contact".
              </li>
            </ol>',

    'conservation' => '
        <h3  class="ui dividing header">Durée de conservation</h3>
            <p>
            La durée de conservation de vos données personnelles varie en fonction de la finalité de leurs collectes:
            </p>
            <ul>
              <li>Les données relatives à la gestion de votre compte sont conservées pour une durée de 5 ans à compter 
              de sa suppression et ce, exclusivement à des fins de preuve</li>
              <li>Les documents et pièces comptables sont conservés 10 ans, à titre de preuve comptable</li>
              <li>Les numeros de transactions pour une durée de 5 ans à compter de la date du paiement</li>
              <li>Les données de connexion sont conservées 15 jours à compter de leur collecte.</li>
            </ul>',

    'security' => '
        <h3  class="ui dividing header">Sécurité des données</h3>
            <p>
            Nous protégeons vos informations à l’aide de mesures de sécurité physiques, électroniques et administratives. 
            Nos mesures de protection incluent notamment des pare-feu et des contrôles d’autorisation d’accès aux informations.
            </p>
            <p>
            Responsable de traitement, déclaration contact:<br />
            ' . env("LEGAL_COMPAGNY_PSEUDONAME") . ', représentée par monsieur Sylvain Gagnot, en sa qualité de 
            Directeur Général, est responsable du traitement des données qu’elle collecte sur son service.
            </p>
            <p>
            Conformément à la loi nº78-17 du 6 janvier 1978, dite " Informatique et libertés ", modifiée par la Loi 
            n°2004-801 du 6 août 2004, ' . env("LEGAL_COMPAGNY_PSEUDONAME") . ' a fait l\'objet ,auprès de la 
            Commission Nationale de l\'Informatique et des Libertés (C.N.I.L), de la déclaration simplifiée n° 
            ' . env("LEGAL_CNIL_NUMBER") . '
            </p>',

    'cookies' => '
            <h2  class="ui dividing header">Cookies</h2>
            <p>
                La navigation sur le Site Internet est susceptible de provoquer l’installation de
                cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille,
                qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des
                informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi
                obtenues visent à faciliter la navigation ultérieure sur le site, et ont également
                vocation à permettre diverses mesures de fréquentation.
            </p>
            <p>
                Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains
                services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante,
                pour refuser l’installation des cookies:
            </p>
            <ul>
                <li>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</li>
                <li>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l\'onglet Options. Cliquer sur l\'onglet Vie privée. Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l\'historique. Enfin décochez-la pour désactiver les cookies.</li>
                <li>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</li>
                <li>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences. Dans l\'onglet "Confidentialité", vous pouvez bloquer les cookies.</li>
            </ul>
            <p><a href="javascript:tarteaucitron.userInterface.openPanel();">Gerer mes cookies</a></p>',

];

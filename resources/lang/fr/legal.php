<?php

return [

    'title' => 'Informations légales',

    'presentation' => '
        <h2 class="ui dividing header">Présentation du site</h2>
        <p>Le site Internet <a href="'. route('portal') .'">'. route('portal').'</a>, ci-après
            dénommé « '. env('LEGAL_COMPAGNY_PSEUDONAME').' » propose un service de dépôt et de
            consultation de petites annonces sur Internet plus spécifiquement destiné aux professionnels.
        </p>

        <p>Le site est édité par <b>'. env('LEGAL_COMPAGNY_NAME').'</b>
            <small>(au capital de '. env('LEGAL_COMPAGNY_CAPITAL') .')</small>,
            <br/>Siret: immatriculée au registre du commerce et des sociétés de Tours sous le
            numéro '. env('LEGAL_COMPAGNY_SIRET') .'.
            <br/>Siège social: '. env('LEGAL_COMPAGNY_ADDRESS') .'.
            <br/>Téléphone: '. env('LEGAL_COMPAGNY_PHONE').'.
            <br/>Numéro de TVA intracommunautaire: '. env('TVA_REQUESTER_COUNTRY_CODE')  . env('TVA_REQUESTER_VAT_NUMBER').'.
        </p>

        <p>Le directeur de publication de '. env('LEGAL_COMPAGNY_PSEUDONAME').' est
            '. env('LEGAL_COMPAGNY_PUBLICATION_DIRECTOR').'.
        </p>

        <p>Le webmaster de '. env('LEGAL_COMPAGNY_PSEUDONAME').' est
            '. env('LEGAL_COMPAGNY_WEBMASTER') .'.
        </p>

        <p>L\'hebergeur de '. env('LEGAL_COMPAGNY_PSEUDONAME').' est
            '. env('LEGAL_COMPAGNY_HOST').'.
        </p>',

    'useConditions' => '
        <h2 class="ui dividing header">Conditions d\'utilisations</h2>
        <p>
            L\'accès au site, sa consultation et son utilisation sont subordonnés à l\'acceptation
            sans réserve des présentes Conditions Générales d\'Utilisation de
            '. env('LEGAL_COMPAGNY_PSEUDONAME'). ' disponibles à l’adresse suivante:
            <a href="'. route('cgu').'">'. route('cgu').'</a>
        </p>',

//    'personnalDatas' => '
//        <h2 class="ui dividing header">Données à caractère personnel</h2>
//        <p>
//            En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6
//            janvier 1978, la loi n° 2004-801 du 6 août 2004, l\'article L. 226-13 du Code pénal et la
//            Directive Européenne du 24 octobre 1995.
//        </p>
//        <p>
//            A l\'occasion de l\'utilisation du Site Internet, peuvent êtres recueillies :
//            l\'URL des liens par l\'intermédiaire desquels l\'utilisateur a accédé au Site
//            Internet, le fournisseur d\'accès de l\'utilisateur, l\'adresse de protocole
//            Internet (IP) de l\'utilisateur.
//        </p>
//        <p>
//            '. env('LEGAL_COMPAGNY_PSEUDONAME'). ' garantit que toutes les données à caractère
//            personnel au sens de la loi n°78-17 du 6 janvier 1978 modifiée quelle pourrait
//            collecter dans le cadre de la fourniture du Service
//            '. env('LEGAL_COMPAGNY_PSEUDONAME'). ', le sont dans le cadre d\'un traitement
//            strictement nécessaire à la fourniture dudit Service
//            '. env('LEGAL_COMPAGNY_PSEUDONAME'). '.
//        </p>
//        <p>
//            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978
//            relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit
//            d’accès, de rectification et d’opposition aux données personnelles le concernant, en
//            effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec
//            signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être
//            envoyée.
//        </p>
//        <p>
//            Aucune information personnelle de l\'utilisateur du Site Internet n\'est publiée à
//            l\'insu de l\'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à
//            des tiers. Seule l\'hypothèse du rachat de '. env('LEGAL_COMPAGNY_PSEUDONAME'). ' et de ses droits
//            permettrait la transmission des dites informations à l\'éventuel acquéreur qui serait à son
//            tour tenu de la même obligation de conservation et de modification des données vis à vis de
//            l\'utilisateur du Site Internet.
//        </p>
//        <p>
//            Le site susnommé est déclaré à la CNIL sous le numéro '. env('LEGAL_CNIL_NUMBER') .'.
//        </p>
//        <p>
//            Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998
//            transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases
//            de données.
//        </p>',

    'contact' => '
        <h2 class="ui dividing header">Nous joindre</h2>
        <h3 class="ui header">Pour le public</h3>
        <p>Pour toute question sur l\'entreprise ou toute demande ne provenant pas des autorités
            publiques, nous vous invitons à utiliser notre formulaire de Contact en cliquant sur
            le lien: <a href="'. route('contact'). '">'. route('contact'). '</a>. Vous pourrez
            expliquer votre situation en détail. L’équipe dédiée prendra toutes les mesures
            nécessaires.
        </p>
        <h3 class="ui header">Service réquisition</h3>
        <p>Un service réquisition répond uniquement aux demandes des autorités publiques
            (gendarmerie, police...).
            <br/>Pour les Réquisitions judiciaires et les Droits de communication, merci de
            nous faire parvenir le droit de communication (sur papier à en-tête daté, signé et
            tamponné) ou la réquisition (datée, signée et tamponnée) précisant la référence de
            l\'annonce, l\'adresse email de l\'annonceur et/ou son numéro de téléphone, en pièce
            jointe par mail à <a href="#">'. env('SERVICE_MAIL_REQUISITION'). '</a> (le délai de
            réponse est d\'environ 24h les jours ouvrés).
            <br/>La référence de l\'annonce est le numéro figurant dans l\'adresse internet de la
            page de présentation de l\'annonce.
            <br/>Exemple : :randomAdvertUrl ,la référence est :randomAdvertId.
            <br/>Nous vous transmettrons les informations demandées dans les meilleurs délais.
            Ces recherches sont effectuées à titre gracieux.
            <br/>Pour simplifier nos procédures, merci de bien vouloir indiquer dans votre
            réquisition l\'adresse email à laquelle vous faire parvenir notre réponse.
        </p>'



];

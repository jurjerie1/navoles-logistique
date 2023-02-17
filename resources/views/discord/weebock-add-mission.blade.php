<?php

$url = 'https://discord.com/api/webhooks/1075829592310415420/JhrIRqYwd5eenYzZCLElkeCizV4phrUqSrBVTgfWB_QFleodp4rrG61CwHrvgplJ_clq';
  

 // Adresse de votre webhook

$data = array(
  'content' => "test test test teyeyrfhreighthig oihtrgpoihrtpogihtropgihrti jith iputrh",   // Contenu du message, peut être formaté en Markdown
                     // Seuls les emojis de Discord fonctionnent
                     // Limité à 2000 caractères

  'username' => 'Navoles Bot', // Remplacer le nom du webhook, à enlever si inutilisé
  //'avatar_url' => '', // (rouge) Remplacer l'avatar webhook (doit être une URL), à enlever si inutilisé
  'embeds' => array(
    array(
      'title' => 'test', // Intitulé du lien
      'url' => 'test.com', // Adresse du lien
      'description' => 'test', // Texte affiché après le titre

      // Image, Miniature, Auteur et Footer son optionnels

      /*
       * Ajouter une image
       */
      //'image' => array(
       // 'url' => '', // (jaune) Adresse de l'image
        //'width' => 0, // Largeur de l'image
        //'height' => 0 // Hauteur de l'image
      //),
      /*
       * Ajouter une miniature
       */
      // 'thumbnail' => array(
      //   'url' => '', // (vert) Adresse de l'image
      //   'width' => 0, // Largeur de l'image
      //   'height' => 0 // Hauteur de l'image
      // ),
      /*
       * Ajouter un auteur
       */
      'author' => array(
        'name' => 'Navoles Bot', // Nom de l'auteur
        'url' => 'test@tes.com', // Adresse de l'auteur
        // 'icon_url' => '' // (bleu foncé) Avatar de l'ateur
      ),
      /*
       * Ajouter une mention en pied de page
       */
      'footer' => array(
        'text' => 'Navoles-logistique.com', // Texte à afficher
        //'icon_url' => '' // (bleu clair) URL de l'image
      )
    )
  ),
);

$context = array(
  'http' => array(
    'method' => 'POST',
    'header' => "Content-type: application/json\r\n",
    'content' => json_encode($data),
  )
);

/*
 * Attention, certains serveurs désactivent la fonction 'allow_url_fopen'.
 * Si c'est votre cas et si vous ne pouvez pas l'activer, vous ne pourrez
 * pas utiliser ce script directement. Vous devrez utiliser cURL !
 */

$context  = stream_context_create($context);
$result = @file_get_contents($url, false, $context);

if($result === false) {
  return false;
}

return true;
Identifiant admin : admintest@test.com   mdp : test
Identifiant user : test@test.com   mdp : test

Mon projet consiste a répertorier toutes les équipes LEC (League Of Legends European Championship) ainsi que tous les joueurs et leur poste. La feature du site consiste a pouvoir créer sa dream team en choisisant son joueur favoris a chaque rôle peu importe son équipe de base.

Ma première difficulté était de faire les fixtures car je voulais de vraies données et pas de faker. J'ai du répertorier moi même chaque équipe et ses joueurs en plus de trouver et télécharger toutes les photos. 
J'ai eu aussi du mal à afficher les photos, je suis resté bloqué dessus plusieurs heures sans comprendre pourquoi. J'ai trouvé la solution qui était simplement de placer les photos dans le dossier "public".
J'ai également du refaire toutes mes fixtures car je les avais triées par team de base, ce qui n'allait pas une fois mes entitées créées.

J'ai eu beaucoup de mal a arriver à supprimer les dreamteams créées par les users, ma logique n'allait pas, c'était surtout dû à une incompréhension de la logique symfony de ma part. ça m'a permis de relire plusieurs fois le cours et de comprendre un peu mieux comment marche symfony.

Ma feature de création de dream team est fonctionnelle. Une fois la team créée elle apparaitra dans l'onglet "Les dream teams" avec toutes les autres teams créées.
On peut, en étant connecté en tant qu'admin, ajouter des joueurs (apparition d'un bouton dans l'écran "les joueurs"). Supprimer et modifier un joueur, les boutons apparaisse sur la page player/item.html.twig. On peut également supprimer des dream teams en tant qu'admin.

Pour l'utilisation de l'IA je mets un 8/10, je m'en suis beaucoup servi lors de mes bugs et pour me guider sur quoi faire et où le faire. 



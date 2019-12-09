# Mise en place d'une architecture MVC

Parcours de fin de saison, on attendait de nous de mettre en place la structure vue au cours de cette saison : des contrôleurs, des routes, modèles et des vues.

## Sujet :

On nous demande de mettre en place un petit site sur **Sonic**, contenant 2 pages :

- Page d'accueil avec tous les personnages de l'univers **Sonic**, par ordre alphabétique
- Page sur les 3 créateurs du premier jeu **Sonic**

La modélisation de la base de données et la base de données étaient fournies.

### Structure du projet

La structure du projet étant similaire au projet de la saison, vous pouvez, si vous le souhaitez, en récupérer les sources pour les modifier pour correspondre au parcours.  
:warning: Attention, tout le code présent dans vos sources doit être utile au projet. **Il ne doit rester aucun code supperflu**.


### Layout

L'aspect visuel du site était imposé :
En haut de chaque page, une navigation contenant des liens vers la page d'accueil et la page des créateurs du jeu.

### Page d'accueil

Il fallait récupérer les données sur les personnages et leur type depuis la base de données, et afficher les personnages (image, nom, type, description) dans un `<table>`, par ordre alphabétique

### Les créateurs

Les créateurs devaient être ajoutés *en dur* dans la vue

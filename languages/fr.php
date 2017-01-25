<?php
/**
 * Elgg ShareMaps plugin
 * @package sharemaps
 */

$francais = array(

    //Menu items and titles
    'sharemaps' => "Cartes",
    'sharemaps:menu' => "Cartes",
    'sharemaps:user' => "Cartes de %s",
    'sharemaps:friends' => "Cartes des contacts",
    'sharemaps:all' => "Toutes les cartes du site",
    'sharemaps:edit' => "Modifier la carte",
    'sharemaps:more' => "Plus de Cartes",
    'sharemaps:list' => "Vue en liste",
    'sharemaps:group' => "Cartes du groupe",
    'sharemaps:gallery' => "Vue en galerie",
    'sharemaps:gallery_list' => "Vue en liste ou en galerie",
    'sharemaps:num_files' => "Nombre de cartes à afficher",
    'sharemaps:user:gallery'=>'Voir la galerie de %s',
    'sharemaps:upload' => "Charger une carte",
    'sharemaps:replace' => 'Remplacer le contenu de la carte (laisser vide pour ne pas changer le fichier)',
    'sharemaps:list:title' => "%s's %s %s",
    'sharemaps:title:friends' => "Contacts'",
    'sharemaps:invalid:entity' => "Carte non supportée",

    'sharemaps:add' => 'Charger une carte',

    'sharemaps:file' => "Carte",
    'sharemaps:title' => "Titre",
    'sharemaps:desc' => "Description",
    'sharemaps:tags' => "Tags",

    'sharemaps:list:list' => "Passer à la vue en liste",
    'sharemaps:list:gallery' => "Passer à la vue en galerie",

    'sharemaps:types' => "Uploaded file types",

    'sharemaps:type:' => 'Cartes',
    'sharemaps:type:all' => "Toute la carte",
    'sharemaps:type:general' => "General",

    'sharemaps:widget' => "Sharemaps widget",
    'sharemaps:widget:description' => "Affiche vous dernières cartes",

    'groups:enablemaps' => 'Activer les cartes pour les groupes',

    'sharemaps:download' => "Télécharger",

    'sharemaps:delete:confirm' => "Êtes vous sûr de vouloir supprimer cette carte?",

    'sharemaps:tagcloud' => "Tag cloud",

    'sharemaps:display:number' => "Nombre de cartes à afficher",

    'river:create:object:sharemaps' => "%s a chargé la carte %s",
    'river:comment:object:sharemaps' => "%s a commenté la carte %s",
    'river:create:object:drawmap' => "%s a créé la carte %s",
    
    'item:object:sharemaps' => 'Cartes',
    'item:object:drawmap' => 'Cartes',

    'sharemaps:newupload' => 'Une nouvelle carte a été chargée',
    'sharemaps:notification' =>
'%s a chargé une nouvelle carte:

%s
%s

voir et commenter:
%s
',

    //Status messages
    'sharemaps:saved' => "Votre carte a été enregistrée avec succès.",
    'sharemaps:deleted' => "Votre carte a été supprimée avec succès.",

    //Error messages
    'sharemaps:none' => "Aucune carte.",
    'sharemaps:uploadfailed' => "Désolé, nous n'avons pas été en mesure de sauvegarder votre carte.",
    'sharemaps:downloadfailed' => "Désolé, cette carte n'est disponible actuellement.",
    'sharemaps:deletefailed' => "Votre carte ne peut pas être supprimée en ce moment.",
    'sharemaps:noaccess' => "Vous n'avez pas la permission de modifier cette carte",
    'sharemaps:cannotload' => "Erreur dans le chargement du fichier",
    'sharemaps:nofile' => "Merci de selectionner un fichier carte",
    'sharemaps:nokmlfile' => "Format non supporté. Le format doit être Google Earth KML ou KMZ",
    'sharemaps:noaccesstofilemap' => "Erreur d'accès au fichier",
    'sharemaps:add:noaccessforpost' => "Pas d'accès valide pour cette action",

    // settings
    'sharemaps:settings:no' => "Non",
    'sharemaps:settings:yes' => "Oui",   
    'sharemaps:settings:before' => "Avant",
    'sharemaps:settings:after' => "Après",   
    'sharemaps:settings:google_maps' => "Paramètres Google Maps",
    'sharemaps:settings:google_api_key' => 'Google API key',
    'sharemaps:settings:google_api_key:help' => 'Go to <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a> to get your "Google API key". <br /><strong>Note:</strong> the API key is NOT required. Only if you want stats on your api usage, or if you have a paid API account the key is needed',
    'sharemaps:settings:default_coords' => 'Coordonnées par défaut', 
    'sharemaps:settings:default_coords:help' => "Entrez les coordonnées par défaut. Latitude et longitude sèparèes par une virgule. ex. <strong>35.516426,24.017444</strong>",    
    'sharemaps:settings:map_width' => 'Largeur de la carte',
    'sharemaps:settings:map_width:help' => 'Valeur numérique (e.g. 500) ou % (e.g. 100%)',
    'sharemaps:settings:map_height' => 'Hauteur de la carte',
    'sharemaps:settings:map_height:help' => 'Valeur numérique (e.g. 500)',
    'sharemaps:settings:map_upload' => 'Activer la possibilité de charger une carte', 
    'sharemaps:settings:map_upload:help' => "Sélectionner oui si vous souhaitez autoriser le chargement de fichier du type .kml or .gpx",
    'sharemaps:settings:map_creation' => "Activer la création de cartes", 
    'sharemaps:settings:map_creation:help' => "Sélectionner oui si vous souhaitez autoriser la création de cartes en ligne",    
    'sharemaps:settings:gmaps_links' => 'Activer les liens Google Maps', 
    'sharemaps:settings:gmaps_links:help' => "Sélectionner oui si vous souhaitez afficher des liens Google Maps dans une iframe",    
    'sharemaps:settings:map_description' => "Afficher la carte avant ou après la description", 
    'sharemaps:settings:map_description:help' => "Choisir si vous souhaitez afficher la carte avant ou après le texte. Par défaut cela s'affiche avant.",
    
    // embed maps
    'sharemaps:embed' => "Insérer un lien Google Map",
    'sharemaps:addembed' => "Insérer un lien Google Map",
    'sharemaps:gmaplink' => 'Google map link',
    'sharemaps:gmaplinkhowto' => 'Copier URL depuis google map <strong>Embed map</strong> et le coller ici (NO SHORT URL)',
    'sharemaps:gmaphowtouploadkml' => 'Le type de fichier doit etre Google Earth KML ou KMZ. Vous pouvez convertir vos fichier .gpx ici <a href="http://gpx2kml.com" target="_blank" title="Convertir fichiers gpx vers kml">http://gpx2kml.com</a>.',
    'sharemaps:gmaplinknovalid' => 'URL invalide',
    'sharemaps:gmaplinknomapsgooglecom' => 'Lien invalide',
    'sharemaps:nogmaplink' => 'Le lien est vide',
    'sharemaps:dosekapoiotitle' => 'Le Titre est vide. Merci de le renseigner',
    
    // draw maps
    'sharemaps:drawmap' => "Créer une carte",
    'sharemaps:drawmap/add' => "Créer une carte",
    'item:object:drawmap' => "Créer des cartes",
    'item:object:drawmapobject' => 'Dessiner les objets de la carte',
    'sharemaps:drawmap:save' => 'Sauvegarder la carte',
    'sharemaps:drawmap:draw' => "Sélectionner des formes et les ajouter à la carte.",
        
    // gpx files
    'sharemaps:novalidfile' => "Type de fichier non supporté. Types de fichiers supportés .gpx or Google Earth KML ou KMZ",
    'sharemaps:gmaphowtouploadgpxkml' => 'Le type de fichier doit etre Google Earth KML ou KMZ. Vous pouvez convertir vos fichier .gpx ici <a href="http://gpx2kml.com" target="_blank" title="Convertir fichiers gpx vers kml">http://gpx2kml.com</a>.',
);

add_translation("fr", $francais);

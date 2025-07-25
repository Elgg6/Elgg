<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	/**
	 * Menu items and titles
	 */
	'thewire' => "Le Fil",

	'item:object:thewire' => "Messages du Fil",
	'collection:object:thewire' => 'Messages du Fil',
	
	'collection:object:thewire:all' => "Tous les messages du Fil",
	'collection:object:thewire:owner' => "Le Fil de %s",
	'collection:object:thewire:friends' => "Messages du Fil des contacts",
	'collection:object:thewire:mentions' => "Messages du Fil mentionnant @%s",
	
	'notification:object:thewire:create' => "Envoyer une notification lorsqu'un message est publié sur le Fil",
	'notifications:mute:object:thewire' => "à propos du message du Fil \"%s\"",
	
	'entity:edit:object:thewire:success' => 'Le Message de ce Fil a bien été enregistré',

	'thewire:menu:filter:mentions' => "Mentions",
	
	'thewire:replying' => "Répondre à %s (@%s), qui a écrit",
	'thewire:thread' => "Conversation",
	'thewire:charleft' => "caractères restant",
	'thewire:tags' => "Messages du Fil taggués \"%s\"",
	'thewire:noposts' => "Il n'y a pas encore de message sur le Fil", // @todo remove in Elgg 7.0

	'thewire:by' => 'Message du Fil de %s',

	'thewire:form:body:placeholder' => "Que se passe-t-il ?",
	
	/**
	 * The wire river
	 */
	'river:object:thewire:create' => "%s a écrit sur %s",
	'thewire:wire' => 'le Fil',

	/**
	 * Wire widget
	 */
	
	'widgets:thewire:description' => 'Affiche vos derniers messages publiés sur le Fil',
	'thewire:num' => 'Nombre de messages à afficher',
	'thewire:moreposts' => 'Plus de messages du Fil',

	/**
	 * Status messages
	 */
	'thewire:posted' => "Votre message a bien été publié sur le Fil.",
	'thewire:blank' => "Désolé, vous devez d'abord écrire un message avant de pouvoir le publier.",
	'thewire:notsaved' => "Désolé. Impossible d'enregistrer ce message du Fil.",

	/**
	 * Notifications
	 */
	'thewire:notify:summary' => 'Nouveau message sur le Fil : %s',
	'thewire:notify:subject' => "Nouveau message sur le Fil de %s",
	'thewire:notify:reply' => '%s a répondu à %s sur le Fil :',
	'thewire:notify:post' => '%s a publié sur le Fil :',
	'thewire:notify:footer' => "Voir et répondre :\n%s",
	
	'notification:mentions:object:thewire:subject' => '%s vous a mentionné dans un message du Fil',

	/**
	 * Settings
	 */
	'thewire:settings:limit' => "Nombre maximum de caractères pour chaque message du Fil :",
	'thewire:settings:limit:none' => "Pas de limite",
	
	/**
	 * Exceptions
	 */
	'ValidationException:thewire:limit' => "Le nombre de caractères de ce Message du Fil dépasse la limite maximum autorisée",
);

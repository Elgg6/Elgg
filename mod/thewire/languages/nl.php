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
	'thewire' => "The Wire",

	'item:object:thewire' => "Wire bericht",
	'collection:object:thewire' => 'Wire berichten',
	
	'collection:object:thewire:all' => "Alle wire berichten",
	'collection:object:thewire:owner' => "%s's wire berichten",
	'collection:object:thewire:friends' => "Wire berichten van vrienden",
	'collection:object:thewire:mentions' => "Wire berichten die @%s vermelden",
	
	'notification:object:thewire:create' => "Stuur een notificatie wanneer een wire bericht is gemaakt",
	'notifications:mute:object:thewire' => "over het wire bericht '%s'",
	
	'entity:edit:object:thewire:success' => 'Het wire bericht is succesvol opgeslagen',

	'thewire:menu:filter:mentions' => "Vermeldingen",
	
	'thewire:replying' => "Antwoord op %s (@%s), die schreef",
	'thewire:thread' => "Conversatie",
	'thewire:charleft' => "karakters resterend",
	'thewire:tags' => "Wire berichten met de tag '%s'",
	'thewire:noposts' => "Nog geen wire berichten", // @todo remove in Elgg 7.0

	'thewire:by' => 'Wire bericht van %s',

	'thewire:form:body:placeholder' => "Wat gebeurt er?",
	
	/**
	 * The wire river
	 */
	'river:object:thewire:create' => "%s plaatste %s",
	'thewire:wire' => 'The Wire',

	/**
	 * Wire widget
	 */
	
	'widgets:thewire:description' => 'Toon je laatste wire berichten',
	'thewire:num' => 'Aantal items om weer te geven',
	'thewire:moreposts' => 'Meer wire berichten',

	/**
	 * Status messages
	 */
	'thewire:posted' => "Je bericht is succesvol geplaatst op The Wire.",
	'thewire:blank' => "Sorry, je moet wel iets intypen voordat we je bericht kunnen versturen!",
	'thewire:notsaved' => "Sorry, we konden je wire bericht niet opslaan.",

	/**
	 * Notifications
	 */
	'thewire:notify:summary' => 'Nieuw wire bericht: %s',
	'thewire:notify:subject' => "Nieuw wire bericht van %s",
	'thewire:notify:reply' => '%s reageerde op %s op The Wire:',
	'thewire:notify:post' => '%s plaatste op The Wire:',
	'thewire:notify:footer' => "Bekijk en reageer:\n%s",
	
	'notification:mentions:object:thewire:subject' => '%s heeft je vermeld in een wire bericht',

	/**
	 * Settings
	 */
	'thewire:settings:limit' => "Maximum aantal karakters voor wire berichten:",
	'thewire:settings:limit:none' => "Geen limiet",
	
	/**
	 * Exceptions
	 */
	'ValidationException:thewire:limit' => "De lengte van het bericht is groter dan de toegestane waarde",
);

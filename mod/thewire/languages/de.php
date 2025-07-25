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
	'thewire' => "Der Heiße Draht",

	'item:object:thewire' => "Nachrichten im Heißen Draht",
	'collection:object:thewire' => 'Nachrichten im Heißen Draht',
	
	'collection:object:thewire:all' => "Alle Nachrichten im Heißen Draht",
	'collection:object:thewire:owner' => "Der Heiße Draht von %s",
	'collection:object:thewire:friends' => "Deine Freunde im Heißen Draht",
	
	'notification:object:thewire:create' => "Sende eine Benachrichtigung, wenn eine neue Nachricht im Heißen Draht geschrieben wurde",
	'notifications:mute:object:thewire' => "über die Nachricht '%s' im Heißen Draht",
	
	'thewire:replying' => "Antworten auf %s (@%s), der schrieb",
	'thewire:charleft' => "Zeichen übrig",
	'thewire:tags' => "Nachrichten im Heißen Draht mit dem Tag '%s'",
	'thewire:noposts' => "Noch keine Nachrichten im Heißen Draht.", // @todo remove in Elgg 7.0

	'thewire:by' => 'Nachricht im Heißen Draht von %s',

	'thewire:form:body:placeholder' => "Was gibt's Neues?",
	
	/**
	 * The wire river
	 */
	'river:object:thewire:create' => "%s schrieb an %s",
	'thewire:wire' => 'Heißen Draht',

	/**
	 * Wire widget
	 */
	
	'widgets:thewire:description' => 'Anzeige Deiner neuesten Nachrichten im Heißen Draht.',
	'thewire:num' => 'Anzahl der anzuzeigenden Einträge',
	'thewire:moreposts' => 'Weitere Nachrichten im Heißen Draht',

	/**
	 * Status messages
	 */
	'thewire:posted' => "Deine Nachricht wurde dem Heißen Draht hinzugefügt.",
	'thewire:blank' => "Entschuldigung, Du mußt erst etwas schreiben, bevor es veröffentlicht werden kann.",
	'thewire:notsaved' => "Entschuldigung, das Speichern der Nachricht ist fehlgeschlagen.",

	/**
	 * Notifications
	 */
	'thewire:notify:summary' => 'Neue Nachricht im Heißen Draht: %s',
	'thewire:notify:subject' => "Neue Nachricht im Heißen Draht von %s",
	'thewire:notify:reply' => '%s antwortete auf %s im Heißen Draht:',
	'thewire:notify:post' => '%s schrieb im Heißen Draht:',
	'thewire:notify:footer' => "Schau Dir die Nachricht an und antworte:\n%s",

	/**
	 * Settings
	 */
	'thewire:settings:limit' => "Maximal erlaubte Anzahl an Zeichen in Nachrichten im Heißen Draht:",
	'thewire:settings:limit:none' => "Kein Limit",
	
	/**
	 * Exceptions
	 */
);

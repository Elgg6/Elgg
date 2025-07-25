<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	'item:object:blog' => 'Blog',
	'collection:object:blog' => 'Bloguri',
	
	'collection:object:blog:all' => 'Toate blogurile site-ului',
	'collection:object:blog:owner' => 'Bloguri %s',
	'collection:object:blog:group' => 'Bloguri de grup',
	'collection:object:blog:friends' => 'Blogurile prietenilor',
	'add:object:blog' => 'Adaugă postare de blog',
	'edit:object:blog' => 'Editează postarea de blog',
	
	'notification:object:blog:publish' => "Trimite o notificare atunci când un blog este publicat",
	'notifications:mute:object:blog' => "despre blogul '%s'",

	'blog:revisions' => 'Revizuiri',
	'blog:archives' => 'Arhive',

	'groups:tool:blog' => 'Activează blogul de grup',

	// Editing
	'blog:excerpt' => 'Sumar',
	'blog:body' => 'Conținut',
	'blog:save_status' => 'Ultima salvare:',

	'blog:revision' => 'Revizuire',
	
	// messages
	'blog:message:saved' => 'Postare de blog salvată.',
	'blog:error:cannot_save' => 'Nu am putut salva postarea de blog.',
	'blog:error:cannot_write_to_container' => 'Acces insuficient pentru a salva blogul către grup.',
	'blog:edit_revision_notice' => '(Versiune veche)',
	'blog:none' => 'Nu există postări de blog.', // @todo remove in Elgg 7.0
	'blog:error:missing:title' => 'Te rugăm să introduci un titlu de blog!',
	'blog:error:missing:description' => 'Te rugăm să introduci conținutul blogului tău!',
	'blog:error:post_not_found' => 'Nu am putit găsi postarea de blog specificată.',
	'blog:error:revision_not_found' => 'Nu am putut găsi această revizuire.',

	// river
	'river:object:blog:create' => '%s a publicat o postare de blog %s',
	'river:object:blog:comment' => '%s a adăugat un comentariu la blogul %s',

	// notifications
	'blog:notify:summary' => 'Postare de blog nouă numită %s',
	'blog:notify:subject' => 'Postare de blog nouă: %s',
	'blog:notify:body' => '%s a publicat o nouă postare de blog: %s

%s

Vezi și comentează la postarea de blog:
%s',

	// widget
	'widgets:blog:name' => 'Postări de blog',
	'widgets:blog:description' => 'Afișează-ți ultimele postări de blog',
	'blog:moreblogs' => 'Mai multe postări de blog',
	'blog:numbertodisplay' => 'Numărul de postări de blog pentru afișare',
);

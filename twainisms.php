<?php

/*
Plugin Name: Twainisms
Description: Enjoy the best Mark Twain quotes, right in your admin dashboard footer.
Author: Ivan Lutrov
Version: 1.0
*/

//
// Replace default Wordpress left footer message with a random Mark Twain quote.
//
add_filter('admin_footer_text', 'twainism_random_quotation', 11);
function twainism_random_quotation($text) {
	$quotes = array(
		"A classic is something that everybody wants to have read and nobody wants to read. -- Mark Twain",
		"A habit cannot be tossed out the window, it must be coaxed down the stairs a step at a time. -- Mark Twain",
		"A man cannot be comfortable without his own approval. -- Mark Twain",
		"A man's character may be learned from the adjectives which he habitually uses in conversation. -- Mark Twain",
		"A man's private thought can never be a lie. What he thinks, is to him the truth, always. -- Mark Twain",
		"A patriot is that person who can holler the loudest without knowing what he is hollering about. -- Mark Twain",
		"Action speaks louder than words but not nearly as often. -- Mark Twain",
		"All generalizations are false, including this one. -- Mark Twain",
		"Always obey your parents, when they are present. -- Mark Twain",
		"An inglorious peace is better than a dishonorable war. -- Mark Twain",
		"Any emotion, if it is sincere, is involuntary. -- Mark Twain",
		"Apparently there is nothing that cannot happen today. -- Mark Twain",
		"Be careful about reading health books. You may die of a misprint. -- Mark Twain",
		"Better to remain silent and be thought a fool than to speak out and remove all doubt. -- Mark Twain",
		"Books are for people who wish they were somewhere else. -- Mark Twain",
		"Buy land, they're not making it anymore. -- Mark Twain",
		"Conservatism is the blind and fear-filled worship of dead radicals. -- Mark Twain",
		"Courage is resistance to fear and mastery of fear, not absence of fear. -- Mark Twain",
		"Diligence is a good thing, but taking things easy is much more restful. -- Mark Twain",
		"Do not put off till tomorrow what can be put off till day-after-tomorrow just as well. -- Mark Twain",
		"Do the right thing. It will gratify some people and astonish the rest. -- Mark Twain",
		"Education is the path from cocky ignorance to miserable uncertainty. -- Mark Twain",
		"Every one is a moon, and has a dark side which he never shows to anybody. -- Mark Twain",
		"Facts are stubborn, but statistics are more pliable. -- Mark Twain",
		"Get your facts first, then you can distort them as you please. -- Mark Twain",
		"Golf is a good walk spoiled. -- Mark Twain",
		"Good friends, good books and a sleepy conscience: this is the ideal life. -- Mark Twain",
		"Heaven goes by favor, if it went by merit, you would stay out and your dog would go in. -- Mark Twain",
		"I deal with temptation by yielding to it. -- Mark Twain",
		"I have never let my schooling interfere with my education. -- Mark Twain",
		"I was seldom able to see an opportunity until it had ceased to be one. -- Mark Twain",
		"If you tell the truth you don't have to remember anything. -- Mark Twain",
		"It's not the size of the dog in the fight, it's the size of the fight in the dog. -- Mark Twain",
		"It is a mistake that there is no bath that will cure people's manners, but drowning would help. -- Mark Twain",
		"It is better to deserve honors and not have them than to have them and not to deserve them. -- Mark Twain",
		"It is better to keep your mouth shut and appear stupid than to open it and remove all doubt. -- Mark Twain",
		"It is better to take what does not belong to you than to let it lie around neglected. -- Mark Twain",
		"It is curious that physical courage should be so common in the world, and moral courage so rare. -- Mark Twain",
		"It is easier to stay out than get out. -- Mark Twain",
		"It is wiser to find out than to suppose. -- Mark Twain",
		"It takes me a long time to lose my temper, but once lost I could not find it with a dog. -- Mark Twain",
		"It usually takes me more than three weeks to prepare a good impromptu speech. -- Mark Twain",
		"Let us live so that when we come to die even the undertaker will be sorry. -- Mark Twain",
		"Let us swear while we may, for in heaven it will not be allowed. -- Mark Twain",
		"Man is the only creature who has a nasty mind. -- Mark Twain",
		"Many a small thing has been made large by the right kind of advertising. -- Mark Twain",
		"Necessity is the mother of taking chances. -- Mark Twain",
		"Never do wrong when people are looking. -- Mark Twain",
		"Never put off till tomorrow what you can do the day after tomorrow. -- Mark Twain",
		"Nothing so needs reforming as other people's habits. -- Mark Twain",
		"Patriotism is supporting your country all the time, and your government when it deserves it. -- Mark Twain",
		"Really great people make you feel that you, too, can become great. -- Mark Twain",
		"Sanity and happiness are an impossible combination. -- Mark Twain",
		"The best way to cheer yourself up is to try to cheer somebody else up. -- Mark Twain",
		"The first of April is the day we remember what we are the other 364 days of the year. -- Mark Twain",
		"The human race has only one really effective weapon and that is laughter. -- Mark Twain",
		"The lack of money is the root of all evil. -- Mark Twain",
		"The main difference between a cat and a lie is that a cat only has nine lives. -- Mark Twain",
		"The man who does not read good books has no advantage over the man who cannot read them. -- Mark Twain",
		"The more things are forbidden, the more popular they become. -- Mark Twain",
		"The more you explain it, the more I don't understand it. -- Mark Twain",
		"The most interesting information comes from children, for they tell all they know and then stop. -- Mark Twain",
		"The proper role of a friend is to side with you when you are in the wrong. -- Mark Twain",
		"The reports of my death are greatly exaggerated. -- Mark Twain",
		"The right word may be effective, but no word was ever as effective as a rightly timed pause. -- Mark Twain",
		"The trouble ain't that there is too many fools, but that the lightning ain't distributed right. -- Mark Twain",
		"The very ink with which history is written is merely fluid prejudice. -- Mark Twain",
		"There are lies, damned lies and statistics. -- Mark Twain",
		"There are several good protections against temptations, but the surest is cowardice. -- Mark Twain",
		"There is no sadder sight than a young pessimist. -- Mark Twain",
		"Thousands of geniuses live and die undiscovered, either by themselves or by others. -- Mark Twain",
		"Thunder is impressive, but it is lightning that does all the work. -- Mark Twain",
		"To succeed in life, you need two things: ignorance and confidence. -- Mark Twain",
		"Under certain circumstances, profanity provides a relief denied even to prayer. -- Mark Twain",
		"Virtue has never been as respectable as money. -- Mark Twain",
		"Water, taken in moderation, cannot hurt anybody. -- Mark Twain",
		"We have the best government that money can buy. -- Mark Twain",
		"Whatever you say, say it with conviction. -- Mark Twain",
		"When angry, count to four. When very angry, swear. -- Mark Twain",
		"When I was younger I could remember anything, whether it happened or not. -- Mark Twain",
		"When in doubt, tell the truth. -- Mark Twain",
		"When one has tasted watermelon he knows what the angels eat. -- Mark Twain",
		"When red-haired people are above a certain social grade their hair is auburn. -- Mark Twain",
		"When we remember we are all mad, the mysteries disappear and life stands explained. -- Mark Twain",
		"When you fish for love, bait with your heart, not your brain. -- Mark Twain",
		"Whenever you find yourself on the side of the majority, it is time to pause and reflect. -- Mark Twain",
		"Work and play are words used to describe the same thing under differing conditions. -- Mark Twain",
		"Wrinkles should merely indicate where smiles have been. -- Mark Twain"
	);
	$line = $quotes[mt_rand(0, count($quotes) - 1)];
	if (strpos($line, '--') > 0) {
		$text = sprintf('<em><q>%s</q></em>', str_replace(' -- ', ' &ndash; ', $line));
	} else {
		$text = $line;
	}
	return $text;
}

//
// Modify default Wordpress right footer message.
//
add_filter('update_footer', 'twainism_wordpress_version', 11);
function twainism_wordpress_version($text) {
	global $wp_version;
	$text = sprintf('<em>Wordpress %s</em>', $wp_version);
	return $text;
}

//
// Update robots.txt file.
//
function twainism_robots_textfile($action) {
	$path = sprintf('%s/robots.txt', rtrim(ABSPATH, '/'));
	switch ($action) {
		case 'install':
			if (($fp = fopen($path, 'w'))) {
				fwrite($fp, sprintf('Sitemap: %s/sitemap.xml', site_url()));
				fclose($fp);
			}
			break;
		case 'uninstall':
			if (file_exists($path) == true) {
				unlink($path);
			}
			break;
	}
}

//
// Register plugin activation hook.
//
register_activation_hook(__FILE__, 'twainism_activate');
function twainism_activate() {
	twainism_robots_textfile('install');
}

//
// Register plugin deactivation hook.
//
register_deactivation_hook(__FILE__, 'twainism_deactivate');
function twainism_deactivate() {
	twainism_robots_textfile('uninstall');
}

?>
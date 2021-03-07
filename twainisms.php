<?php

/*
Plugin Name: Twainisms
Version: 1.6
Description: Enjoy the best Mark Twain quotes, right in your admin dashboard footer.
Plugin URI: https://github.com/lutrov/twainisms
Copyright: 2017, Ivan Lutrov
Author: Ivan Lutrov
Author URI: http://lutrov.com

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program; if not, write to the Free Software Foundation, Inc., 51 Franklin
Street, Fifth Floor, Boston, MA 02110-1301, USA. Also add information on how to
contact you by electronic and paper mail.
*/

defined('ABSPATH') || die('Ahem.');

//
// Replace default Wordpress left footer message with a random Mark Twain quote.
//
add_filter('admin_footer_text', 'twainism_random_quotation_filter', 16, 1);
function twainism_random_quotation_filter($text) {
	$quotes = array(
		"A classic is something that everybody wants to have read and nobody wants to read.",
		"A habit cannot be tossed out the window, it must be coaxed down the stairs a step at a time.",
		"A man cannot be comfortable without his own approval.",
		"A man's character may be learned from the adjectives which he habitually uses in conversation.",
		"A man's private thought can never be a lie. What he thinks, is to him the truth, always.",
		"A patriot is that person who can holler the loudest without knowing what he is hollering about.",
		"Action speaks louder than words but not nearly as often.",
		"All generalizations are false, including this one.",
		"Always obey your parents, when they are present.",
		"An inglorious peace is better than a dishonorable war.",
		"Any emotion, if it is sincere, is involuntary.",
		"Apparently there is nothing that cannot happen today.",
		"Be careful about reading health books. You may die of a misprint.",
		"Better to remain silent and be thought a fool than to speak out and remove all doubt.",
		"Books are for people who wish they were somewhere else.",
		"Buy land, they're not making it anymore.",
		"Conservatism is the blind and fear-filled worship of dead radicals.",
		"Courage is resistance to fear and mastery of fear, not absence of fear.",
		"Diligence is a good thing, but taking things easy is much more restful.",
		"Do not put off till tomorrow what can be put off till day-after-tomorrow just as well.",
		"Do the right thing. It will gratify some people and astonish the rest.",
		"Education is the path from cocky ignorance to miserable uncertainty.",
		"Every one is a moon, and has a dark side which he never shows to anybody.",
		"Facts are stubborn, but statistics are more pliable.",
		"Get your facts first, then you can distort them as you please.",
		"Golf is a good walk spoiled.",
		"Good friends, good books and a sleepy conscience: this is the ideal life.",
		"Heaven goes by favor, if it went by merit, you would stay out and your dog would go in.",
		"I deal with temptation by yielding to it.",
		"I have never let my schooling interfere with my education.",
		"I was seldom able to see an opportunity until it had ceased to be one.",
		"If you tell the truth you don't have to remember anything.",
		"It's not the size of the dog in the fight, it's the size of the fight in the dog.",
		"It is a mistake that there is no bath that will cure people's manners, but drowning would help.",
		"It is better to deserve honors and not have them than to have them and not to deserve them.",
		"It is better to keep your mouth shut and appear stupid than to open it and remove all doubt.",
		"It is better to take what does not belong to you than to let it lie around neglected.",
		"It is curious that physical courage should be so common in the world, and moral courage so rare.",
		"It is easier to stay out than get out.",
		"It is wiser to find out than to suppose.",
		"It takes me a long time to lose my temper, but once lost I could not find it with a dog.",
		"It usually takes me more than three weeks to prepare a good impromptu speech.",
		"Let us live so that when we come to die even the undertaker will be sorry.",
		"Let us swear while we may, for in heaven it will not be allowed.",
		"Man is the only creature who has a nasty mind.",
		"Many a small thing has been made large by the right kind of advertising.",
		"Necessity is the mother of taking chances.",
		"Never do wrong when people are looking.",
		"Never put off till tomorrow what you can do the day after tomorrow.",
		"Nothing so needs reforming as other people's habits.",
		"Patriotism is supporting your country all the time, and your government when it deserves it.",
		"Really great people make you feel that you, too, can become great.",
		"Sanity and happiness are an impossible combination.",
		"The best way to cheer yourself up is to try to cheer somebody else up.",
		"The first of April is the day we remember what we are the other 364 days of the year.",
		"The human race has only one really effective weapon and that is laughter.",
		"The lack of money is the root of all evil.",
		"The main difference between a cat and a lie is that a cat only has nine lives.",
		"The man who does not read good books has no advantage over the man who cannot read them.",
		"The more things are forbidden, the more popular they become.",
		"The more you explain it, the more I don't understand it.",
		"The most interesting information comes from children, for they tell all they know and then stop.",
		"The proper role of a friend is to side with you when you are in the wrong.",
		"The reports of my death are greatly exaggerated.",
		"The right word may be effective, but no word was ever as effective as a rightly timed pause.",
		"The trouble ain't that there is too many fools, but that the lightning ain't distributed right.",
		"The very ink with which history is written is merely fluid prejudice.",
		"There are lies, damned lies and statistics.",
		"There are several good protections against temptations, but the surest is cowardice.",
		"There is no sadder sight than a young pessimist.",
		"Thousands of geniuses live and die undiscovered, either by themselves or by others.",
		"Thunder is impressive, but it is lightning that does all the work.",
		"To succeed in life, you need two things: ignorance and confidence.",
		"Under certain circumstances, profanity provides a relief denied even to prayer.",
		"Virtue has never been as respectable as money.",
		"Water, taken in moderation, cannot hurt anybody.",
		"We have the best government that money can buy.",
		"Whatever you say, say it with conviction.",
		"When angry, count to four. When very angry, swear.",
		"When I was younger I could remember anything, whether it happened or not.",
		"When in doubt, tell the truth.",
		"When one has tasted watermelon he knows what the angels eat.",
		"When red-haired people are above a certain social grade their hair is auburn.",
		"When we remember we are all mad, the mysteries disappear and life stands explained.",
		"When you fish for love, bait with your heart, not your brain.",
		"Whenever you find yourself on the side of the majority, it is time to pause and reflect.",
		"Work and play are words used to describe the same thing under differing conditions.",
		"Wrinkles should merely indicate where smiles have been."
	);
	$line = sprintf('<em><q>%s</q> &ndash; Mark Twain</em>', $quotes[mt_rand(0, count($quotes) - 1)]);
	return $line;
}

//
// Modify default Wordpress right footer message.
//
add_filter('update_footer', 'twainism_wordpress_version_filter', 11, 1);
function twainism_wordpress_version_filter($text) {
	global $wp_version;
	$text = sprintf('<em title="PHP %s">WordPress %s</em>', phpversion(), $wp_version);
	return $text;
}

?>

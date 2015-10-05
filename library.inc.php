<?php

/**
 * Create a new Card Deck and two new player hands from that deck as an array
 * 
 * @return array An array consisting of the Dealer Hand, Player Hand, and remainder of Deck
 */
function getNewHand() {
	$deck = getCardDeck();
	$dealer = array(drawCard($deck), drawCard($deck));
	$player = array(drawCard($deck), drawCard($deck));
	
	return array($dealer, $player, $deck);
}

/**
 * Display the HTML for the current hand
 *
 * @param array $dealer The Dealer's Hand
 * @param array $player The Player's Hand
 * @param bool $show_dealer (optional) Show the Dealer's Hand?
 * @param bool $show_player (optional) Show the Player's Hand?
 * 
 * @return void
 */
function displayCards($dealer, $player, $show_dealer = false, $show_player = true) {
	
	if($show_dealer) {
		foreach($dealer as $card) {
			print "<img src='images/cards/{$card['display']}' alt='{$card['display']}'>";
		}
		
		$dealer_hand = calculateHandValue($dealer);
		print "<br><b>Dealer Has $dealer_hand <b><br>";

	} else {
		print "<img src='images/cards/{$dealer[0]['display']}' alt='{$dealer[0]['display']}'>";
		print "<img src='images/cards/back.jpg' alt='????'>\n";
		print "<br><b>Dealer Has ??? <b><br>";

	}
	
	if($show_player) {
		print "<br>";
		foreach($player as $card) {
			print "<image src='images/cards/{$card['display']}' alt='{$card['display']}'>";
		}
		
		$player_hand = calculateHandValue($player);
		print "<br><b>Player Has $player_hand <b><br>";
	}
	
	return;
}

/**
 * Cacluate the value of a given hand in BlackJack, accounting for
 * the value of aces being 1 or 11.
 *
 * @param array $cards An array of cards representing the hand
 * @return integer The value of the hand in BlackJack
 */
function calculateHandValue($cards) {
	
	$return_value = 0;
	$temp_aces = 0;
	
	// If the card is not an ace we just add it to the total hand value.
	// if the card is an ace, we keep track of the total number of aces
	// in the and and then add them up later after we have calculated
	// everything else
	foreach($cards as $card) {
		if($card['value'] != 1) {
			$return_value += $card['value'];		
		} else {
			$temp_aces++;		
		}
	}
	
	// Add the aces to the total hand value, treating each as 1 or 11
	// Depending on if using an ace as 11 puts them over 21
	for($i = 0; $i < $temp_aces; $i++) {
		$return_value += (($return_value + 11) > 21) ? 1 : 11;
	}
	
	return $return_value;
}

/**
 * Draws a random card from the provided deck and returns it
 *
 * @param array $deck A reference to the deck to draw cards from
 *                    (will remove the card from the deck)
 * @return array An array representing the random card drawn
 */
function drawCard(&$deck) {
	
	// Pick a random suit, and a random card from that suit
	$suit = array_rand($deck);
	$card = array_rand($deck[$suit]);
	
	// Determine the Blackjack value of the card..
	// Face cards are worth 10
	$card_value = ($card >= 10) ? 10 : $card;
			
	// Construct the actual filename representing that card as well as its value
	$return_value = array(
		'display' => ($card < 10) ? $suit."0{$card}.jpg" : "$suit{$card}.jpg",
        'value' => $card_value
    );

	unset($deck[$suit][$card]);
	
	// If there aren't any more of a particular card in the suit, get rid of it from the deck
	if(count($deck[$suit]) < 1) {
		unset($deck[$suit]);
	}
	
	return $return_value;
}

/**
 * Construct an array representing a standard 52 card deck
 *
 * @return array An array representing a 52 card deck
 */
function getCardDeck() {

	$deck = array();
	
	for($suit_idx = 0; $suit_idx < 4; $suit_idx++) {
		
		switch($suit_idx) {
			case 0:
				$suit = 'C';
				break;
			case 1:
				$suit = 'S';
				break;
			case 2:
				$suit = 'D';
				break;
			case 3:
				$suit = 'H';
				break;
		}
		
		for($card_idx = 1; $card_idx <= 13; $card_idx++) {
			
			if(($card_idx <= 10) && ($card_idx > 1)) {
				$deck[$suit][$card_idx] = $card_idx;
			} else {
				switch($card_idx) {
					case 1:
						$deck[$suit][$card_idx] = 'A';
						break;
					case 11:
						$deck[$suit][$card_idx] = 'J';
						break;
					case 12:
						$deck[$suit][$card_idx] = 'Q';
						break;
					case 13:
						$deck[$suit][$card_idx] = 'K';
						break; 
				}
			}
		}
	}
	
	return $deck;
}

/**
 * Display the header HTML for the application
 */
function displayHeader() {
?>
<html>
	<head>
		<title>PHP Blackjack - Zend Technologies PHP Foundations</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
	</head>

<body>
<img border="0" src="images/phpbjlogo.png" alt="PHP BlackJack">
<div id='game'>
<?php
}

/**
 * Display the footer HTML for the application
 */
function displayFooter() {
?>
</div>
</body>
</html>
<?php 
}

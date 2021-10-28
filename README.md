# php-blackjack
Week 6 at [BeCode](https://github.com/becodeorg/ANT-Lamarr-5.34) - October 2021

***

## [Learning challenge:](https://github.com/becodeorg/ANT-Lamarr-5.34/tree/main/2.The-Hill/php/4.oop-blackjackgame) understand object oriented programming by creating a blackjack game.

***
### Day 1:
* Get familiar with OOP, classes and objects: A class is the blueprint for an object. It can have attributes and functions. An object is an instance of the class. A constructor method is defined using __construct and is automatically called when an object is instatiated. A property set as private cannot be accessed directly outside of the class.
* Created classes Player and Class according to the instructions. The classes Card, Deck and Suit were provided.
* The Blackjack's constructor method instantiates a player, a dealer and a deck, and shuffles the deck.
* The player's constructor method takes a deck as a parameter and draws 2 cards for the player (method from Deck class).
* !!! Still unclear: which methods should be private?
* Player class public methods have content.
* Magical value: tool or polemic? 21 is set as a class constant in any case.
* Note on order: initialize objects before calling them, require files just once (seems obvious and yet...).
* index.php has clickable hit, stand and surrender buttons, no functionality yet.
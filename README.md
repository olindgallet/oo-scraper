oo-scraper
==========

An Object-Oriented PHP Web Page Scraper
This page is a demo of an object-oriented web scraper.  Each node of the HTML can be evaluated by a Condition.  In this example, two conditions are evaluated: having a certain ID and
having specific anchor text.  These conditions are used to isolate hyperlinks which have the word 'game' in its anchor text on the <a href="http://www.dmoz.org">DMOZ homepage</a>.

Note that polymorphism is not used; in other words, any place that uses Conditional can be replaced by a subclass of it.  In PHP5, type hinting parameters can be used with Polymorphism.  Likewise,
traversing a data structure can take advantage of polymorphism.  Ultimately I think the best use would be in PHP 5.6+ which allows parametric lists; one or more values can be used as parameters.  In this case
that can mean one or more Conditionals being passed to a function.  Experiment away!

Note on scrapers
==========
Ideally I think the best way to do most scrapers is to do each one from scratch; each web page is different so it's hard to do get good data using an all-purpose solution.  However, there are some tasks that I think are suitable such as getting all of a specific type of tag.  For a challenge, try modifying the provided code to get all outbound links (links not on the page domain) on a page. 

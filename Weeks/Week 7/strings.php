<?php
// our str_replace and substr functions!
//substr(string,start,length)

$statement = 'Presently, i am reading the looming tower';
echo $statement;
echo '<br>';

echo substr($statement,0);
echo '<br>';


echo substr($statement,1);
echo '<br>';


echo substr($statement,11);
echo '<h2> Now, i would like to display looming?</h2>';
echo '<br>';



echo substr($statement,11,12);
echo '<h2>  what if i would like to display looming?</h2>';

echo substr($statement,-13,9);
echo '<br>';

echo substr($statement,4,11);
echo '<br>';

echo substr($statement,-20,2);
echo '<br>';
echo '<h2> Now for the str_replace function!</h2>';


$statement2 = 'Hulu\'s rendition of the Lomming Tower is based on the book named the Lomming Tower!';

echo str_replace('the','The',$statement2);




<?php

            $daily_schedule = array("9am" => "Work on O'Reilly Course", 
				   "10am" => "More Work on O'Reilly Course", 
				   "11am" => "Play with Kids",
				   "12pm" => "Lunch", 
				   "1pm" => "Visit Museums", 
				   "2pm" => "Travel Home", 
				   "3pm" => "Go Swimming", 
				   "4pm" => "Take a Nap", 
				   "5pm" => "Eat Dinner with Family");
?>
Here is my daily schedule:<br/><br/>
<?php

//this loop traverses the array and prints out the array keys and values in a pretty, bulleted list

foreach($daily_schedule as $key=>$value) {
echo "<li>" . $key . ": " . $value."</li>";
echo "<br/>";
unset($value);
unset($key);
}
?>
  
 		   
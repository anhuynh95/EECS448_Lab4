<?php
//access the global array called $_POST to get the values from the text fields
$q1_ans = $_POST["question1"];
$q2_ans = $_POST["question2"];
$q3_ans = $_POST["question3"];
$q4_ans = $_POST["question4"];
$q5_ans = $_POST["question5"];
$correct_ans =0;

echo "Question 1: How many countries in the word? <br> You answered: ". $q1_ans . "<br>Correct answer: 195 <br><br>"; 
echo "Question 2: What is the best NVIDIA graphic card on the market right now? <br> You answered: ". $q2_ans . "<br>Correct answer: GeForce RTX 2080 Ti <br><br>"; 
echo "Question 3: Which side of the street do people in UK drive? <br> You answered: ". $q3_ans . "<br>Correct answer: Left <br><br>"; 
echo "Question 4: Who sang the song name Girl Like You? <br> You answered: ". $q4_ans . "<br>Correct answer: Maroon 5 <br><br>"; 
echo "Question 5: How many seasons does Friends series has <br> You answered: ". $q5_ans . "<br>Correct answer: 10 <br><br>"; 
    

	if($q1_ans == "195"){
		$correct_ans = $correct_ans +1;
	}
	if($q2_ans == "GeForce RTX 2080 Ti"){
		$correct_ans= $correct_ans +1;
	}
	if($q3_ans =="Left"){
		$correct_ans= $correct_ans +1;
	}
	if($q4_ans =="Maroon 5"){
		$correct_ans= $correct_ans +1;
	}
	if($q5_ans =="10"){
		$correct_ans= $correct_ans +1;
	}
	

 echo "Correct answer number: " . $correct_ans . "<br>";
 echo "Grade: " . (($correct_ans/5)*100). "% <br>";

	echo "<a href='https://people.eecs.ku.edu/~a054h720'>Return To Index</a>";
?>
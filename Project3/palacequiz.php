<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <body style="background-color:white">
  
</body>
  <script >
function quiz() {
  let score = 0;

  var ques1 = prompt(
    'Which Indian city is famous for the Falaknuma Palace? \nA - Mumbai\nB - Chennai\nC - Hyderabad\nAnswer: '
  );
  alert('The answer you have selected is ' + ques1);

  if (ques1.toUpperCase() === 'C') {
    score = score + 1;
    alert('Your answer is correct. Your score is currently ' + score);
  } else {
    score = 0;
    alert('Your answer is not correct');
  }

  var ques2 = prompt(
    'The Falaknuma Palace was built during the late? \nA -  17th century\nB - 15th century\nC - 20th century\nAnswer: '
  );
  alert('The answer you have selected is ' + ques2);

  if (ques2.toUpperCase() === 'C') {
    score = score + 1;
    alert('Your answer is correct. Your score is currently ' + score);
  } else {
    //Uncomment this if negative marking is required
    //score = -1;
    alert('Your answer is not correct');
  }

  var ques3 = prompt(
    ' Who commissioned the construction of the Falaknuma Palace? \nA - Mughal Emperor\nB - British East India Company\nC - Nizam of Hyderabad\nAnswer:'
  );
  alert('The answer you have selected is ' + ques3);

  if (ques3.toUpperCase() === 'C') {
    score = score + 1;
    alert('Your answer is correct. Your score is currently ' + score);
  } else {
    //Uncomment this if negative marking is required
    //score = -1;
    alert('Your answer is not correct');
  }

  var ques4 = prompt(
    'Which architectural style is predominantly seen in the design of Falaknuma Palace? \nA - Indo-Islamic\nB - Gothic\nC - Neoclassical\nAnswer:'
  );
  alert('The answer you have selected is ' + ques4);

  if (ques4.toUpperCase() === 'A') {
    score = score + 1;
    alert('Your answer is correct. Your score is currently ' + score);
  } else {
    //Uncomment this if negative marking is required
    //score = -1;
    alert('Your answer is not correct.');
  }

  var ques5 = prompt(
    'What does "Falaknuma" translate to in English? \nA - Star Palace\nB - Moon Palace\nC - Sun Palace\nAnswer:'
  );
  alert('The answer you have selected is ' + ques5);

  if (ques5.toUpperCase() === 'B') {
    score = score + 1;
    alert('Your answer is correct. Your score is currently ' + score);
  } else {
    //Uncomment this if negative marking is required
    //score = -1;
    alert('Your answer is not correct.');
  }


  if (score >= 3) {
    alert('Hurray You Got Free Ticket To Falaknumapalace, Collect the ticket at the counter and your Score is ' + score );
  } else {
    alert('You did not pass ' + score);
  }
}
quiz();

  </script>
</head>
<body>
  
</body>
</html>
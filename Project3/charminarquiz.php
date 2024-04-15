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
    'In which Indian city is the Charminar located? \nA - Mumbai\nB - Chennai\nC - Hyderabad\nAnswer: '
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
    '? The Charminar was built in which century? \nA -  14th century\nB - 15th century\nC - 16th century\nAnswer: '
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
    'What was the purpose behind the construction of Charminar? \nA - Royal residence\nB - Religious temple\nC - Market center\nAnswer:'
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
    'The Charminar is renowned for its distinctive architectural style, primarily influenced by? \nA - Indo-Islamic\nB - Persian\nC - Mughal\nAnswer:'
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
    ' How many minarets does the Charminar have? \nA - 2\nB - 4\nC - 6\nAnswer:'
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
    alert('Hurray You Got Free Ticket To Charminar, Collect the ticket at the counter and your Score is ' + score );
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
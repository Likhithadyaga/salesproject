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
    'Which famous Indian monument is located in Golconda?? \nA - Charminar \nB - Qutub Minar\nC - Golconda Fort\nAnswer: '
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
    'Golconda Fort is located in which Indian state? \nA -  Maharashtra\nB - Karnataka\nC - Telangana\nAnswer: '
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
    'Golconda Fort was originally built during the reign of which dynasty? \nA - Chola Dynasty\nB - Vijayanagara Empire\nC - Qutb Shahi Dynasty\nAnswer:'
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
    'Which famous diamond was found in Golconda? \nA - Koh-i-Noor Diamond\nB - Hope Diamond\nC - Cullinan Diamond\nAnswer:'
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
    'Golconda Fort is renowned for its innovative construction that includes? \nA - Water harvesting system\nB - Intricate stone carvings\nC - Secret tunnels\nAnswer:'
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
    alert('Hurray You Got Free Ticket To Falaknumapalace, Collect the ticket at the counter and your Score is ' + score);
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
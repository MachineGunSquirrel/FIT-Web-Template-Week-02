<!-- Exercise JavaScript II -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a dice class that holds an int attribute for the number of sides it has, and a roll function that rolls the dice and returns the outcome. 
      Add the elements and script needed so that a user can enter a number of sides and a number of times to roll; display on a button click.</h4>
    <!-- Place Answer Here -->

      <label for="valSides">Number of Sides:</label>
      <input id="valSides">
      <label for="valRolls">Number of Rolls:</label>
      <input id="valRolls">
      <button onclick="questionOne(document.getElementById('valSides').value,  document.getElementById('valRolls').value)">Roll</button>
      <p id="outcomeOne"></p>
      
        <script>

            class Dice
            {
              constructor(valSides)
              {
                this.sides = valSides;
              }

              roll()
              {
                //roll the dice by picking random int 1-# of sides
                return Math.floor(Math.random() * Math.floor(this.sides)+1);
                //print result to <p></p>
              }
            }

            function questionOne(valSides, valRolls)
            {
              var resultOne = '';
              var resultTotal = 0;
              var die = new Dice(valSides);
              var rollResult = 0;
              //while loop iterating roll function until rolls variable reaches 0
              while(valRolls > 0)
              {
                rollResult = die.roll();
                resultOne += " " + rollResult;
                resultTotal += rollResult;
                valRolls--;
              }
              document.getElementById("outcomeOne").innerHTML = resultOne + ', total = ' + resultTotal;

            }
        
        </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Copy Question 1, but add a 'cheaty' attribute that allows the user to also input how cheaty they wish their dice to be. 
      (be creative and useful, it'll earn you more points! :)</h4>
    <!-- Place Answer Here -->
      
      <label for="valSides">Number of Sides:</label>
        <input id="valSides">
        <label for="valRolls">Number of Rolls:</label>
        <input id="valRolls">
        <!-- value to be favored -->
        <label for="weighed">Weighted value:</label>
        <input id="weighed">
        <!-- how heavy weight is -->
        <label for="weight">Mass of weight:</label>
        <input id="weight"> 
        <button onclick="questionTwo(document.getElementById('valSides').value,  
                                     document.getElementById('valRolls').value, 
                                     document.getElementById('weighed').value, 
                                     document.getElementById('weight').value)">Roll</button>
        <p id="outcomeTwo"></p>
        
          <script>

              class Dice
              {
                constructor(valSidesVal)
                {
                  this.sides = valSidesVal;
                }

                roll()
                {
                  //roll the dice by picking random int 1-# of sides
                  return Math.floor(Math.random() * Math.floor(this.sides)+1);
                }
              }

              function questionTwo(valSides, valRolls, weighed, weight)
              {
                var resultOne = '';
                var resultTotal = 0;
                var die = new Dice(valSides);
                var rollResult = 0;
                //store original value of weight
                var weightStore = weight;
                //boolean trip variable for weight loop
                var weightLoop = 0;
                //while loop iterating roll function until rolls variable reaches 0
                while(valRolls > 0)
                {
                 
                  //calls roll function from class
                  rollResult = die.roll();
                  //compares results to weight number and allows roll if result is favorable
                  if (weightLoop == 0 && weight > 0 && weighed == rollResult) {
                    //aggregates successful results
                    resultOne += " " + rollResult;
                    //sums successful results
                    resultTotal += rollResult;
                    //decrement rolls variable
                    valRolls--;
                  }
                  //rerun die roll
                  else if (weightLoop == 0 && weight > 0){
                    //decrement weight variable
                    weight--;
                    console.log("Failed starting result: " + rollResult);
                    //trip weight loop, go to else #1
                    weightLoop = 1;
                  }
                  else
                  {
                    while (weightLoop == 1) {
                      rollResult = die.roll();
                      //if for successfully weighted results
                      if (weight > 0 && weighed == rollResult) {
                        //aggregates successful results
                        resultOne += " " + rollResult;
                        //sums successful results
                        resultTotal += rollResult;
                        //decrement rolls variable
                        valRolls--;
                        weightLoop = 0;
                      }
                      //failed result
                      else if (weight > 0){
                        //decrement weight
                        weight--;
                        console.log("Failed loop result: " + rollResult);
                      }
                      //weight loop fails with no successful result
                      else if (weight == 0){
                        //aggregates failed results on completed weight loop
                        resultOne += " " + rollResult;
                        //sums failed results
                        resultTotal += rollResult;
                        //decrement rolls variable
                        valRolls--;
                        weightLoop = 0;
                      }
                    }
                    //reset weight variable
                    weight = weightStore;
                  }
                }
                document.getElementById("outcomeTwo").innerHTML = resultOne + ', total = ' + resultTotal;

              }
          
          </script>


    <!-- Place Answer Here -->
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Create the elements and script to accept a username and password. Add a 'register' button that accepts a new username and password and stores it along with some 
      pre-written and hardcoded usernames and passwords. Display 'Access Granted' or some other secret in a p tag if the username and password match, otherwise show an error.</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->

<!-- Question F3 -->
  <div class='student-response'>
    <h1>Question #F3:</h1>
    <h4>Create a monster class that has attributes like name, health, attack damage, and description as well as a function to attack and return a 
      damage amount, and another function to be sent a damage amount for the monster to take. Then create 2 monster objects and allow the user to 
      click a button next to the monster to attack it for 1d6 damage (1-6). Constantly display the monsters' hp's and when the button is clicked also 
      have that monster attack the user. display the users health as well (ex. starting at 100). </h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F3 -->

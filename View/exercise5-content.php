<!-- Exercise JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a keyword brainwashed script. Add an input and a button, then add the code to add functionality. 
      The user will enter a long string of text, then on button click, the code will search the long string for a keyword 
      and print everything after the keyword to a p tag. 
      (You may use "skeleton" as the keyword if you can't think of anything else.)</h4>
    <!-- Place Answer Here -->

      <label for="myInput">String Input</label>
      <input id='myInput'></input>
      <label for="myString">String:</label>
      <input id='myString'></input>
      <button onclick="findString( document.getElementById('myInput').value, document.getElementById('myString').value)">Submit</button>
      <p id='StringFound'></p>

      <script>

        //function that finds string and displays text after it
        function findString(input, string)
        {
          var stringIndex = input.indexOf(string);
          var stringLength = string.length;
          document.getElementById('StringFound').innerHTML = input.substring(stringIndex+stringLength);
        }
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create the script and elements necessary to hold a game inventory. Create a hardcoded array for this inventory. 
        One input and button will be responsible for checking what item is at the entered index, 
        while another input and button will be responsible for entering how many of that item is stored. 
        (Hint two arrays or a 2 dimensional array is needed)</h4>
    <!-- Place Answer Here -->
      
      <label for="checkInventory">Check Inventory</label>
      <input id='checkInventory'></input>
      <button onclick="checkInv( document.getElementById('checkInventory').value)">Check</button>
      <p id='inventoryCount'></p><br><br><br>

      <label for="ChangeInventory">Change Inventory</label>
      <input id='ChangeInventory'></input>
      <button onclick="changeInv( document.getElementById('ChangeInventory').value)">Check</button>
      <p id='newInventoryCount'></p>

      <script>

        //array
        var Inventory = [ ['M1A3 Abrams Main Battle Tank', 8], 
                          ['M4A1 Carbine', 40],
                          ['M249 Light Machine Gun', 4] ];
        item = 0;
          
        function checkInv(item)
        {
          document.getElementById('inventoryCount').innerHTML = Inventory[item][0] + " (" + Inventory[item][1] + ")"
        }

        function changeInv(newValue)
        {
          Inventory[item][1] = newValue;
          document.getElementById('newInventoryCount').innerHTML = Inventory[item][0] + " (" + Inventory[item][1] + ")"
        }
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question F -->
  <div class='student-response'>
    <h1>Find-IT #1:</h1>
    <h4>Create a time travel script. Use the necessary code and elements to allow the user to enter a date (in year, month, day, hour, and minute) 
        they would like to travel to. Then display the number of years, days, hours, and minutes they would need to travel to reach that date and time. 
        (Notice month is excluded)</h4>
    <!-- Place Answer Here -->
      
      

    <!-- Place Answer Here -->
  </div>
<!-- Question F -->


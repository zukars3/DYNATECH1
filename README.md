# DYNATECH1

### Instructions:
    Just run the "solutions.php" file, it is ready for tests.
    
### About the solutions:

##### findOddEvenPair function:
  1. I created an empty "result" array, which I will be populating later.
  2. Then I counted how long is the input array "numbers"
  3. If said array is longer that two integers, I start going through the whole array and
      checking if neighbor numbers are different parity, 
      but ony if there are more or equal than two numbers left.
  4. If neighbors are the same parity, I remove them from initial input array, and add them to result array.
  5. In the end, I return last element from result array.
      Why last? Because it wasn't said specifically which one to return.
      
##### SummationService class:
  1. I declared property "data" and created constructor which initializes it on creation.
  2. Then I created a function sum, which accepts two integer parameters "a" and "b"
      and declared return type as integer too.
  3. I created variable result with initial value of 0
  4. Created a simple for loop, in which I add sums of numbers in array counting from
      positions "a" to "b" and add sums to result.
  5. In the end, I return result.
  
  ##### longestSubstr function:
  1. In the beginning I splitted the "text" string into array called "string"
  2. Then I declared an empty array called "subString" and a "counter" with starting value of 1.
  3. Created a for loop that goes through "string" array and checks if a pair of characters already
      exist in the "subString" array and add 1 to "counter".
  4. If they do not, I add them to "subString" array, but if they do, the loop just goes on.
  5. In the end I return a string made from "string" array, starting from position 0 to "counter" value.
  
### Room for improvement:
    The hardest task for me was longestSubstr function, and I think I can still make it more effective than it is now.
    Also I have a feeling, that I maybe misunderstood something about what to return in findOddEvenPair,
    that's why I am returning the last pair of numbers.

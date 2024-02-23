# 1. Create a program for a shopping cart. If the total
# price is over Rs. 5000, apply a 10% discount; otherwise, log the original 
price.
# def calculate_total_price(cart_items):
# total_price = sum(cart_items.values())
# return total_price
# def apply_discount(total_price):
# if total_price > 5000:
# discount = total_price * 0.10
# discounted_price = total_price - discount
# return discounted_price
# else:
# return total_price
# def main():
# cart_items = {
# "item1": 1500,
# "item2": 2500,
# "item3": 1000,
# # Add more items and their prices here
# }
# total_price = calculate_total_price(cart_items)
# final_price = apply_discount(total_price)
# print(f"Total price: Rs. {total_price:.2f}")
# if final_price != total_price:
# print(f"Discounted price (10% off): Rs. {final_price:.2f}")
# else:
# print("No discount applied.")
# if __name__ == "__main__":
# 2. Simulate a traffic light system using if-else statements. Log the 
appropriate message for each color of the traffic 
# light (e.g., "Green - Go," "Yellow - Slow down," "Red - Stop").
# main()
# def traffic_light():
# signal = input("Enter the color of the traffic light (RED/YELLOW/GREEN): 
").upper()
# if signal not in ("RED", "YELLOW", "GREEN"):
# print("Please enter a valid traffic light color in CAPITALS.")
# else:
# value = light(signal) # Function call to light()
# if value == 0:
# print("STOP! Your life is precious.")
# elif value == 1:
# print("PLEASE GO SLOW.")
# else:
# print("GO! Thank you for being patient.")
# def light(color):
# if color == "RED":
# return 0
# elif color == "YELLOW":
# return 1
# else:
# return 2
# traffic_light()
# print("SPEED THRILLS BUT KILLS")
# 3. Create a PHP program for a fitness app. The program will take the number 
of steps walked in a day as 
# input and determine the fitness level based on the following rules:
# <?php
# // Get the number of steps walked (you can replace this with user input)
# $steps = 7500; // Example: Replace with the actual number of steps
# // Determine the fitness level
# if ($steps < 5000) {
# $fitnessLevel = 'Beginner';
# } elseif ($steps >= 5000 && $steps <= 10000) {
# $fitnessLevel = 'Intermediate';
# } else {
# $fitnessLevel = 'Advanced';
# }
# // Display the result
# echo "You walked $steps steps today. Your fitness level: $fitnessLevel";
# ?>
# 4. Develop a PHP program for a grading system. The program will take a 
student's score as input and determine the grade based on the following rules:
# If the score is less than 60, the grade is 'F'.
# If the score is between 60 and 70 (inclusive), the grade is 'D'.
# If the score is between 71 and 80 (inclusive), the grade is 'C'.
# If the score is between 81 and 90 (inclusive), the grade is 'B'.
# If the score is greater than 90, the grade is 'A'.
# Provide a PHP code snippet for this program, including the conditional 
statements to determine the grade based on the input score.
# <?php
# // Get the student's score (you can replace this with user input)
# $score = 75; // Example: Replace with the actual score
# // Determine the grade
# if ($score < 60) {
# $grade = 'F';
# } elseif ($score >= 60 && $score <= 70) {
# $grade = 'D';
# } elseif ($score >= 71 && $score <= 80) {
# $grade = 'C';
# } elseif ($score >= 81 && $score <= 90) {
# $grade = 'B';
# } else {
# $grade = 'A';
# }
# // Display the result
# echo "Student's score: $score\n";
# echo "Grade: $grade";
# ?>
# 5. Scenario: Suppose you are developing a website for an online store. The 
store offers a discount on orders over Rs. 1000. 
# Write a piece of PHP code using conditional control structures to check if the 
total order amount qualifies for the discount and display an appropriate message 
to the user.
# <?php
# // Get the total order amount (you can replace this with user input)
# $totalAmount = 1200; // Example: Replace with the actual order amount
# // Check if the total amount qualifies for the discount
# if ($totalAmount > 1000) {
# $discountedAmount = $totalAmount * 0.90; // 10% discount
# echo "Congratulations! You qualify for a 10% discount.\n";
# echo "Discounted amount: Rs. " . number_format($discountedAmount, 2);
# } else {
# echo "Your total order amount is Rs. " . number_format($totalAmount, 2) . 
".\n";
# echo "No discount applied.";
# }
# ?>
# 6. Scenario: You are building a login system for a web application. After 
users submit their username and password, you need to verify if the credentials 
are correct before granting access. Write a PHP script that checks if the 
provided username and password match the stored credentials. If they match, echo 
"Login successful"; 
# otherwise, echo "Invalid credentials".
# <?php
# // Include config file (contains database connection)
# require_once "config.php";
# // Initialize variables
# $username = $password = "";
# $username_err = $password_err = "";
# // Process form data when submitted
# if ($_SERVER["REQUEST_METHOD"] == "POST") {
# // Validate username
# if (empty(trim($_POST["username"]))) {
# $username_err = "Please enter a username.";
# } else {
# $username = trim($_POST["username"]);
# }
# // Validate password
# if (empty(trim($_POST["password"]))) {
# $password_err = "Please enter a password.";
# } else {
# $password = trim($_POST["password"]);
# }
# // Check if credentials match
# if (empty($username_err) && empty($password_err)) {
# $sql = "SELECT id FROM users WHERE username = ? AND password = ?";
# if ($stmt = mysqli_prepare($link, $sql)) {
# mysqli_stmt_bind_param($stmt, "ss", $param_username, 
$param_password);
# $param_username = $username;
# $param_password = $password;
# if (mysqli_stmt_execute($stmt)) {
# mysqli_stmt_store_result($stmt);
# if (mysqli_stmt_num_rows($stmt) == 1) {
# echo "Login successful!";
# } else {
# echo "Invalid credentials.";
# }
# } else {
# echo "Oops! Something went wrong. Please try again later.";
# }
# mysqli_stmt_close($stmt);
# }
# }
# mysqli_close($link);
# }
# ?>
# <!-- HTML form for login -->
# <!DOCTYPE html>
# <html lang="en">
# <head>
# <meta charset="UTF-8">
# <meta name="viewport" content="width=device-width, initial-scale=1.0">
# <title>Login</title>
# </head>
# <body>
# <h2>Login Form</h2>
# <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
method="post">
# <div>
# <label for="username">Username:</label>
# <input type="text" id="username" name="username" value="<?php echo 
$username; ?>">
# <span><?php echo $username_err; ?></span>
# </div>
# <div>
# <label for="password">Password:</label>
# <input type="password" id="password" name="password">
# <span><?php echo $password_err; ?></span>
# </div>
# <div>
# <input type="submit" value="Login">
# </div>
# </form>
# </body>
# </html>
# 7. Scenario: Imagine you are developing a weather application. Depending on 
the current temperature, the application provides different recommendations. 
Write a PHP script that takes the current temperature as input and outputs a 
recommendation. For example, if the temperature is above 25°C, echo "It's a sunny 
day!"; 
# otherwise, echo "Consider taking an umbrella".
# <?php
# // Get the current temperature (you can replace this with user input)
# $currentTemperatureCelsius = 28; // Example: Replace with the actual 
temperature
# // Provide recommendations based on temperature
# if ($currentTemperatureCelsius > 25) {
# echo "It's a sunny day! Enjoy the weather.";
# } else {
# echo "Consider taking an umbrella. It might rain.";
# }
# ?>
# 8. Scenario: You are creating a grading system for a school website. Based 
on the score obtained by a student in an exam, you need to assign a grade. Write 
a PHP script that takes the score as input and assigns a grade according to the 
following criteria:
# Score >= 90: Grade A
# Score >= 80: Grade B
# Score >= 70: Grade C
# Score >= 60: Grade D
# Score < 60: Grade F
# <?php
# // Get the student's score (you can replace this with user input)
# $score = 85; // Example: Replace with the actual score
# // Assign grades based on the score
# if ($score >= 90) {
# $grade = 'A';
# } elseif ($score >= 80) {
# $grade = 'B';
# } elseif ($score >= 70) {
# $grade = 'C';
# } elseif ($score >= 60) {
# $grade = 'D';
# } else {
# $grade = 'F';
# }
# // Display the result
# echo "Student's score: $score\n";
# echo "Grade: $grade";
# ?>
# 9. Scenario: Suppose you are developing a user profile page for a social 
media platform. You want to display different messages to users based on their 
account type (e.g., basic or premium). Write a PHP script that checks the user's 
account type and displays a personalized message accordingly. For example, if the 
user has a premium account, echo
# "Welcome Premium User!"; otherwise, echo "Welcome Basic User!".
# <?php
# // Assume you have retrieved the user's account type (basic or premium)
# $userAccountType = "premium"; // Example: Replace with the actual account type
# // Check the account type and display a personalized message
# if ($userAccountType === "premium") {
# echo "Welcome Premium User!";
# } else {
# echo "Welcome Basic User!";
# }
# ?>
# 10. Scenario: You are developing a blog platform where users can publish 
articles. However, you want to implement a feature that limits the length of 
article titles to 50 characters. Write a PHP script that checks the length of the 
article title and
# truncates it to 50 characters if it exceeds the limit.
# <?php
# // Assume you have retrieved the article title (you can replace this with user 
input)
# $articleTitle = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed 
euismod.";
# // Check the length of the title
# if (mb_strlen($articleTitle) > 50) {
# $truncatedTitle = mb_substr($articleTitle, 0, 50) . "...";
# echo "Truncated title: $truncatedTitle";
# } else {
# echo "Original title: $articleTitle";
# }
# ?>
# 11. Scenario: Suppose you are developing a quiz application 
# where users can attempt multiple-choice questions. You want to implement a 
feature that calculates the user's score based on the number of correct answers. 
Write a PHP script that calculates the user's score and displays it at the end of 
the quiz.
# <?php
# // Assume you have the correct answers and user's selected answers
# $correctAnswers = ['A', 'B', 'C', 'D', 'A']; // Example: Replace with actual 
correct answers
# $userAnswers = ['A', 'B', 'C', 'D', 'A']; // Example: Replace with user's 
selected answers
# // Calculate the user's score
# $score = 0;
# for ($i = 0; $i < count($correctAnswers); $i++) {
# if ($userAnswers[$i] === $correctAnswers[$i]) {
# $score++;
# }
# }
# // Display the result
# echo "Your score: $score out of " . count($correctAnswers);
# ?>
# 12. Scenario: You are building a subscription-based service where 
# users can choose between different subscription plans. However, you want to 
offer a trial period for new users. Write a PHP script that checks if the user is 
a new user and offers them a trial period if they haven't subscribed before.
# <?php
# // Assume you have a database or some way to track user subscriptions
# $userHasSubscribedBefore = false; // Example: Replace with actual logic
# if ($userHasSubscribedBefore) {
# echo "Welcome back! Enjoy your subscription.";
# } else {
# echo "Welcome! You have a 7-day free trial period.";
# // Additional logic to handle trial period (e.g., set expiration date)
# }
# ?
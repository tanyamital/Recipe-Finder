# Recipe-Finder
This is a DBMS project implemented using MySQL database on the Xampp platform. It's an application to search for recipes based on user's preferences. The user then has to rate the recipe they view. The front end is developed using HTML and CSS. There are separate logins for the chefs and the users. When the chefs login, they'll be able to create new recipes or update their existing recipes.

OBJECTIVE: To enable users to find suitable recipes that fit their preferences.

PROJECT DESCRIPTION: 
•	The recipe_database stores recipes of various cuisines, authored by chefs of different nationalities. Each recipe is given a unique recipe id and name along with the chef’s name who authored it. The recipe includes a detailed description of the ingredients involved, the preparation method, the time involved and the serving size.
•	The database also includes the personal details of the chefs like his name, email id, the cuisine he specializes in and his nationality.
•	A feature to rate the recipes on a scale from 1-5 is provided to the users. The system calculates the cumulative rating for every recipe and displays it, to enhance the users’ search for finding a suitable recipe.  The above functionality is implemented by the Feedback entity.
•	The system also captures the user details to enable a better user experience.
•	Examples of possible use cases 
-User wants a paneer recipe from the Mediterranean cuisine with a rating above 4.
-User wants all mushroom soup recipes by Chef Xyz.
-User wants all Indian veg recipes with mushroom and capsicum as ingredients.
-User wants a Mexican recipe with preparation time under 40 minutes.

ENTITY	ATTRIBUTES
Chef - chef_id, name, email, cuisine_name, nationality
Recipe - recipe_id, chef_id, title, cuisine_name, description, chef_name, ingredients_description, method_description, rating, prep_time, serving_size
Cuisine -	name, description
Feedback - feedback_id, user_id, recipe_id, rating_time, rating
User - user_id, name, location, email

RELATIONSHIPS:
•	Chef creates Recipe.
•	Recipe has Cuisine.
•	User views Recipe.
•	User gives Feedback.


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

Screenshots:

![Screenshot (232)](https://user-images.githubusercontent.com/56966861/128041959-fdf6fc2c-a88c-401a-a5d0-2428066e25a0.png)
![Screenshot (233)](https://user-images.githubusercontent.com/56966861/128042269-daba4091-3042-43f1-a8fc-bbf8fc1f5d05.png)
![Screenshot (234)](https://user-images.githubusercontent.com/56966861/128042329-be27fe0a-b890-4265-850e-3378a231d575.png)
![Screenshot (156)](https://user-images.githubusercontent.com/56966861/128042374-21561c76-2ece-4051-920b-9bc1cb1ff51e.png)
![Screenshot (235)](https://user-images.githubusercontent.com/56966861/128042468-68df1279-3b21-43ad-94fb-b5d868caea63.png)
![Screenshot (236)](https://user-images.githubusercontent.com/56966861/128042539-b488ca17-a788-434a-b2a7-01ae887bd318.png)
![Screenshot (237)](https://user-images.githubusercontent.com/56966861/128042644-7a3f4e1d-57d9-4fb8-bf06-770fadcd2ffd.png)

Chefs can also login and create new recipes here.

![Screenshot (238)](https://user-images.githubusercontent.com/56966861/128042718-ec4875fe-59cd-43ca-942e-8b2f73560a3a.png)
![Screenshot (239)](https://user-images.githubusercontent.com/56966861/128042817-c8f987e7-4296-485a-8a7f-2cee7cc9af38.png)
![Screenshot (240)](https://user-images.githubusercontent.com/56966861/128042898-b9804f41-d8b8-4b40-8fd0-e11acdf82c0c.png)




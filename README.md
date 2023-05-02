# Docker Version2
web server and php-enabled App

Tasks
Create a second HTML file named "index.html" inside the "version2" folder with some additional functionality. Our file has a form that sends a POST request to a php file for processing.
Create a php file (server-side scripting) to process the inputs when we submit the form. Because we will use php, we will need to set up a Docker file that can create a web server and php-enabled image.
Create an Amazon ECS cluster 
Upload/ Push your Image to AWS ECR (like docker hub). 
Set up an Amazon ECS task definition with Fargate launch type and specify the Docker image you just created as the container image for the task definition. (Get the Uri from the repo) 
Launch a new Fargate task using the task definition you just created.  
Access the web app by going to the Fargate task's public IP address. 

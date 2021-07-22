# Confidentbies
                                                PROJECT NAME:CONFIDENTBIES (A Project On Cloud Security)



FRONT-END TECHNOLOGY

The text editors that we had used are Visual Code Studio.This is an open-spource softwares that can be downloaded for free on the internet. 

 Visual Code Studio latest version download URL :  https://code.visualstudio.com/download

The HTML,CSS,PHP codes can be written in these editors and are needed to be saved with .html , .css , .php  extensions respectively.
The HTML files can be opened with any of the browsers(Google,Mozilla Firefox , Microsoft Edge ,Internet Explorer etc..) installed in your laptop. 


BACK-END TECHNOLOGY

1. The back end portion can be built by using some scripting languages like PHP, Ruby, Python, Java with  
     tools like MySQL, Oracle, and SQL Server to find, save, or change data and serve it back to the user in front-end code.

    However , the scripting language that we used in our project is PHP and the tool we used is MySQL 
    
2. XAMPP(stands for cross-platform, Apache, MySQL, PHP and Perl) was used for connecting the PHP code and the MySQL database.
    
  XAMPP latest version download URL : https://www.apachefriends.org/xampp-files/8.0.0/xampp-windows-x64-8.0.0-2-VS16-installer.exe

  Whenever you need to use database through your PHP code  XAMPP needs to be downloaded and installed and then all of your  HTML,PHP,JavaScript,CSS,image
  files are needed to be placed in a folder called htdocs within XAMPP. Then you need to start the XAMPP by clicking on the start button or Apache and MySQL in the XAMPP controller.
  Inorder to access the database you need to open your favorite browser and type localhost/phpmyadmin on the search bar.This would lead us to the page where you can create the required database and its tables.
  To access your HTML,PHP files you can search for localhost/htdocs/<your folder name>.


STEPS FOR HOSTING YOUR WEB APP ON HEROKU CLOUD 

–	After creating the project, keep the files you want to deploy in a separate folder on the desktop or any location of your choice.
–	We have made use of freesqldatabase.com to deploy our database to the server.
–	We have opted for the creation and registration of a free account in freesql- database for this purpose.
–	Once the database account is created, the login credentials will be mailed to us and with the same, we can successfully login.
–	We need to make changes in our database program and apply the password and username mailed to us.
–	Next step is to deploy the app to Heroku, for this the prerequisites required are the installation of Heroku CLI and git in our system.
–	Create the Heroku account and complete the registration and login process.
–	Next step is to go to your command prompt and change the path of your folder location.
–	After the path updation, login to heroku through command prompt using the command ”heroku login”.
–	Now using the ”git init” command, we initialize the git repository.
–	After the initialization, the git folder gets created in your folder.
–	Next we use the command ”heroku git:remote -n nameoftheapp”, as the next step in the initialization of the project folder.
–	Next ”git add .” command is used to add new or changed files in the directory to staging area of the git.
–	Next the ”git commit -a -m ”make it better” ” command is used to make the changes.
–	Now using the command ” git push heroku master”,the overall app gets deployed.
–	After all these steps, the deployment is completed successfully. We can also verify by logging into the browser and check if the app is deployed or not.


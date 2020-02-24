# php-mysql-introduction

Assignment is here https://github.com/becodeorg/atw-giertz-2-17/tree/master/2.The-Hills/php/6.mysql

### Notes to self about the process
I had quite a few problems trying to get up and running with making a new user and database for 2 reasons. I have a password extension that has quite strict restrictions on passwords. And the second reason is because my mysql is more recent the GRANT command does not work anymore - this is an old command that could be used to make a new user but that was actually a bug that it could be used to create a new user with this command so now you need to use the create new user command and the GRANT command is safely reserved (as it should be) for granting permissions.

Useful links used in this process
https://linuxize.com/post/how-to-create-mysql-user-accounts-and-grant-privileges/
https://www.cyberciti.biz/faq/mysql-change-user-password/
https://lefred.be/content/how-to-grant-privileges-to-users-in-mysql-8-0/
https://alvinalexander.com/blog/post/mysql/show-users-i-ve-created-in-mysql-database


I was having a strange problem with my command line adding an extra ' at the end of my commands.
https://stackoverflow.com/questions/44491285/how-to-run-mysql-with-single-quotes-in-command-line

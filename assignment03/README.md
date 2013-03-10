Assignment 3 - What did I do?
============
- Choose your favourite website that provides an API
    - Facebook - I used the Facebook Graph API
- Use a web client to consume the chosen API from above, you may use one of the following
    - I used the Facebook PHP SDK
- Consume at least two API end points
	- I used a FB login function to authenticate the app
	- I pulled the user name and FB id of the logged in user (me)
	- I pulled the friends list of the user
- Leverage the DAO (Data access layer) you put up in assignment 2
	- I then stored the friends list in my local MySQL database
- Provide an api to consume the data
	- I built an api using the Slim framework and used RedBeans to access the database
	- This is a sample of the data returned by the api in JSON format
	
    ```
    [{"id":"1","name":"Philip Yuen","fbid":"419205"},{"id":"2","name":"Philip Yuen","fbid":"419205"},
    {"id":"3","name":"JT Klepp","fbid":"1225198"},{"id":"4","name":"Ammar Chinoy","fbid":"3403598"},
    {"id":"5","name":"Scott Batura","fbid":"10714960"},{"id":"6","name":"Alex Bloom","fbid":"500020629"},
    {"id":"7","name":"Sam Hall","fbid":"500072627"},{"id":"8","name":"Obadiah Hendrickson","fbid":"500088207"},
    {"id":"9","name":"Jon Vlassopulos","fbid":"502862942"},{"id":"10","name":"Mark Rose","fbid":"504711218"},
    ```



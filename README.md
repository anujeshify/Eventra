> **IMPORTANT**
> Although the basic structure and functionality is working, This project still needs certain improvements and fixes.

# Eventra (Event Management Database)

This project is aimed at simplifying the event planning process. It provides users with the flexibility to choose from a diverse range of caterers, venues, decorators, DJs, and other event-related services, according to their preferences and budget constraints. Eventra offers preplanned packages at discounted prices, but clients can also create customized packages tailored to their specific event needs. To ensure transparency, all caterers, decorators, and venues are rated and reviewed by previous customers, allowing clients to make informed decisions based on service quality and budget requirements.

This project is significant as it empowers clients to make informed choices about their events, considering factors such as service quality, affordability, and personal preferences. It also helps prevent clients from being exploited by large event management companies offering rigid package deals.

During coding and design of the software Project, the concepts of HTML, Javascript and CSS is used as a powerful front-end tool. As a back-end tool, PHP is used.


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

This software project is developed with the help of certain programs which facilitate the working of the program and make it presentable.

- **XAMPP v3.3.0:** XAMPP is used as the web development environment, providing an Apache server, MySQL database, and PHP for server-side scripting.
[Download Link](https://www.apachefriends.org/download.html)

- **Web Browser:** Any modern web browser (e.g., Chrome, Firefox, Edge) is required to access and interact with the project's web-based user interface.


### How to Deploy

1. Begin by installing XAMPP. You can download it by clicking [here](https://www.apachefriends.org/download.html).

2. Locate the "project" folder within this repository and copy it. Then, paste it into the "htdocs" folder located in the root directory of your XAMPP installation.

3. Launch the XAMPP Control Panel application.
![alt text](https://github.com/anujeshify/Eventra-An-Event-Management-System/blob/main/Help1.jpg)

4. Start both the MySQL and Apache modules by clicking the "Start" button under the "Actions" tab.

5. Access the MySQL Admin interface by clicking the "Admin" button corresponding to the MySQL module.

6. Create a new database and name it "project."
![alt text](https://github.com/anujeshify/Eventra-An-Event-Management-System/blob/main/Help2.png)

7. Navigate to the "Import" tab located in the toolbar above.

8. Click the "Choose File" button and select the file named "project.sql.zip."

9. Once the database is successfully created, open a separate browser tab and enter the following URL: "http://localhost/project/eventra.php."


## Tools and Concepts Used
This section provides an overview of the key tools and concepts employed in this project


### Tables Required/Database Introduction

Eventra's database is designed with multiple tables to store and manage the necessary data efficiently. Here is an overview of the key tables in our database:

1. **client:** This table stores client-related information, including client_id, client_name, age, phone_no, gender, address, profession, occasion, username, password, and bill.

2. **companies:** This table contains details of event service companies, including comp_id, comp_name, comp_email, comp_website, and comp_contact.

3. **caterers:** Information about caterers is stored in this table, including cat_id, cat_name, cat_contact, cat_ratings, cat_review, comp_id, and cat_price.

4. **venue:** Details of event venues are recorded in this table, including ven_id, ven_name, ven_contact, ven_ratings, ven_review, comp_id, and ven_price.

5. **decorations:** This table stores information about decorators, including decor_id, decor_name, decor_contact, decor_ratings, decor_review, comp_id, and decor_price.

6. **custom_booking:** Tracks custom bookings made by clients and associates them with client IDs, venue IDs, and decorator IDs. It includes cbid, cid, vid, and did.

7. **client_bill:** Records client billing information, including bill_id, clientid, and bookingid.


### Front End Technologies
For the front end of Eventra, we are utilizing a combination of web development technologies to create a user-friendly interface:

- **HTML (HyperText Markup Language):** HTML is used to structure the basic layout of webpages that will contain the content of our Event Management Database. It includes elements such as headings, forms, and input fields.

- **JavaScript:** JavaScript enhances the user experience by adding dynamic behavior to webpages. It allows us to create interactive features that respond to user actions, improving usability.

- **CSS (Cascading Style Sheets):** CSS is employed to define the visual styles and formatting of our webpages. It ensures a polished and consistent look for the user interface, contributing to a pleasant user experience.


### Back End Technology
The back end of Eventra is powered by the following technology:

- **PHP (Hypertext Preprocessor):** PHP is used to establish connections between our MySQL database and the HTML front end. It acts as the middleware responsible for handling data retrieval, processing, and interaction between the user interface and the database. We are using various PHP extensions to connect with MySQL, including mysqli, mysqlInd, and pdo_mysql.


## Output Pictures

1. Home Page
![alt text](https://github.com/anujeshify/Eventra-An-Event-Management-System/blob/main/Output1.png)

1. Login Page
![alt text](https://github.com/anujeshify/Eventra-An-Event-Management-System/blob/main/Output2.png)

1. Services Page
![alt text](https://github.com/anujeshify/Eventra-An-Event-Management-System/blob/main/Output3.png)

1. Caterers Page
![alt text](https://github.com/anujeshify/Eventra-An-Event-Management-System/blob/main/Output4.png)


## Authors

* **Anujesh Bansal** - *Initial work* - [anujeshify](https://github.com/anujeshify)
* **Vanshika Gupta** - [VanshikaaGuptaa](https://github.com/VanshikaaGuptaa)
* **Atish Ranjan Mahali** [atishmahali](https://github.com/atishmahali)

See also the list of [contributors](https://github.com/anujeshify/Eventra-An-Event-Management-System/graphs/contributors) who participated in this project.


## Acknowledgments

* Inspiration - We were inspired by the rising surge of Wedding Plans. Rather than following the traditional method, we wanted to give user to option to choose and customise the event according to their comfort and needs.


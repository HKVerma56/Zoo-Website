This is a zoo management website front end. Designed using html , css, java and php.
It has the php codes for back end. It requires a database to rum fully with all functions.

# Database Description:
Given below are the entities along with its attributes and relations present in the
database of this application that are used to retrieve information from the database as
per requirement of user.

The Entity Admin is created with username and password as the Unique key

The Entity Animal is created with the attributes A_id ,A_name ,A_gender,
A_age ,A_cnum ,A_fnum,A_breed.The A_id is the Primary key ,D_id is a
foreign key which references Donation .

The Entity Feedback is created with the attributes f_id , f_name , f_lname,
f_email , f_phone , f_country ,f_areacode ,f_sub . The f_id is the primary key.

The Entity Ticketbooking is created with the attributes tid ,noadult ,nochild ,
nosenior ,date ,time ,price . The tid is the primary key.

The Entity Employee is created with the attributes E_id, A_id, A_name,
E_fullname , E_dob, E_gender, E_phone , E_Email , E_Hire date , E_job,
E_Salary, E_Address . The E_id is the primary key .A_id is a foreign key which
references Animal .

The Entity Donation is created with the attributes D_id , D_name, D_phone,
D_email, D_gender, A_amount, A_address . The D_id is a primary key .

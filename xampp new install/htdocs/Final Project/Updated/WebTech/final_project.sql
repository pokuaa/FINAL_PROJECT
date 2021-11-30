#Drop database Global_Denomination_Database;


-- CREATE database final_project;
-- use  final_project;

CREATE TABLE PERSON(
Person_id varchar(30) PRIMARY KEY,
Fname varchar(50),
Lname varchar(100),
DOB date,
email varchar(40),
phone varchar(30)
);


#Info index is important because it allows yo to access the name and contact details of every individual in the database. 
#Incase of any emergency, the name and contact details can be easily accessed without going through the entire table.
CREATE INDEX Personal_Info
ON Person (Fname,Lname,phone);



CREATE table MINISTER(
Person_id char(10) PRIMARY KEY,
branch_name varchar(50),
qualification varchar (100),
date_joined date,
projects_taken varchar(300),
FOREIGN KEY(Person_id) references Person (Person_id) 
);


# Select * from MINISTER;

CREATE table Leader_profile(
Person_id varchar(30) PRIMARY KEY,
Position varchar (40), 
date_of_commencement date,
date_of_completion date,
FOREIGN KEY(Person_id) references Person (Person_id) 
);

#Select * from Leader_profile;


CREATE table Employee(
Person_id char(10) PRIMARY KEY,
salary decimal,
employment_date varchar (50),
FOREIGN KEY(Person_id) references Person (Person_id) 
);


CREATE table administrator(
email_address varchar (50),
password varchar(100));
insert into administrator(email_address, password) values ("gyimahrichida@gmail.com", "$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK");

CREATE table Member(
Person_id varchar (20) PRIMARY KEY,  
mother_name varchar (100),
father_name varchar (100),
place_birth varchar (50), 
hometown varchar (50),
emergency_contactName varchar (50),
emergency_Contact varchar (50),
FOREIGN KEY(Person_id) references Person (Person_id) 
);

# Member_Info index allows the user of the database to access the emergency
# contact person's name and contact details provided by each member of the denomination.
CREATE INDEX Member_Info
ON Member (emergency_ContactName,emergency_Contact);


CREATE table Family_life(
Family_id varchar(20) PRIMARY KEY,
Person_id varchar(20) NOT NULL UNIQUE,  
marital_status enum ('married', 'single', 'divorced', 'widow/widower'),
number_children tinyint,
spouse_name varchar(100),
date_marriage date,
marriage_type enum ('Customary', 'Ordinance'),
FOREIGN KEY(Person_id) references Person (Person_id) 
);




CREATE table Education(
edu_id varchar(20) PRIMARY KEY,
Person_id varchar (20) NOT NULL UNIQUE,  
Level_education varchar (100),
current_institution varchar (100),
occupation varchar (100),
employment_status enum ('employed', 'unemployed'),
employer varchar(100),
FOREIGN KEY(Person_id) references Person (Person_id) 
);


CREATE table Account_Details(
account_id varchar (20) NOT NULL PRIMARY KEY,
Person_id varchar (20) NOT NULL, 
account_type varchar (50),
account_description TEXT,
FOREIGN KEY(Person_id) references Person (Person_id) 
);



CREATE table Payment_Details(
payment_id varchar (20) PRIMARY KEY, 
Person_id varchar (20) NOT NULL,  
account_id varchar (20) NOT NULL,
payment_date DATE, 
payment_description TEXT,
amount DECIMAL,
payment_type enum ('mobile money','cash', 'bank account'),
FOREIGN KEY(account_id) references Account_Details (account_id),
FOREIGN KEY(Person_id) references Person (Person_id)  
);

# PayDetails_Info index allows the users of the database and individuals to trace information on payment details. 
# The Person_id, account_id, payment_date and the amount colunms in the database helps to access member payment details.

CREATE UNIQUE INDEX PayDetails_Info
ON Payment_Details (Person_id, account_id, payment_date, amount);


CREATE table church_role(
role_id char(10) PRIMARY KEY,
Person_id varchar (20) NOT NULL, 
role_title varchar(50),
role_status enum ('vacant', 'occupied'),
FOREIGN KEY(Person_id) references Person (Person_id),
role_description varchar(100)
);

# Role_info is important because it allows us to access every role an individual plays within the denomination. 
# This will enable grouping of individuals into departments 
CREATE INDEX Role_info
ON church_role (Person_id, role_title);




CREATE table Branch(
Branch_id varchar (20) PRIMARY KEY,
Branch_name varchar(100),
phone varchar (50),
email_address varchar (100)
);



#Drop table BranchRole;
CREATE table BranchRole(
role_id varchar(10) NOT NULL,
Branch_id varchar (20) NOT NULL,
FOREIGN KEY(role_id) references church_role(role_id),
FOREIGN KEY(Branch_id) references Branch(Branch_id) 
);

 



#Drop table ADDRESS;
CREATE table ADDRESS(
Country varchar(50), 
city varchar(100),
Landmark varchar(100),
Digital_address varchar(50),
Branch_id varchar (20) NOT NULL,
FOREIGN KEY(Branch_id) references Branch(Branch_id)

);
SET foreign_key_checks = 0;




# Select * from Address;
#-------------------------------------------SQL QUERIES-------------------------------------------------
#The database should have information about the Denomination, which includes the various members and their personal details
#1.Facilities used include: inner join of two tables and SORT/ORDER  
SELECT * FROM PERSON INNER JOIN Member ON PERSON.Person_id = Member.Person_id ORDER BY fname ;


#There should be a table for the amount received after each service in cash.
#This is important because it will help the denomination have a clear idea of the money in hand
#2. Facilities used include: selection of a particular column, and a condition using IN
SELECT * FROM Payment_Details
WHERE payment_type IN ('cash', 'mobile money');


#The query allows the administrator to view all the ministers, their various branches and the address details of the branches
#3. Facilities used include: a condition using order by, select and INNER JOIN 
# Select DISTINCT PERSON.Person_id, PERSON.fname, PERSON.lname, MINISTER.projects_taken, Branch.Branch_name, Branch.phone, Branch.email_address, ADDRESS.Country, ADDRESS.Digital_address
# From Branch, ADDRESS, PERSON, MINISTER
# where PERSON.Person_id = MINISTER.Person_id and Branch.Branch_id = ADDRESS.Branch_id
# ORDER BY PERSON.Person_id like 'MI%';

SELECT PERSON.Person_id, PERSON.fname, PERSON.lname, MINISTER.projects_taken, Branch.Branch_name, Branch.phone, Branch.email_address, ADDRESS.Country, ADDRESS.Digital_address
FROM ((ADDRESS, MINISTER
INNER JOIN PERSON ON PERSON.Person_id = MINISTER.Person_id)
INNER JOIN BRANCH ON Branch.Branch_id = ADDRESS.Branch_id)
ORDER BY PERSON.Person_id like 'MI%';


# The query selects all members in the church,provide secondary data and calculate their ages.
#4. Facilities used include: a select and date calculator
#Facilities used include: Selection of a specific column,
Select DISTINCT PERSON.Person_id, PERSON.fname, PERSON.lname, Education.Level_education, Education.current_institution, Education.occupation, Education.employment_status, Education.employer, 
Person.DOB, year(curdate())- year(DOB) as age from PERSON, EDUCATION
where PERSON.Person_id =EDUCATION.Person_id ;

 
 #.5. Facilities used include: Selection of a specific column, an outer join
 # The database would also have the roles available in the various branches and the role every member play within the denomination.
 # The role would include, the role id, role name, role description etc
SELECT * from MEMBER JOIN church_role ON MEMBER.Person_id = Church_role.Person_id;

 
#.6. subquery
# The database would include detailed information of the administrators. 
# That is, the users of the database, it includes admins id and other personal information.
SELECT * from Person
WHERE Person_id = (SELECT Person_id FROM Administrator WHERE Person_id = "AD001");


# The query allows each branch to know the amount of money spent monthly to pay employees
# Facilities used include: a select and Sum expression 
# SELECT CONCAT('GHS', SUM(Salary)) as sum_of_salary FROM employee;
# SELECT COUNT(PERSON_id) FROM PERSON;
# SELECT * from MEMBER JOIN EDUCATION  ON MEMBER.Person_id = EDUCATION.Person_id;
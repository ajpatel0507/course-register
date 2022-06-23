CREATE TABLE register_detail(
	ID int not null auto_increment,
    fname varchar(40),
    lname varchar(40),
    email varchar(40),
    phone varchar(20),
    city varchar(40),
    vaccine varchar(40),
    gender varchar(10),
    Vaccination_time time,
    Vaccination_date date,
    primary key(ID)
);

INSERT INTO register_detail(fname, lname, email, phone, city, vaccine, gender, Vaccination_time, Vaccination_date)
VALUES
('Akshay', 'Patel', 'ajpatel1802@gmail.com', '9054145206', 'Zarola', 'Jansesen', 'Male', '08:15', 20210705),
('Rohan', 'Patel', 'rohan123@gmail.com', '7878903401', 'Borsad', 'Pfizer-BioNTech', 'Male', '09:00', 20210710),
('Shivam', 'Panchal', 'shiv5502@ymail.com', '9545871975', 'Anand', 'Jansesen', 'Male', '10:25', 20210708),
('Zalak', 'Patel', 'zhpatel30@gmail.com', '8140252525', 'Vadodara', 'AstraZeneca/COVISHIELD', 'Female', '11:10', 20210706),
('Virat', 'Kohli', 'viratvk18@yahoo.com', '4848848484', 'Mumbai', 'Jansesen', 'Male', '08:15', 20210715),
('M. S.', 'Dhoni', 'msd07@mail.com', '9054147895', 'Rachi', 'Jansesen', 'Male', '12:15', 20210707),
('Leroy','Cassidy','Leroy@fam.biz','878440737','Salt Lake City', 'AstraZeneca/COVISHIELD', 'Male','6:46 ','20210715'),
('Kimberly','Weston','Kimberly@twace.org','14725272','Phoenix', 'Moderna','Female','6:49','20210716'),
('Ruby','Fisher','Ruby02@deons.tech','535137541','New Orleans','Pfizer-BioNTech','Female','8:01','20210714');



 
select * from Akshay200463135.register_detail;
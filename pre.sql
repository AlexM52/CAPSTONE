create table prereq
(
	id int not null AUTO_INCREMENT,
	c_code varchar(8),
	prereq_code varchar(8),
	primary key (id),
	FOREIGN KEY (c_code) REFERENCES courses(c_code),
	FOREIGN KEY (prereq_code) REFERENCES courses(c_code),
	FOREIGN KEY (prereq_code) REFERENCES cxc(cxc_name)

);
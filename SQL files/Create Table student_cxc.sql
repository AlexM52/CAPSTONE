Create Table studentcxc
(
   	id int,
   	stid int,
	cxc_name varchar(250),
	type varchar(50),
	primary key (id),
	FOREIGN KEY (stid) REFERENCES studentpersonal(stid),
    FOREIGN KEY (cxc_name) REFERENCES cxc(cxc_name),
    FOREIGN KEY (type) REFERENCES cxc(type)
)
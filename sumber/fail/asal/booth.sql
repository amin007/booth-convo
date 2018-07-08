CREATE DATABASE if not exists booth;
use booth;
CREATE TABLE login(
	id VARCHAR(20) NOT NULL,
    password varchar(20) NOT NULL,
    level VARCHAR(15) NOT NULL
    
    );
DESC login;
  
   INSERT INTO login VALUES ('admin','admin123','admin');
  
SELECT * FROM login;

CREATE TABLE vendor(
	id VARCHAR(20),
    namevendor VARCHAR(40) not null,
    password varchar(1000) DEFAULT NULL,
    email VARCHAR(40) default null,
    phoneno INT(10) not null,
    address1 VARCHAR(50) not null,
    address2 VARCHAR(50) not null,
    city VARCHAR(50) not null,
    postcode VARCHAR(50) not null,
    state VARCHAR(50) not null,
	gambar varchar(1000) DEFAULT NULL,
    PRIMARY KEY(id)
    );
DESC vendor;
   INSERT INTO vendor VALUES ('A001','Iliya','abc456','liyana@gmail.com',0192962215,'No.4 jalan st5','Taman st','semenyih','43500','Selangor','');
   INSERT INTO vendor VALUES ('A002','Ika','789','ika@yahoo.com',0182673189,'No.9 jalan bunga2','Taman bunga','kuala kangsar','33020','Perak','');
  
SELECT * FROM vendor;

   
CREATE TABLE admin(
	id VARCHAR(20),
    nameadmin VARCHAR(40) not null,
    password varchar(1000) DEFAULT NULL,
    email VARCHAR(40) default null,
    phoneno INT(10) not null,
    address1 VARCHAR(50) not null,
    address2 VARCHAR(50) not null,
    city VARCHAR(50) not null,
    postcode VARCHAR(50) not null,
    state VARCHAR(50) not null,
	gambar varchar(1000) DEFAULT NULL,
    PRIMARY KEY(id)
    );
DESC admin;
   INSERT INTO admin VALUES ('admin','admin','admin123','admin@gmail.com','','','','','','','');
   INSERT INTO admin VALUES ('BE001','ahmad','abc456','ahmad@gmail.com',0192962215,'No.4 jalan st5','Taman st','air itam','43500','Selangor','');
   INSERT INTO admin VALUES ('BE002','abdul','789','abdul@yahoo.com',0182673189,'No.9 jalan bunga2','Taman bunga','kuala kangsar','33020','Perak','');
  
SELECT * FROM admin;

CREATE TABLE result(
	dateresult date,
    id VARCHAR(20),
    categoryproduct VARCHAR(30)not null,
    result VARCHAR(20)not null,
    PRIMARY KEY(dateresult),
    FOREIGN KEY(id) REFERENCES vendor(id)
    );
DESC result;
	INSERT INTO result VALUES ('180909','A001','flower','proceed');
    INSERT INTO result VALUES ('180707','A002','cosmetic','pending');
   
SELECT * FROM result;

CREATE TABLE vacancybooth(
	idvacancybooth VARCHAR(20) not null,
    categoryproduct VARCHAR(50)not null,
    capacity VARCHAR(200)not null,
    id VARCHAR(20) not null,
    PRIMARY KEY(idvacancybooth),
    FOREIGN KEY(id) REFERENCES admin(id)
    );
DESC vacancybooth;
	INSERT INTO vacancybooth VALUES ('DE001','food','100','BE001');
    INSERT INTO vacancybooth VALUES ('DE002','flower','50','BE002');
   
SELECT * FROM vacancybooth;


CREATE TABLE criteria(
	datecriteria date,
    id VARCHAR(20),
    dateresult date,
    ssm VARCHAR(20) not null,
    lesenberniaga VARCHAR(20)not null,
    sijilpmakanan VARCHAR(30)not null,
    suntikan VARCHAR(20)not null,
    PRIMARY KEY(datecriteria,dateresult,id),
    FOREIGN KEY(id) REFERENCES vendor(id),
    FOREIGN KEY(dateresult) REFERENCES result(dateresult)
    );
DESC criteria;
	INSERT INTO criteria VALUES ('170308','A001','180909','1234','lkm029','78uikh','health');
    INSERT INTO criteria VALUES ('170305','A002','180707','5678','lkm86','79uikh','sick');
    
SELECT * FROM criteria;

CREATE TABLE payment(
	idpayment VARCHAR(20) not null,
    datepayment date not null,
    dateresult date not null,
    receipt blob(50)not null,
    PRIMARY KEY(idpayment),
    FOREIGN KEY(dateresult) REFERENCES result(dateresult)
    );
DESC payment;
	INSERT INTO payment VALUES ('FD001','170207','180909','');
    INSERT INTO payment VALUES ('FD002','170309','180707','');
    
SELECT * FROM payment;


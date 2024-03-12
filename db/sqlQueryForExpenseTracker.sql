create database expense;

USE expense;

CREATE TABLE tracker (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(150) NOT NULL,
    amount DOUBLE NOT NULL,
    expenses_date date,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES category(id)
   
);

use expense;
select * from tracker;

use expense;
 create table category(
		id int primary key auto_increment not null,
        label varchar(255) not null,
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
        );
        
        use expense;
        insert into category (`label`) values ('laptop');
        
        use expense;
        select * from category;

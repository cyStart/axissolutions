<?php

TABLE employees   
 id INTEGER NOT NULL PRIMARY KEY
 managerId INTEGER REFERENCES employees(id)   
 name VARCHAR(30) NOT NULL

SELECT name
FROM employees
where id NOT IN (
    SELECT managerId FROM employees where managerId is not null
)

?>
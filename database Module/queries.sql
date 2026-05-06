// SQL Queries for Database Module


CREATE DATABASE training_db;

CREATE TABLE departments (
    dept_id SERIAL PRIMARY KEY,
    dept_name VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE employees (
    emp_id SERIAL PRIMARY KEY,
    emp_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    salary NUMERIC(10,2) CHECK(salary > 0),
    dept_id INT REFERENCES departments(dept_id),
    joining_date DATE DEFAULT CURRENT_DATE
);

INSERT INTO departments(dept_name)
VALUES
('IT'),
('HR'),
('Finance');

INSERT INTO employees(emp_name,email,salary,dept_id)
VALUES
('Prem','prem@gmail.com',50000,1),
('Rahul','rahul@gmail.com',45000,2),
('Amit','amit@gmail.com',60000,1);


SELECT * FROM employees;

SELECT emp_name,salary
FROM employees
WHERE salary > 45000;

SELECT *
FROM employees
ORDER BY salary DESC;

SELECT * FROM employees;

SELECT emp_name,salary
FROM employees
WHERE salary > 45000;

SELECT *
FROM employees
ORDER BY salary DESC;

SELECT e.emp_name,d.dept_name
FROM employees e
LEFT JOIN departments d
ON e.dept_id = d.dept_id;

SELECT e.emp_name,d.dept_name
FROM employees e
RIGHT JOIN departments d
ON e.dept_id = d.dept_id;

SELECT dept_id,
       COUNT(*) AS total_employees,
       AVG(salary) AS avg_salary
FROM employees
GROUP BY dept_id
HAVING AVG(salary) > 45000;

SELECT emp_name,salary
FROM employees
WHERE salary >
(
    SELECT AVG(salary)
    FROM employees
);


CREATE VIEW high_salary_employees AS
SELECT emp_name,salary
FROM employees
WHERE salary > 50000;

SELECT * FROM high_salary_employees;

CREATE INDEX idx_employee_name
ON employees(emp_name);


CREATE OR REPLACE FUNCTION calculate_bonus(
    emp_salary NUMERIC
)
RETURNS NUMERIC AS
$$
BEGIN
    RETURN emp_salary * 0.10;
END;
$$ LANGUAGE plpgsql;



SELECT emp_name,
       calculate_bonus(salary)
FROM employees;


CREATE OR REPLACE PROCEDURE update_salary(
    employee_id INT,
    increment_amount NUMERIC
)
LANGUAGE plpgsql
AS
$$
BEGIN
    UPDATE employees
    SET salary = salary + increment_amount
    WHERE emp_id = employee_id;
END;
$$;


CALL update_salary(1,5000);


CREATE TABLE employee_logs (
    log_id SERIAL PRIMARY KEY,
    emp_name VARCHAR(100),
    action_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE OR REPLACE FUNCTION log_employee_insert()
RETURNS TRIGGER AS
$$
BEGIN
    INSERT INTO employee_logs(emp_name)
    VALUES(NEW.emp_name);

    RETURN NEW;
END;
$$ LANGUAGE plpgsql;


CREATE TRIGGER employee_insert_trigger
AFTER INSERT
ON employees
FOR EACH ROW
EXECUTE FUNCTION log_employee_insert();


BEGIN;

UPDATE employees
SET salary = salary - 2000
WHERE emp_id = 1;

UPDATE employees
SET salary = salary + 2000
WHERE emp_id = 2;

COMMIT;


ROLLBACK;



CREATE TABLE products (
    product_id SERIAL PRIMARY KEY,
    product_name VARCHAR(100)
);


SELECT *
FROM employees
LIMIT 2;


SELECT *
FROM employees
OFFSET 1;


SELECT *
FROM employees
WHERE emp_name ILIKE 'p%';


INSERT INTO employees(emp_name,email,salary,dept_id)
VALUES('Karan','karan@gmail.com',70000,1)
RETURNING emp_id;



1. List all employees.

SELECT * FROM employees;
2. List all departments.

SELECT * FROM departments;
3. Find employees who earn more than ₹60,000.

SELECT first_name, last_name, salary
FROM employees
WHERE salary > 60000;
4. Get the names of employees who live in Delhi.

SELECT first_name, last_name
FROM employees
WHERE city = 'Delhi';
5. Find the total number of employees in each department.

SELECT d.department_name, COUNT(e.emp_id) AS total_employees
FROM employees e
JOIN departments d ON e.department_id = d.department_id
GROUP BY d.department_name;

6. Find the average salary of each department.

SELECT d.department_name, AVG(e.salary) AS avg_salary
FROM employees e
JOIN departments d ON e.department_id = d.department_id
GROUP BY d.department_name;


7. Find the second highest salary.

SELECT MAX(salary) AS second_highest_salary
FROM employees
WHERE salary < (SELECT MAX(salary) FROM employees);
8. Find employees who joined after 1st Jan 2020.

SELECT first_name, last_name, hire_date
FROM employees
WHERE hire_date > '2020-01-01';
9. Find all managers and their reportees.

SELECT m.first_name AS manager, e.first_name AS employee
FROM employees e
JOIN employees m ON e.manager_id = m.emp_id;

10. List employees who are not assigned to any project.

SELECT e.first_name, e.last_name
FROM employees e
LEFT JOIN employee_projects ep ON e.emp_id = ep.emp_id
WHERE ep.project_id IS NULL;
11. Which project has the most total hours worked?

SELECT p.project_name, SUM(ep.hours_worked) AS total_hours
FROM employee_projects ep
JOIN projects p ON ep.project_id = p.project_id
GROUP BY p.project_name
ORDER BY total_hours DESC
LIMIT 1;
12. Get total Present/Absent/Leave count of each employee for April 2025.
sql
Copy
Edit
SELECT e.first_name, 
    SUM(a.status = 'Present') AS Present,
    SUM(a.status = 'Absent') AS Absent,
    SUM(a.status = 'Leave') AS LeaveDays
FROM employees e
JOIN attendance a ON e.emp_id = a.emp_id
WHERE a.attendance_date BETWEEN '2025-04-01' AND '2025-04-30'
GROUP BY e.first_name;
13. Which employee worked the most hours overall?
sql
Copy
Edit
SELECT e.first_name, e.last_name, SUM(ep.hours_worked) AS total_hours
FROM employees e
JOIN employee_projects ep ON e.emp_id = ep.emp_id
GROUP BY e.emp_id
ORDER BY total_hours DESC
LIMIT 1;
14. Get gender distribution per department.
sql
Copy
Edit
SELECT d.department_name, e.gender, COUNT(*) AS total
FROM employees e
JOIN departments d ON e.department_id = d.department_id
GROUP BY d.department_name, e.gender;
15. Get city-wise average salary.
sql
Copy
Edit
SELECT city, AVG(salary) AS avg_salary
FROM employees
GROUP BY city;
16. Find all employees working on ‘GST Automation’.
sql
Copy
Edit
SELECT e.first_name, e.last_name
FROM employees e
JOIN employee_projects ep ON e.emp_id = ep.emp_id
JOIN projects p ON ep.project_id = p.project_id
WHERE p.project_name = 'GST Automation';
17. List employees with same salary.
sql
Copy
Edit
SELECT salary, COUNT(*) AS employee_count
FROM employees
GROUP BY salary
HAVING COUNT(*) > 1;
18. List departments that have more than 1 employee.
sql
Copy
Edit
SELECT d.department_name, COUNT(e.emp_id) AS total_employees
FROM departments d
JOIN employees e ON d.department_id = e.department_id
GROUP BY d.department_name
HAVING COUNT(e.emp_id) > 1;
19. List employees who joined in the year 2023.
sql
Copy
Edit
SELECT first_name, last_name, hire_date
FROM employees
WHERE YEAR(hire_date) = 2023;
20. List all employees and their department names.
sql
Copy
Edit
SELECT e.first_name, e.last_name, d.department_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id;

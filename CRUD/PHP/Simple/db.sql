CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, --
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL, 
    phone VARCHAR(15),               
    city VARCHAR(255)            
   
);

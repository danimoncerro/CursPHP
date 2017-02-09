-- CRUD: Create / Read / Update / Delete 

-- 1) Create - INSERT

INSERT INTO users (username, email, password)
VALUES ('dani', 'dani@yahoo.com', '0000');

-- 2) Read - SELECT

SELECT email FROM users;


-- 3) Update

UPDATE users
SET username = 'dani_moncerro'
WHERE id = 1015;

-- 4) Delete

DELETE FROM users
WHERE id = 1015;
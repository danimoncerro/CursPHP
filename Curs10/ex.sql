-- CRUD: Create / Read / Update / Delete 
--       INSERT / SELECT / UPDATE  / DELETE

-- 1. INSERT In tabela users
INSERT INTO users (username, email, password)
VALUES ('insertadi', 'insertadi@yahoo.com', '123456');

-- 2. Selectare 
-- Selecteaza toti utilizatorii
SELECT * FROM users;

-- Selecteaza username de la toti useri
SELECT username FROM users;

-- Selecteaza username si email de la toti useri
SELECT username,email FROM users;

-- Selecteaza username si email de la toti useri si ordonam crescator dupa username
SELECT username,email 
  FROM users
ORDER BY username ASC;

-- Selecteaza username si email pentru 3 utilizatori , ordonat crescator dupa username
SELECT username,email 
  FROM users
ORDER BY username ASC
LIMIT 3;

-- Selecteaza un singur utilizator random 
SELECT * FROM users
ORDER BY RAND()
LIMIT 1;

-- Selecteaza utilizatorii cu username Ioana
SELECT * 
FROM  `users` 
WHERE username =  'IOANA'

SELECT * 
FROM  `users` 
WHERE username LIKE  'ioana'

-- Selecteaza toti utilizatorii care contin in username ioana
SELECT * 
FROM  `users` 
WHERE username LIKE  '%ioana%'


-- Selecteaza prin JOIN ( tabele relationale )
SELECT * 
FROM  city
JOIN county ON city.id_county = county.id

-- 3. Actualizare 
-- Actualizare username
UPDATE users
  SET username = 'numenou'
WHERE id = 3;

-- Actualizare username si email
UPDATE users
  SET username = 'php',
      email = 'php@yahoo.com'
WHERE id = 3;

-- Sterge utilizatorul cu idul 4
DELETE FROM users
WHERE id = 4;
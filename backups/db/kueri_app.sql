SHOW GRANTS FOR 'userapp'@'localhost';

SHOW DATABASES;
SELECT DATABASE();

SHOW TABLES;

SELECT *
FROM users;
DESC producers;

INSERT INTO users (email, password, role)
    VALUE ('ilham@gmail.com', '$2y$10$myuaLt2nvrruRsWDRy2SS.sb0IdgvgoBU93j55QkksxWlHCqPvUC6', 'producer');

DESC producers;

INSERT INTO producers (user_id, company_name)
VALUES (1, 'toko ilham');

SELECT *
FROM producers;

SELECT id, company_name, province, city
FROM producers
WHERE id = 1;

UPDATE producers
SET province = 'Jawa Jawir',
    city     = 'Gotham City'
WHERE id = 1;
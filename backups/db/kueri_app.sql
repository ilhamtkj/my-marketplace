SHOW GRANTS FOR 'userapp'@'localhost';

SHOW DATABASES;
SELECT DATABASE();

SHOW TABLES;

SELECT *
FROM users;

INSERT INTO users (email, password, role)
    VALUE ('ilham@gmail.com', '$2y$10$myuaLt2nvrruRsWDRy2SS.sb0IdgvgoBU93j55QkksxWlHCqPvUC6', 'producer');

DESC producers;
SELECT *
FROM producers;
INSERT INTO producers (user_id, company_name)
VALUES (1, 'toko ilham');
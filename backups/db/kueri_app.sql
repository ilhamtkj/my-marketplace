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

UPDATE producers
SET province = NULL,
    city     = NULL
WHERE id = 1;

SELECT *
FROM contact_types;

INSERT INTO contact_types (contact_type)
VALUES ('Telepon'),
       ('WhatsApp'),
       ('Facebook'),
       ('Instagram');

SELECT *
FROM contacts;

INSERT INTO contacts (producer_id, contact_type_id, contact)
VALUES (1, 1, '081234567890'),
       (1, 2, '081234567890');

SELECT *
FROM contacts;

SELECT contact_types.contact_type, contacts.contact
FROM contacts
JOIN contact_types on contacts.contact_type_id = contact_types.id
WHERE contacts.producer_id = 1;
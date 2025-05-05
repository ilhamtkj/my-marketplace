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

# -------------------------------------------------------------------------------------------------------------------
SELECT *
FROM categories;

DESC categories;

INSERT INTO categories (category_name)
VALUES ('Lain-lain'),
       ('Mainan'),
       ('Furnitur'),
       ('Elektronik'),
       ('Makanan');

# -------------------------------------------------------------------------------------------------------------------
DESC product_categories;

INSERT INTO product_categories (product_id, category_id)
VALUES (1, 2),
       (2, 2),
       (3, 2),
       (4, 2),
       (5, 2),
       (6, 1),
       (7, 1),
       (8, 1),
       (9, 1),
       (10, 1);

SELECT products.id, name
FROM products
         JOIN product_categories ON products.id = product_categories.product_id
         JOIN categories ON product_categories.category_id = categories.id
WHERE is_active = TRUE;

# -------------------------------------------------------------------------------------------------------------------
SELECT products.id, name, price, image_name, producers.city
FROM products
         JOIN producers ON producers.id = products.producer_id
WHERE products.is_active = TRUE;

SELECT *
FROM products;

INSERT INTO products (producer_id, name, price, description, image_name)
VALUES ('1', 'Mobil mobilan 1', 100000, 'ini deskripsi', 'bunga (1).jpg'),
       ('1', 'Mobil mobilan 2', 200000, 'ini deskripsi', 'bunga (2).jpg'),
       ('1', 'Mobil mobilan 3', 300000, 'ini deskripsi', 'bunga (3).jpg'),
       ('1', 'Mobil mobilan 4', 400000, 'ini deskripsi', 'bunga (4).jpg'),
       ('1', 'Mobil mobilan 5', 500000, 'ini deskripsi', 'bunga (5).jpg'),
       ('1', 'Sabun mandi DIY 1', 10000, 'ini deskripsi', 'bunga (6).jpg'),
       ('1', 'Sabun mandi DIY 2', 20000, 'ini deskripsi', 'bunga (7).jpg'),
       ('1', 'Sabun mandi DIY 3', 30000, 'ini deskripsi', 'bunga (8).jpg'),
       ('1', 'Sabun mandi DIY 4', 40000, 'ini deskripsi', 'bunga (9).jpg'),
       ('1', 'Sabun mandi DIY 5', 50000, 'ini deskripsi', 'bunga (10).jpg');

SELECT products.id, name, price, description, image_name, producers.city
FROM products
         JOIN producers ON products.producer_id = producers.id
WHERE products.id = 1;

SELECT products.id, image_name, name, category_name, price, sold_quantity, is_active
FROM products
         JOIN product_categories ON products.id = product_categories.product_id
         JOIN categories ON product_categories.category_id = categories.id
WHERE producer_id = 1;

SELECT *
FROM products;

UPDATE products
SET is_active = 0
WHERE id = 1;

UPDATE products
SET name = 'Sabun mandi DIY warna ungu wangi lavender'
WHERE id = 6;

# ----------------------------------------------------------------------------------------------------------------------

DESC users;

SELECT *
FROM users;

SELECT *
FROM producers;

DESC producers;

SELECT *
FROM distributors;
CREATE USER 'userapp'@'localhost' IDENTIFIED BY 'akucintabahasaphp';
DROP USER 'userapp'@'localhost';
GRANT INSERT, SELECT, UPDATE, DELETE ON my_marketplace.* TO 'userapp'@'localhost';
FLUSH PRIVILEGES;

SHOW DATABASES;

CREATE DATABASE my_marketplace;
USE my_marketplace;

SHOW TABLES;

CREATE TABLE users
(
    id         INT PRIMARY KEY AUTO_INCREMENT,
    password   CHAR(60)                         NOT NULL,
    role       ENUM ('producer', 'distributor') NOT NULL,
    created_at TIMESTAMP                        NOT NULL DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE users
    ADD COLUMN email VARCHAR(100) NOT NULL AFTER id;

CREATE TABLE producers
(
    id           INT PRIMARY KEY AUTO_INCREMENT,
    user_id      INT          NOT NULL,
    company_name VARCHAR(100) NOT NULL,
    province     VARCHAR(50),
    city         VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users (id)
);

CREATE TABLE password_reset
(
    id         INT PRIMARY KEY,
    user_id    INT          NOT NULL,
    token      VARCHAR(255) NOT NULL,
    created_at TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    expires_at DATETIME     NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users (id)
);

ALTER TABLE password_reset
    MODIFY id INT AUTO_INCREMENT;

DESC password_reset;

CREATE TABLE distributors
(
    id            INT PRIMARY KEY,
    user_id       INT          NOT NULL,
    business_name VARCHAR(100) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users (id)
);

ALTER TABLE distributors
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE contacts
(
    id              INT PRIMARY KEY,
    producer_id     INT NOT NULL,
    contact_type_id INT NOT NULL,
    contact         VARCHAR(100),
    FOREIGN KEY (producer_id) REFERENCES producers (id),
    FOREIGN KEY (contact_type_id) REFERENCES contact_types (id)
);

ALTER TABLE contacts
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE contact_types
(
    id           INT PRIMARY KEY,
    contact_type VARCHAR(50)
);
ALTER TABLE contact_types
    MODIFY contact_type VARCHAR(50) NOT NULL;
ALTER TABLE contact_types
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE distributor_addresses
(
    id             INT PRIMARY KEY,
    distributor_id INT          NOT NULL,
    recipient_name VARCHAR(100) NOT NULL,
    phone_number   VARCHAR(20)  NOT NULL,
    address        TEXT         NOT NULL,
    postal_code    CHAR(5)      NOT NULL,
    FOREIGN KEY (distributor_id) REFERENCES distributors (id)
);

ALTER TABLE distributor_addresses
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE products
(
    id          INT PRIMARY KEY,
    name        VARCHAR(255)   NOT NULL,
    price       DECIMAL(10, 0) NOT NULL,
    description TEXT,
    image_path  TEXT           NOT NULL,
    is_active   BOOLEAN        NOT NULL DEFAULT TRUE,
    created_at  TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP
);
DESC products;
ALTER TABLE products
    MODIFY id INT AUTO_INCREMENT;
ALTER TABLE products
    ADD producer_id INT NOT NULL;
ALTER TABLE products
    ADD FOREIGN KEY (producer_id) REFERENCES producers (id);
ALTER TABLE products
    MODIFY producer_id INT NOT NULL AFTER id;

CREATE TABLE categories
(
    id            INT PRIMARY KEY,
    category_name VARCHAR(50) NOT NULL
);

ALTER TABLE categories
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE product_categories
(
    id          INT PRIMARY KEY,
    product_id  INT NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products (id),
    FOREIGN KEY (category_id) REFERENCES categories (id)
);

ALTER TABLE product_categories
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE carts
(
    id             INT PRIMARY KEY,
    distributor_id INT NOT NULL,
    product_id     INT NOT NULL,
    quantity       INT NOT NULL DEFAULT 1,
    FOREIGN KEY (distributor_id) REFERENCES distributors (id),
    FOREIGN KEY (product_id) REFERENCES products (id)
);

ALTER TABLE carts
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE orders
(
    id                     INT PRIMARY KEY,
    distributor_id         INT                                                      NOT NULL,
    distributor_address_id INT                                                      NOT NULL,
    total_price            DECIMAL(10, 0)                                           NOT NULL,
    status                 ENUM ('pending', 'paid', 'shipping', 'done', 'canceled') NOT NULL,
    payment                VARCHAR(50)                                              NOT NULL,
    created_at             TIMESTAMP                                                NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (distributor_id) REFERENCES distributors (id),
    FOREIGN KEY (distributor_address_id) REFERENCES distributor_addresses (id)
);

ALTER TABLE orders
    MODIFY id INT AUTO_INCREMENT;

CREATE TABLE order_items
(
    id          INT PRIMARY KEY,
    order_id    INT            NOT NULL,
    product_id  INT            NOT NULL,
    quantity    INT            NOT NULL,
    order_price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders (id),
    FOREIGN KEY (product_id) REFERENCES products (id)
);

ALTER TABLE order_items
    MODIFY id INT AUTO_INCREMENT;

SHOW TABLES;

# --------------------------------------------------------------------
ALTER TABLE products
    RENAME COLUMN image_path TO image_name;
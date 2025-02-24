CREATE DATABASE IF NOT EXISTS yellow_card_wine;
USE yellow_card_wine;

CREATE TABLE IF NOT EXISTS wines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

INSERT INTO wines (name, description, price, image_url) VALUES
('Cabernet Sauvignon', 'A full-bodied red wine with rich flavors of dark fruit and oak.', 25.99, 'images/cabernet.jpg'),
('Chardonnay', 'A popular white wine with buttery and oaky flavors.', 19.99, 'images/chardonnay.jpg'),
('Merlot', 'A smooth red wine with plum and cherry notes.', 22.49, 'images/merlot.jpg'),
('Sauvignon Blanc', 'A crisp and refreshing white wine with citrus aromas.', 18.99, 'images/sauvignon_blanc.jpg'),
('Pinot Noir', 'A light-bodied red wine with hints of raspberry and spice.', 27.99, 'images/pinot_noir.jpg');

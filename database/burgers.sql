-- Drop table if it already exists
DROP TABLE IF EXISTS burgers;

-- Create burgers table
CREATE TABLE burgers (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT NOT NULL
);

-- Insert sample data
INSERT INTO burgers (name, description) VALUES
('Classic BIG MAC', 'Juicy beef patty with big mac sauce, lettuce, tomato, and cheese, pickels, onions'),
('Cheeseburger', 'Beef patty topped with melted cheddar cheese, ketchup, onions and pickles'),
('Chicken Deluxe Burger', 'Grilled or Crispy chicken breast with mayo and lettuce, coon cheese, ranch sauce'),
('Veggie Burger', 'Plant-based patty with fresh vegetables'),
('Bacon Burger', 'Beef or Chicken burger topped with crispy bacon and cheese');

-- All data.
SELECT * FROM students JOIN school;

-- Firstname.
SELECT prenom FROM students;

-- Firstname, bithdate & school.
SELECT prenom, datenaissance, school FROM students;

-- Only female.
SELECT * FROM students WHERE genre = "F";

-- Only Ady school.
SELECT * FROM students where school=1;

-- Firstname, DESC. 
SELECT prenom FROM students ORDER BY prenom DESC;

-- Limit 2.
SELECT prenom FROM students ORDER BY prenom DESC LIMIT 2;

-- Add Ginette Dalor, 01/01/1930, Bruxelles.
INSERT INTO students (prenom, nom, datenaissance, genre, school) VALUES ("Ginette", "Dalor", "1930-01-01", "F", 2);

-- Update Ginette, male, "Omer".
UPDATE students SET prenom="Omer", genre="M" WHERE prenom="Ginette";

-- Delete ID 3.
DELETE FROM students WHERE idStudent=3;

-- Update "1" "Liege" & "2" "Gent".
UPDATE school SET school = "Liège" WHERE idschool=1;
UPDATE school SET school = "Gent" WHERE idschool=2;
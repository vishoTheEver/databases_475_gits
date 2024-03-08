-- Update Black Oxide (B)
UPDATE Paint1NF
SET Oz = 0, One_FortyEight = 20, One_NinetySix = 0
WHERE ColorantCode = 'B' AND ColorCode = '004';

-- Update Organic Yellow (T)
UPDATE Paint1NF
SET Oz = 0, One_FortyEight = 29, One_NinetySix = 1
WHERE ColorantCode = 'T' AND ColorCode = '004';

-- Update Magenta (V)
UPDATE Paint1NF
SET Oz = 1, One_FortyEight = 10, One_NinetySix = 1
WHERE ColorantCode = 'V' AND ColorCode = '004';

-- Remove any records for Dusty Mauve where the quantity is now 0
DELETE FROM Paint1NF
WHERE ColorCode = '004' AND (Oz = 0 AND One_FortyEight = 0 AND One_NinetySix = 0);

-- Select and order the records for Dusty Mauve
SELECT * FROM Paint1NF
WHERE ColorCode = '004'
ORDER BY ColorantCode ASC;

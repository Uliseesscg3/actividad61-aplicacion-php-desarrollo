CREATE TABLE pokemon (
  id INT UNSIGNED PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  tipo1 VARCHAR(100) NOT NULL,
  tipo2 INT UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pokemon VALUES('25', 'Pikachu', "Electrico", '');
INSERT INTO pokemon VALUES('150', 'Carmen', "Psiquico", '');
INSERT INTO pokemon VALUES('763', 'Tsareena', "Planta", '');
INSERT INTO pokemon VALUES('233', 'Porygon2', "Normal", '');
INSERT INTO pokemon VALUES('111', 'Ryhorn', "Tierra", 'Roca');
INSERT INTO pokemon VALUES('984', 'Colmilargo', "Lucha", 'Tierra');
INSERT INTO pokemon VALUES('823', 'Corviknight', "Volador", 'Acero');
INSERT INTO pokemon VALUES('333', 'Swablu', "Volador", 'Normal');
INSERT INTO pokemon VALUES('999', 'Gimmighoul ', "Fantasma", '');
INSERT INTO pokemon VALUES('1025', 'Pecharunt', "Veneno", 'Fantasma');

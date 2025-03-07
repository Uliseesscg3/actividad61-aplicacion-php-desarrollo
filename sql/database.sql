CREATE TABLE pokemon (
  id INT UNSIGNED PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  tipo1 VARCHAR(100) NOT NULL,
  tipo2 varchar(100),
  habilidad varchar(100) NOT NULL,
  stat_total INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pokemon VALUES('25', 'Pikachu', "Electrico", '',"Electricidad Estatica", 320);
INSERT INTO pokemon VALUES('150', 'Mewtwo', "Psiquico", '', "Presion", 680);
INSERT INTO pokemon VALUES('763', 'Tsareena', "Planta", '', "Defensa Hoja", 510);
INSERT INTO pokemon VALUES('233', 'Porygon2', "Normal", '', "Descarga", 515);
INSERT INTO pokemon VALUES('111', 'Rhyhorn', "Tierra", 'Roca', "Cabeza Roca", 345);
INSERT INTO pokemon VALUES('984', 'Colmilargo', "Tierra", 'Lucha', "Paleosintesis", 570);
INSERT INTO pokemon VALUES('823', 'Corviknight', "Volador", 'Acero', "Coraza Reflejo", 495);
INSERT INTO pokemon VALUES('333', 'Swablu', "Volador", 'Normal', "Cura Natural", 310);
INSERT INTO pokemon VALUES('999', 'Gimmighoul ', "Fantasma", '', "Fuga", 300);
INSERT INTO pokemon VALUES('1025', 'Pecharunt', "Veneno", 'Fantasma', "Titere Toxico", 600);

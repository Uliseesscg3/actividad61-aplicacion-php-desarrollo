CREATE TABLE pokemon (
  pokemon_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  tipo VARCHAR(100) NOT NULL,
  stats INT UNSIGNED NOT NULL,
  habilidad VARCHAR(100) NOT NULL,
  region VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Bulbasaur', 'Planta-Veneno', 318, 'Espesura', 'Kanto');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Raikou', 'Electrico', 580, 'Presion', 'Johto');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Marill', 'Agua-Hada', 250, 'Potencia', 'Johto');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Zoroark', 'Siniestro', 510, 'Ilusion', 'Teselia');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Magearna', 'Acero-Hada', 600, 'Coranima', 'Alola');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Diancie', 'Roca-Hada', 600, 'Cuerpo puro', 'Kalos');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Cradily', 'Roca-Planta', 495, 'Ventosas','Hoenn');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Ponyta-Galar', 'Psiquico', 410, 'Fuga', 'Galar');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Munkidori', 'Veneno-Psiquico', 555, 'Cadena Tóxica', 'Paldea');
INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES('Infernape', 'Fuego-Lucha', 534, 'Mar Llamas', 'Sinnoh');
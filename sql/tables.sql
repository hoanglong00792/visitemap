-- Table Photo --
CREATE TABLE photo(
  id_photo INT PRIMARY KEY AUTO_INCREMENT,,
  titre VARCHAR(255),
  image VARCHAR(255) NOT NULL,
  description VARCHAR(255)
);



-- Table Vidéo --
CREATE TABLE video(
  id_video INT PRIMARY KEY AUTO_INCREMENT,,
  titre VARCHAR(255),
  lien VARCHAR(255) NOT NULL,
  description VARCHAR(255)
);


-- Table des point d'interets --
CREATE TABLE point_interet(
  id_point_interet INT PRIMARY KEY AUTO_INCREMENT,,
  nom VARCHAR(255) NOT NULL,
  cout INT NOT NULL,
  description VARCHAR(255) NOT NULL,
  note INT DEFAULT 0,
  position VARCHAR(255) NOT NULL,
  date VARCHAR(255)
);

-- Table Liste Video --
CREATE TABLE liste_video(
  id_video_FK INT,
  id_point_interet_FK INT,
  PRIMARY KEY(id_point_interet_FK,id_video_FK),
  CONSTRAINT FOREIGN KEY (id_video_FK) REFERENCES video(id_video),
  CONSTRAINT FOREIGN KEY (id_point_interet_FK) REFERENCES point_interet(id_point_interet)
);


-- Table Liste Photo --
CREATE TABLE liste_photo(
  id_photo_FK INT NOT NULL,
  id_point_interet_FK INT,
  PRIMARY KEY(id_point_interet_FK,id_photo_FK),
  CONSTRAINT FOREIGN KEY (id_photo_FK) REFERENCES photo(id_photo),
  CONSTRAINT FOREIGN KEY (id_point_interet_FK) REFERENCES point_interet(id_point_interet)
)

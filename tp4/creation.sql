SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
DROP TABLE IF EXISTS contenu;
CREATE TABLE contenu(
    Id int(11) NOT NULL AUTO_INCREMENT,
    Titre varchar(25) NOT NULL,
   	Date datetime NOT NULL,
    Commentaire text NOT NULL,
    Photo varchar(25) NOT NULL,
    PRIMARY KEY (Id))
ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;
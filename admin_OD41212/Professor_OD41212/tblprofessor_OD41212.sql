CREATE TABLE IF NOT EXISTS `tblprofessor_OD41212` (
  `pid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(300) NOT NULL,
  `pemail` varchar(300) NOT NULL,
  `pcourse` varchar(100) NOT NULL,
  `puniversity` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO tblprofessor_OD41212 (pname, pemail, pcourse, puniversity ) VALUES
('andylo', 'andylo1@umbc.edu', 'Science', 'UMBC'),
('kfayyaz', 'kfayyaz@umbc.edu', 'Math', 'UMC'),
('michael33', 'michael33@umbc.edu', 'Geography', 'AACC')
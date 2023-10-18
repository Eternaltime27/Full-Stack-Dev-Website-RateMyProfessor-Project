CREATE TABLE IF NOT EXISTS `tblrating_OD41212` (
  `rid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `p_fk` int(6) NOT NULL,
  `rcomments` varchar(500) NOT NULL,
  `rdate` date DEFAULT NULL,
  `rrating` int(2) DEFAULT NULL,
  `rdifficulty` int(2) DEFAULT NULL,
  `rblank` varchar(500),
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
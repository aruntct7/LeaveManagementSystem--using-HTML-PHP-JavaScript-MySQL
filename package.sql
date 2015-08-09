-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2013 at 02:19 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `package`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `facinsertproc`(IN `pfid` VARCHAR(10), IN `pfname` VARCHAR(20), IN `ptutor` VARCHAR(10), IN `pdid` VARCHAR(10), IN `pdob` VARCHAR(30), OUT `pout` INT)
    NO SQL
begin
declare vfid varchar(10);
declare vpass varchar(20);
declare vfname varchar(20);
declare vdid varchar(10);
declare vdob date;
 set vfname =pfname;

set vdob = date(pdob);


set vfid='NULL';
select fid into vfid from faculty where fid=pfid;
set pout=0; 

if(vfid='NULL') then
  set vdid='NULL';    
  select did into vdid from depart where did = pdid;
   insert into dummy(facin) values(pout);
  if (vdid!='NULL') then
	set vpass=pdob; 
     if (ptutor!='NULL') then
      insert into faculty values(pfid,vfname,ptutor,pdid,vpass,vdob);
       set pout=1;insert into dummy(facin) values(pout);
      else
       insert into faculty(fid,fname,did,password,dob) 
       values(pfid,vfname,vdid,vpass,vdob); 
       set pout=1;insert into dummy(facin) values(pout);
     end if;
  end if; 
end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `facpass`(IN `pfid` VARCHAR(20), IN `ppass` VARCHAR(20))
begin
 declare vpass varchar(20);
 declare pout int;
 set pout =0;update dummy set fpwd=pout;
 Select password into vpass from faculty where fid=pfid;
 If(vpass=ppass)then
set  pout=1;update dummy set fpwd=pout;
 End if;
 End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `leaveinsert`(IN `psid` VARCHAR(10), IN `pfromdate` DATE, IN `pfromsess` VARCHAR(20), IN `ptosess` VARCHAR(20), IN `ptodate` DATE, IN `pleavetype` VARCHAR(20), IN `preason` VARCHAR(500), IN `psemno` INT)
    NO SQL
begin
 declare vleaveno integer(2);
 declare vdat date;
 declare vsid varchar(10);
 declare vstatus varchar(15);
 declare vfid varchar(10);
 declare vsemno int;
 declare vfromdate date;
 declare vtodate date;
 declare vfromsess varchar(20);
 declare vtosess varchar(20);
 declare vtype varchar(20);
 declare vsemdate date;
 declare dif int;
 declare flag int;
 
 set vstatus='POSTED';
 set vfromdate=date(pfromdate);
 set vtodate=date(ptodate);
 set vfromsess=upper(pfromsess);
 set vtosess=upper(ptosess);
 set vtype=pleavetype;
 set flag=0;
 select CURDATE() into vdat;


set dif=DATEDIFF(vtodate,vfromdate);
if(dif>=0) then
  set flag=flag+1;
    end if;

select startdate into vsemdate from semester where semno=psemno;
set dif=DATEDIFF(vfromdate,vsemdate);
if(dif>=0) then
  set flag=flag+1;
end if;

select enddate into vsemdate from semester where semno=psemno;	

set dif=DATEDIFF(vsemdate,vfromdate);
if(dif>=0) then
  set flag=flag+1;
end if;

select startdate into vsemdate from semester where semno=psemno;
set  dif=DATEDIFF(vtodate,vsemdate);
if(dif>=0) then
 set flag=flag+1;

end if;

select enddate into vsemdate from semester where semno=psemno;	
set dif=DATEDIFF(vsemdate,vtodate);
if(dif>=0) then
 set flag=flag+1;
 end if;

if(vfromsess in('AFTERNOON','FORENOON')) then
  set flag=flag+1; 
 end if;

if(vtosess  in('AFTERNOON','FORENOON')) then
  set flag=flag+1;
end if;

if(vtype  in('MEDICAL','EXEMPTION','LEAVE')) then
  set flag=flag+1;
end if;

select sid into vsid from student where sid= psid;
select fid into vfid from student where sid= psid;
  select semno into vsemno from student where sid= psid;
if (vsid!='NULL') then
  if(flag=8) then
   select cout into vleaveno from leavecount where sid=psid;
 set vleaveno=vleaveno + 1;
   insert into leaves(`leavno`,`sid`,`fid`,`doe`,`fromdate`,`fromsess`,`todat`,`tosess`,`leavtype`,`reason`,`status`,`semno`)
 values(vleaveno,psid,vfid,vdat,vfromdate,vfromsess,vtodate,vtosess,vtype,preason,vstatus,vsemno);

end if;
end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `studentinsert`(IN `psid` VARCHAR(10), IN `psname` VARCHAR(30), IN `pdob` VARCHAR(20), IN `psemno` INT(3), IN `pfid` VARCHAR(10), IN `pcid` INT(5))
    NO SQL
begin
declare vsid varchar(10);
declare vpass varchar(20);

declare vcid integer; 
declare vfid varchar(20);
declare vsem integer;
declare vdob varchar(10); 
 set  vpass = pdob;
 set vdob=date(pdob);
 set vsid='NULL';
 select sid into vsid from student where sid=psid;

if(vsid='NULL') then
    select cid into vcid from course where cid=pcid;
   if (vcid!='NULL')then 
     select fid into vfid from faculty where fid=pfid;
     if (vfid!='NULL') then
       select semno into vsem from semester where semno=psemno;
       if (vsem!='NULL') then 
         insert into student values(psid,psname,vdob,psemno,pfid,pcid,vpass);
          commit;
       end if;
     end if;
   end if;
 end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Studpasss`(IN `psid` VARCHAR(10), IN `ppass` VARCHAR(20))
    NO SQL
begin
 declare vpass varchar(20);
 declare pout int;
 set pout=0;update dummy set spwd=pout;
 select pass into vpass from student where sid=psid;
 if(vpass=ppass)then
 set pout=1;
 update dummy set spwd=pout;
end if;
 End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TUTOR_APPLY`(IN `psid` VARCHAR(20), IN `pleaveno` INT, IN `pstatus` VARCHAR(20))
    NO SQL
begin
 update leaves set status=pstatus where pleaveno=leaveno and psid=sid;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cid` varchar(10) NOT NULL DEFAULT '',
  `cname` varchar(30) DEFAULT NULL,
  `did` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`,`did`),
  KEY `cour_forky` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `did`) VALUES
('101', 'MSc SWE', '201'),
('102', 'MScTCS', '201');

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE IF NOT EXISTS `depart` (
  `did` varchar(5) NOT NULL DEFAULT '',
  `dname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`did`, `dname`) VALUES
('201', 'DAMCS');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE IF NOT EXISTS `dummy` (
  `facin` int(11) NOT NULL,
  `fpwd` int(11) NOT NULL,
  `spwd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`facin`, `fpwd`, `spwd`) VALUES
(0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` varchar(10) NOT NULL DEFAULT '',
  `fname` varchar(30) DEFAULT NULL,
  `tutor` varchar(10) DEFAULT NULL,
  `did` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`fid`),
  KEY `fac_tutor` (`tutor`),
  KEY `fac_did` (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `tutor`, `did`, `password`, `dob`) VALUES
('501', 'Suresh', '101', '201', 'Suresh', '1993-11-11'),
('502', 'Latha', '102', '201', 'Latha', '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `leavecount`
--

CREATE TABLE IF NOT EXISTS `leavecount` (
  `sid` varchar(20) NOT NULL,
  `cout` int(2) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavecount`
--

INSERT INTO `leavecount` (`sid`, `cout`) VALUES
('11pw06', 1),
('11pw07', 1),
('11pw23', 1),
('11pw25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `leavno` int(2) NOT NULL,
  `sid` varchar(10) NOT NULL DEFAULT '',
  `fid` varchar(10) DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `fromdate` date DEFAULT NULL,
  `fromsess` varchar(20) DEFAULT NULL,
  `todat` date DEFAULT NULL,
  `tosess` varchar(20) DEFAULT NULL,
  `leavtype` varchar(20) DEFAULT NULL,
  `reason` varchar(500) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `semno` int(2) DEFAULT NULL,
  PRIMARY KEY (`sid`,`leavno`),
  KEY `chk_sem` (`semno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leavno`, `sid`, `fid`, `doe`, `fromdate`, `fromsess`, `todat`, `tosess`, `leavtype`, `reason`, `status`, `semno`) VALUES
(1, '11pw06', '502', '2013-04-16', '2013-04-04', 'FORENOON', '2013-04-04', 'AFTERNOON', 'MEDICAL', 'fh', 'POSTED', 4),
(1, '11pw07', '501', '2013-04-16', '2013-04-03', 'AFTERNOON', '2013-04-03', 'AFTERNOON', 'LEAVE', 'ICMCM', 'POSTED', 4),
(1, '11pw23', '502', '2013-04-16', '2013-04-05', 'AFTERNOON', '2013-04-05', 'AFTERNOON', 'LEAVE', 'sd', 'CONFIRMED', 4);

--
-- Triggers `leaves`
--
DROP TRIGGER IF EXISTS `leavin`;
DELIMITER //
CREATE TRIGGER `leavin` AFTER INSERT ON `leaves`
 FOR EACH ROW begin
 update leavecount set cout = cout + 1 where sid = new.sid;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semno` int(2) NOT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  PRIMARY KEY (`semno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semno`, `startdate`, `enddate`) VALUES
(1, '2012-06-22', '2012-11-30'),
(2, '2012-11-28', '2013-04-26'),
(3, '2012-06-04', '2012-11-11'),
(4, '2012-11-28', '2013-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(10) NOT NULL DEFAULT '',
  `sname` varchar(300) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `semno` int(3) DEFAULT NULL,
  `fid` varchar(10) DEFAULT NULL,
  `cid` varchar(4) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  KEY `stud_for1` (`semno`),
  KEY `stud_for2` (`cid`),
  KEY `stud_for3` (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `dob`, `semno`, `fid`, `cid`, `pass`) VALUES
('11pw06', 'AravindhVasanthRam', '1994-03-26', 4, '502', '102', '1994-03-26'),
('11pw07', 'ArunPrasadh', '1994-03-15', 4, '501', '101', '1994-03-15'),
('11pw23', 'PreyesKumath', '1993-11-11', 4, '502', '102', '1993-11-11'),
('11pw25', 'RamPrasath', '1994-04-26', 4, '501', '101', '1994-04-26');

--
-- Triggers `student`
--
DROP TRIGGER IF EXISTS `tleavecount`;
DELIMITER //
CREATE TRIGGER `tleavecount` AFTER INSERT ON `student`
 FOR EACH ROW begin
 insert into leavecount(`sid`) values(new.sid);
end
//
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `cour_forky` FOREIGN KEY (`did`) REFERENCES `depart` (`did`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `fac_did` FOREIGN KEY (`did`) REFERENCES `depart` (`did`),
  ADD CONSTRAINT `fac_tutor` FOREIGN KEY (`tutor`) REFERENCES `course` (`cid`);

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `chk_sem` FOREIGN KEY (`semno`) REFERENCES `semester` (`semno`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `stud_for1` FOREIGN KEY (`semno`) REFERENCES `semester` (`semno`),
  ADD CONSTRAINT `stud_for2` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `stud_for3` FOREIGN KEY (`fid`) REFERENCES `faculty` (`fid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

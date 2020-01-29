

CREATE USER 'Dylan'@'localhost' IDENTIFIED WITH mysql_native_password BY 'P@ssw0rd';

GRANT ALL ON G2T.* TO 'Dylan'@'localhost';
FLUSH PRIVILEGES;
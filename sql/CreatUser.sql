CREATE USER 'ShoesConnector'@'localhost' IDENTIFIED BY 'Pa$$w0rd';
GRANT USAGE ON *.* TO 'ShoesConnector'@'localhost';
GRANT EXECUTE, SELECT, INSERT, UPDATE  ON `shoes`.* TO 'ShoesConnector'@'localhost';
FLUSH PRIVILEGES;
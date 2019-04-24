USE mysql;
CREATE USER msgboard IDENTIFIED BY 'msgboard';
GRANT ALL PRIVILEGES ON msgboard.* to msgboard@'%' IDENTIFIED BY 'msgboard';
FLUSH PRIVILEGES;
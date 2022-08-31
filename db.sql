drop database file_magang;
create database file_magang;
use file_magang;
create table pendaftar_magang(
    nim int primary key not null auto_increment,
    nama char(20) not null,
    alamat varchar(100) not null,
    asal_instansi char(20) not null,
    semester int not null
);
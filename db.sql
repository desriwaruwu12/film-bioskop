drop database bioskop;
create database bioskop;
use bioskop;
create table jadwal(
    id_jadwal int primary key not null auto_increment,
    nama_film varchar(100) NOT null,
    genre varchar(50) NOT null,
    jam_tayang varchar(100) NOT null,
    jam_selesai varchar(100) NOT null
);  git 
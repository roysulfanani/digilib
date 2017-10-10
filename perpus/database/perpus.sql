/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     15/08/2017 10:44:24                          */
/*==============================================================*/


drop table if exists ANGGOTA;

drop table if exists KOLEKSI;

drop table if exists PENERBIT;

drop table if exists PENULIS;

drop table if exists PETUGAS;

drop table if exists TRANSAKSIDOWNLOAD;

/*==============================================================*/
/* Table: ANGGOTA                                               */
/*==============================================================*/
create table ANGGOTA
(
   IDANGGOTA            int not null,
   NAMAANGGOTA          varchar(255) not null,
   EMAIL                varchar(255) not null,
   PASSWORDAGT          varchar(255) not null,
   JENISKELAMIN         varchar(1) not null,
   VERIFIKASI           varchar(255) not null,
   primary key (IDANGGOTA)
);

/*==============================================================*/
/* Table: KOLEKSI                                               */
/*==============================================================*/
create table KOLEKSI
(
   IDKOLEKSI            int not null,
   IDPETUGAS            int,
   IDPENERBIT           int,
   IDPENULIS            int,
   JUDUL                varchar(255) not null,
   NAMA_FILE            varchar(255) not null,
   DESKRIPSI            text not null,
   JENIS                varchar(255) not null,
   IDPETUGASK           int not null,
   FOTO_KOLEKSI         varchar(255) not null,
   IDPENULISK           int not null,
   IDPENERBITK          int not null,
   TANGGAL_INPUT        datetime not null,
   primary key (IDKOLEKSI)
);

/*==============================================================*/
/* Table: PENERBIT                                              */
/*==============================================================*/
create table PENERBIT
(
   IDPENERBIT           int not null,
   NAMAPENERBIT         varchar(255) not null,
   ALAMATPENERBIT       varchar(255),
   NOTELP               varchar(12) not null,
   primary key (IDPENERBIT)
);

/*==============================================================*/
/* Table: PENULIS                                               */
/*==============================================================*/
create table PENULIS
(
   IDPENULIS            int not null,
   NAMAPENULIS          varchar(255) not null,
   ALAMATPENULIS        varchar(255),
   primary key (IDPENULIS)
);

/*==============================================================*/
/* Table: PETUGAS                                               */
/*==============================================================*/
create table PETUGAS
(
   IDPETUGAS            int not null,
   USERNAME             varchar(255) not null,
   PASSWORD             varchar(255) not null,
   NAMAPETUGAS          varchar(255) not null,
   LEVEL                varchar(255) not null,
   primary key (IDPETUGAS)
);

/*==============================================================*/
/* Table: TRANSAKSIDOWNLOAD                                     */
/*==============================================================*/
create table TRANSAKSIDOWNLOAD
(
   IDTRANSDOWNLOAD      int not null,
   IDANGGOTA            int,
   IDKOLEKSI            int,
   IDKOLEKSITRANS       int not null,
   IDANGGOTATRANS       int not null,
   TGLDOWNLOAD          datetime not null,
   primary key (IDTRANSDOWNLOAD)
);

alter table KOLEKSI add constraint FK_RELATIONSHIP_1 foreign key (IDPETUGAS)
      references PETUGAS (IDPETUGAS) on delete restrict on update restrict;

alter table KOLEKSI add constraint FK_RELATIONSHIP_4 foreign key (IDPENERBIT)
      references PENERBIT (IDPENERBIT) on delete restrict on update restrict;

alter table KOLEKSI add constraint FK_RELATIONSHIP_5 foreign key (IDPENULIS)
      references PENULIS (IDPENULIS) on delete restrict on update restrict;

alter table TRANSAKSIDOWNLOAD add constraint FK_RELATIONSHIP_2 foreign key (IDANGGOTA)
      references ANGGOTA (IDANGGOTA) on delete restrict on update restrict;

alter table TRANSAKSIDOWNLOAD add constraint FK_RELATIONSHIP_6 foreign key (IDKOLEKSI)
      references KOLEKSI (IDKOLEKSI) on delete restrict on update restrict;


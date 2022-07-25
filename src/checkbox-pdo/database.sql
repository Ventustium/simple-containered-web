CREATE TABLE `siswa`(
      `id` INT NOT NULL AUTO_INCREMENT,
      `nrp` VARCHAR(255) NOT NULL,
      `nama` VARCHAR(255) NOT NULL,
      `jenis_kelamin` VARCHAR NOT NULL
 )

ALTER TABLE `siswa`(
      ADD PRIMARY KEY(`id`);
)
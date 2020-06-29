create TABLE `BASE`.`pessoa`(
		id  MEDIUMINT NOT NULL AUTO_INCREMENT,
		nome varchar (100) NULL,
        email varchar(100) null,
        dataNascimento varchar(100),
        nomeMae varchar(100),
        veiculo varchar(100),
        ano varchar(100),
        caa varchar(100),
        cpf varchar(20),
		 primary key(id)
)
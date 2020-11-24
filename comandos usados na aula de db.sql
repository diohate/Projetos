use dbphp7;
create table tb_usuarios (
    idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    desssenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (deslogin,desssenha) VALUES('root','');

SELECT  * FROM  tb_usuarios;

UPDATE tb_usuarios SET desssenha = '123456' WHERE idusuario = 1;

DELETE FROM tb_usuarios WHERE idusuario = 1;

TRUNCATE TABLE tb_usuarios;



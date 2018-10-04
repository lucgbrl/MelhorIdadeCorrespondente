CREATE TABLE users(
  id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_user VARCHAR(255),
  password_user VARCHAR(64),
  mail_user VARCHAR(255),
  telefone_user VARCHAR(14),
  id_fun INT,
  FOREIGN KEY (id_fun) REFERENCES funcionarios(id_fun)
)
CREATE TABLE lojas(
  id_loja INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_loja VARCHAR(255) NOT NULL,
  telefone_loja VARCHAR(14)
  uf_loja VARCHAR(2),
  cidade_loja VARCHAR(150),
  add_loja VARCHAR(255),
  add_num_loja INT,
);
CREATE TABLE funcionarios(
  id_fun INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_fun VARCHAR(255) NOT NULL,
  cpf_fun VARCHAR(11),
  rg_fun VARCHAR(11),
  telefone_fun VARCHAR(14),
  uf_fun VARCHAR(2),
  cidade_fun VARCHAR(150),
  add_fun VARCHAR(255),
  add_num_fun INT,
  FOREIGN KEY (id_loja) REFERENCES lojas(id_loja)
);
CREATE TABLE cliente(
  id_cli INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_cli VARCHAR(255) NOT NULL,
  cpf_cli VARCHAR(11),
  rg_cli VARCHAR(11),
  telefone_cli VARCHAR(14),
  uf_cli VARCHAR(2),
  cidade_cli VARCHAR(150),
  add_cli VARCHAR(255),
  add_num_cli INT,
  id_fun INT NOT NULL,
  FOREIGN KEY (id_fun) REFERENCES funcionarios(id_fun),
);

CREATE TABLE contrato(
  id_contrato INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  valor_contrato DECIMAL(15,2),
  id_loja INT NOT NULL,
  id_fun INT NOT NULL,
  id_cliente INT NOT NULL,
  id_prod INT NOT NULL,
  id_parcelas INT NOT NULL,
  id_banco INT NOT NULL,
  id_promotora INT NOT NULL,
  id_orgao INT NOT NULL

  FOREIGN KEY (id_loja) REFERENCES lojas(id_loja),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
  FOREIGN KEY (id_fun) REFERENCES funcionarios(id_fun),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
  FOREIGN KEY (id_produtos) REFERENCES produtos(id_prod),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
  FOREIGN KEY (id_parcelas) REFERENCES parcelas(id_parcelas),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
  FOREIGN KEY (id_banco) REFERENCES banco(id_banco),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
  FOREIGN KEY (id_promotora) REFERENCES promotoras(id_promotora),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
  FOREIGN KEY (id_orgao) REFERENCES orgaos(id_orgao),
  ON DELETE NO ACTION,
  ON UPDATE CASCADE,
);

CREATE TABLE produtos(
  id_prod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_prod VARCHAR(255)
);
CREATE TABLE parcelas(
  id_parcelas INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  num_parcelas VARCHAR(255)
);
CREATE TABLE bancos(
  id_banco INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_banco VARCHAR(255)
);
CREATE TABLE promotoras(
  id_promotora INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_promotora VARCHAR(255)
);
CREATE TABLE orgaos(
  id_orgao INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_orgao VARCHAR(255)
);

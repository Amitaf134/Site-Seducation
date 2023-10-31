-- Estrutura para tabela artigo

CREATE TABLE artigo (
  codigo int NOT NULL primary key auto_increment,
  titulo text NOT NULL,
  link text NOT NULL unique,
  foto blob NOT NULL,
  resumo text NOT NULL
)

-- Estrutura para tabela postagem

CREATE TABLE postagem (
  codigo int NOT NULL primary key auto_increment,
  texto text NOT NULL,
  id_usuario int NOT NULL,
  foreign key(id_usuario) references usuario(codigo)
)

-- Estrutura para tabela usuario

CREATE TABLE usuario (
  codigo int NOT NULL primary key auto_increment,
  nome text NOT NULL,
  email text NOT NULL unique,
  senha varchar(10) NOT NULL,
  biografia TEXT,
  foto blob,
  tipo VARCHAR(10),
  caminho TEXT
)
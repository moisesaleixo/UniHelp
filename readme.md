- Começo do projeto

Entidades

    Perguntas/Usuário

    - Perguntas
        - Ask/User
        - Ask/Like
        - Ask/Comentário
        - Ask/Share
    - Usuário

Funcionalidade

    CRUD usuário
    CRUD perguntas
    Autenticação
    Comentários / Respostas
    Curtidas

Requisitos

    Usuário precisa está logado
    Toda pergunta precisa está associada a um usuário
    Pergunta rascunho ou pública
    Quem vai ter acesso as perguntas



- Banco de dados - modelagem:
    - Cadastro de pessoas
        - id (AUTO_INCREMENT) 
        - Nome;
        - Sobrenome;
        - Idade - data_nascimento;
        - Área do conhecimento;
        - Curso;
        - E-mail (PK);
        - Senha - Confirmação;

    - Cadastro de dúvidas:
        - id da dúvida (PK) (AUTO_INCREMENT);
        - Area do conhecimento da dúvida;
        - Título da dúvida;
        - dúvida;
        - E-mail de quem fez a pergunta (SK);

    - Cadastro respostas:
        - resposta;
        - dúvida (SK);
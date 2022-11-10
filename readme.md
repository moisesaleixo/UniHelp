- Começo do projeto

Funcionalidade

    CRUD usuário
    CRUD perguntas
    Autenticação
    Comentários / Respostas

Requisitos

    Usuário precisa está logado
    Toda pergunta precisa está associada a um usuário
    Quem vai ter acesso as perguntas

- Banco de dados - modelagem:
    - Cadastro de pessoas
        - Nome;
        - Sobrenome;
        - Idade - data_nascimento;
        - Curso;
        - E-mail (PK);

    - Cadastro de dúvidas:
        - id da dúvida (PK) (AUTO_INCREMENT);
        - Area do conhecimento da dúvida;
        - Título da dúvida;
        - dúvida;
        - E-mail de quem fez a pergunta (FK);

    - Cadastro respostas:
        - resposta;
        - id da dúvida (FK);

- Lembrar de fazer quando voltar da aula;
    - adicionar o campo de idade no banco;
        - E adicionar no restante da aplicação;
    - Melhorar a área de perfil;
        - Organizar melhor os dados;
        - Colocar para fazer a edição dos dados;
    - Colocar mais restrições de erros no preenchimento dos dados;
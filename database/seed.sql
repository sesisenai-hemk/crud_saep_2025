INSERT INTO professor (nome_professor, email_professor, senha_professor) VALUES
    ('Ewerton', 'ewerton@sesi.com', '12345'),
    ('Icaro', 'icaro@sesi.com', '54321'),
    ('Djennifer', 'djennifer@sesi.com', 'senha');

INSERT INTO turma (nome_turma, fk_professor) VALUES
    ('DSM1', 1),
    ('QM1', 2),
    ('STM1', 3);

INSERT INTO atividade (descricao_atividade, fk_turma) VALUES
    ('Programar muitos códigos dificeis,', 1),
    ('Fazer muitos experimentos', 2),
    ('Tirar muitas fotos de insetos', 3);
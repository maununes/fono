INSERT INTO `form_avaliacao_sexo` (`id`, `sexo`) VALUES
  ('1', 'não informado'),
  ('2', 'masculino'),
  ('3', 'feminino');

-- 
-- Data for table `form_teste_vocal_tipo`
-- 

INSERT INTO `form_teste_vocal_tipo` (`id`, `tipo`, `descricao`) VALUES
  ('1', 'tipo1', ''),
  ('2', 'tipo2', ''),
  ('3', 'tipo3', '');

-- 
-- Data for table `usuario_tipo`
-- 

INSERT INTO `usuario_tipo` (`id`, `tipo`, `descricao`) VALUES
  ('1', 'administrador', 'Administrador do sistema'),
  ('2', 'cadastrador', 'Cadastrador de avaliações e testes vocais'),
  ('3', 'supervisor', 'Supervisor das avaliações e testes vocais'),
  ('99', 'pendente', 'Aguardando receber atribuição');
-- 
-- Data for table `usuario`
-- 

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `usuario_tipo`, `ativo`, `data_criacao`) VALUES
  ('1', 'Maurício Nunes', 'maununes', '17ef6c40e95bad13be7f2a7d068d6c91', '1', '1', NULL),
  ('2', 'cadastrador1', 'cadastrador1', '91f1e80b04d3d95395976230e50b7524', '2', '1', '2013-04-24 15:09:52'),
  ('3', 'cadastrador2', 'cadastrador2', 'd3117d8ca51334669ff3303c028509f0', '2', '1', '2013-04-24 17:45:50'),
  ('4', 'Supervisor', 'supervisor', '09348c20a019be0318387c08df7a783d', '3', '1', '2013-04-24 17:56:39');




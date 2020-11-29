Model View Controller - Design Pattern para PHP
Modelos
Todas as funções do banco de dados são armazenadas aqui. Cada tabela tem seu próprio objeto dentro da pasta do modelo.

Visualizações
Todas as páginas da web são armazenadas aqui. Cada página tem sua própria pasta com um index.php. Todos os dados são passados para a visualização por meio da variável $ data.

Controller
Todas as funcionalidades são armazenadas aqui. Todos os modelos são chamados dentro dos controladores e podem ser modificados e depois passados para a visualização.

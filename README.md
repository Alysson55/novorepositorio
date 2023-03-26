Logica & Passo a Passo de como construir o meu script.

1- criar a pasta do projeto dentro do xampp no meu pc
2- criar o projeto atraves do terminal git bash com o botao direito criando o projeto do composer e laravel
3- abrir o projeto com code.
4- no arquivo env. é importante salientar que usuarios windows so alteram 2 campos que é DB_CONNECTION=(banco usado)
e o DB_DATABASE=(nome que a pessoa criou).
5- rodar o php artisan no terminal bash para o artisan funcionar
6- criar o controller no caso do teste foi o CadastroController
7- criar o model Cadastros
8 - fazer o migrate pro banco de dados da tabela e os dados pedidos no teste
9- protectec fillabe so insere aquele tipo de dado por exemplo id =  so é inserido o id pra identificar o usuario assim como "primeiro nome" so entra o primeiro nome da pessoa ao inves do nome completo por exemplo
10- @csrf-> é um token utilizado pelo laravel para autenticar se um usuario é o mesmo que ta usando autenticado dentro da aplicaçao
11- migration criada
12- crias as blades 
13- criei as controllers
14- criei uma blade onde tem os dados como nome cpf nome do pai e da mae pra depois as funçoes na controller chamarem
15- na primeira public function que eu criei vale salientar o creat é: o que o usuario vai requisitar atraves da rota ja que pelo que eu defini nas rotas web.php é cadastro/create ou seja la no navegador no final do endereco coloco/create vai criar um cadastro pra min assim como é o update pra atualizar dados dentro do banco
e nessa public function tem os campos que o banco de dados vai precisar 
16 - os dois pontos duplos :: ou operador de escopo é o que da acesso a uma classe na funçao
17- double mustache ou chaves duplas-> é usado pra exibir dados que eu to chamando como por exemplo de alguma funçao ou variavel $var
18- dar o php artisan serve pra obter o endereco da web.

Algumas observaçoes:
Eu sou um dev em começo de carreira so tive uma unica experiencia como desenvolvedor e nao trabalhei com laravel, tudo que eu aprendi a respeito da framework foi em um curso que eu fiz em Janeiro desse ano no qual eu tirei minha primeira certificaçao e como mencionado no teste abaixo nao importa se atendeu a todos os requisitos faça o seu melhor e foi isso que eu tentei fazer e acabei a Meia noite de sabado para domingo e eu me baseei em exemplos que eu ja tinha feito no meu proprio curso em que construimos aplicaçoes utilizando banco de dados e eu fiz muita coisa baseada no que eu sabia, olhando os exemplos e no pouco que eu aprendi claro eu estou aprendendo e acredito que na empresa com o suporte do squad e com a supervisao da equipe eu consiga evoluir mais na minha carreira e quero fazer carreira em back-end em php/laravel.
Desde Ja o obrigado a todos que olharem e avaliarem o teste pela oportunidade de fazer esse processo seletivo.

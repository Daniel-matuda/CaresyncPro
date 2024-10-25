Vai na Migration e coloca os campos que você quer

Vai na Factory e coloca o Faker se você for instanciar vários objetos de uma vez para testar

Vai no ModelRequest (o model que você tá mexendo)
e coloca as validações, se são required e os tipos

vai na model em si e permite cadastrar os campos, por meio do filled ou guarded

vai na controller e atualiza as validações, geralmente é só o update

vai na view e cria todos os campos e os erros, usar como base alguma view pronta

conferir se todas as views estão funcionando, porque no CRUD tem várias views que fazem coisas parecidas
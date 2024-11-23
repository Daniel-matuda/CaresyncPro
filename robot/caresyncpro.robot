** Settings **
Library  SeleniumLibrary

** Variables **


** Keywords **
abrir navegador e acessar localhost
    Open Browser    http://127.0.0.1:8000/    chrome
pausa
    Sleep    1s

** Test Cases **
Cenário: Iniciar o projeto
    abrir navegador e acessar localhost
    pausa
Cenário: Por meio do header entrar na view de criar um usuário
    Click Element    //a[@class='nav-link dropdown-toggle'][contains(.,'Usuário')]
    pausa
    Click Element    //a[contains(.,'Criar um Usuário')]
    pausa
    
Cenário: Preencher o formulário para criar um usuário
    Input Text    //input[@placeholder='Primeiro Nome']    Geraldo
    pausa
    Input Text    //input[@placeholder='Sobrenome']    Carneiro
    pausa
    Input Text    //input[@placeholder='Digite seu email']    geraldocarneiro@gmail.com
    pausa
    Input Text    //input[@placeholder='Digite sua senha']    123
    pausa
    Input Text    //input[contains(@id,'nascimento')]    19-02-2000
    pausa
    Click Element    //select[contains(@id,'sexo')]
    pausa   
    Click Element    //option[@value='masculino']
    pausa
    Input Text    //input[@placeholder='Primeiro Nome']    Geraldo
    pausa
    Input Text    //input[@placeholder='Digite seu endereço']    QNXX QDYY RUAZZ CASAWW
    pausa
    Input Text    //input[@placeholder='Digite seu telefone']    61 912345678
    pausa

Cenário: Crie o usuário
    Click Element    //button[@type='submit'][contains(.,'Criar Usuário')]
    pausa


Cenário: Abra a listagem de usuário e ache o usuário criado
    Click Element    //a[@class='nav-link dropdown-toggle'][contains(.,'Usuário')]
    pausa
    Click Element    //a[contains(.,'Gerenciar Usuários')]
    pausa
    Click Element    //a[@class='page-link'][contains(.,'21')]
    pausa

Cenário: Editar um usuário
    Reload Page
    pausa
    pausa
    Click Element    (//a[contains(.,'Editar Usuário')])[2]
    pausa
    Input Text    //input[@placeholder='Sobrenome']    Cabral
    pausa
    Click Element    //button[contains(.,'Salvar Alterações')]
    pausa
    Reload Page
    pausa

Cenário: Abra a listagem de usuário novamente
    Click Element    //a[@class='nav-link dropdown-toggle'][contains(.,'Usuário')]
    pausa
    Click Element    //a[contains(.,'Gerenciar Usuários')]
    pausa
    Click Element    //a[@class='page-link'][contains(.,'21')]
    pausa

Cenário: Conferir se os dados foram editados
    Click Element    (//a[contains(.,'Editar Usuário')])[2]
    pausa

Cenário: Logar com o usuário admin
    Click Element    //a[@href='http://127.0.0.1:8000/login']
    pausa
    Input Text    //input[@placeholder='Digite seu email']    danielmatudaoficial@gmail.com   
    pausa
    Input Text    //input[@placeholder='Digite sua senha']    123
    pausa
    Click Element    //button[@type='submit'][contains(.,'Fazer Login')]
    pausa
    Reload Page
    pausa

Cenário: acessar a rota de gerenciar ficha de anamnese
    abrir navegador e acessar localhost
    pausa
    Click Element    //a[@class='nav-link dropdown-toggle'][contains(.,'Anamnese')]
    pausa
    Click Element    //a[@href='http://127.0.0.1:8000/anamneses']
    pausa

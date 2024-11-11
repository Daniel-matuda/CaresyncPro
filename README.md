# CaresyncPro - Guia de Configuração e Instalação

## Pré-requisitos

### Recomendação
- **Navegador**: Utilize o **Google Chrome** com o **Google** como mecanismo de pesquisa para facilitar a localização de ferramentas mencionadas neste guia.

### Instalações Iniciais
1. **Instale os seguintes softwares**:
   - **Visual Studio Code (VS Code)**
   - **Git**: [Baixe aqui](https://git-scm.com/downloads)
   - **WinRAR**

2. **Configuração do Diretório de Ferramentas**
   - Acesse `Meu Computador` e navegue até `C:`.
   - Crie uma pasta chamada `tools`.
   - Dentro de `tools`, crie outra pasta chamada `php`.
   - Estrutura: `C:/tools/php`.

---

## Instalação do PHP

1. **Baixar PHP**
   - Acesse: [https://www.php.net/](https://www.php.net/).
   - Clique em **Download** e vá para a seção **Windows downloads**.
   - Baixe o arquivo ZIP da versão **VS16 x64 Non Thread Safe**.

2. **Extrair PHP**
   - Extraia o conteúdo do ZIP para `C:/tools/php`.
   - Após extrair, você pode excluir o arquivo ZIP.

3. **Configuração do PATH**
   - Abra as configurações de **Variáveis de Ambiente** do sistema.
   - Na seção **Variáveis do sistema**, encontre e edite o `Path`.
   - Adicione o caminho `C:\tools\php`.

4. **Instalação do Microsoft Visual C++ Redistributable**
   - Baixe e instale as versões:
     - **x86**: [Download x86](https://aka.ms/vs/16/release/vc_redist.x86.exe)
     - **x64**: [Download x64](https://aka.ms/vs/16/release/vc_redist.x64.exe)

5. **Verificação do PHP**
   - Abra o terminal e execute o comando `php -v` para verificar a instalação.

---

## Instalação do Node.js e Composer

1. **Instale o Node.js**
   - Após instalar, reinicie o terminal e verifique com `node -v`.

2. **Instale o Composer**
   - **Nota**: Certifique-se de que o PHP está configurado em `C:/tools/php`.
   - Após a instalação, reinicie o terminal e verifique com `composer -v`.

---

## Instalação do Chocolatey

1. **Instale o Chocolatey**
   - Acesse: [https://chocolatey.org/install](https://chocolatey.org/install).
   - Copie o comando de instalação e execute no PowerShell (como administrador).

2. **Verifique a Instalação**
   - No terminal, digite `choco -v`.

---

## Instalação do MySQL com Chocolatey

1. **Instalar MySQL**
   - No terminal com privilégios de administrador, execute: `choco install mysql -y`.

2. **Verificar Conexão MySQL**
   - Teste com: `mysql -uroot -p`.
   - **Nota**: Se você não configurou senha, basta pressionar Enter.

---

## Instalação de Ferramentas Adicionais

1. **Instale o TablePlus**
   - Comando: `choco install tableplus -y`

2. **Instale o Cmder (Opcional)**
   - O Cmder oferece comandos semelhantes aos terminais MacOS/Linux. Baixe em: [https://cmder.app/](https://cmder.app/).

---

## Clonando o Repositório e Preparação do Projeto

1. **Clone o Repositório**
   - No terminal, acesse seu desktop (exemplo: `C:\Users\SeuUsuario\desktop`).
   - Clone o repositório com: `git clone https://github.com/Daniel-matuda/CaresyncPro.git`.

2. **Abra o Projeto no VS Code**
   - Arraste a pasta clonada para o VS Code.

3. **Configurações no PHP.ini**
   - Acesse `C:\tools\php\php.ini` e descomente (remova o `;` no início) as seguintes linhas:
     ```ini
     extension=fileinfo
     extension=pdo_mysql
     extension=openssl
     ```

4. **Instalar Dependências**
   - No terminal do VS Code, execute: `composer install`.

---

## Configuração do Arquivo .env

1. **Criar Arquivo .env**
   - No diretório raiz do projeto, copie o conteúdo abaixo para um novo arquivo chamado `.env`.

   ```plaintext
   APP_NAME=Laravel
   APP_ENV=local
   APP_KEY=
   APP_DEBUG=true
   APP_URL=http://localhost

   LOG_CHANNEL=stack
   LOG_DEPRECATIONS_CHANNEL=null
   LOG_LEVEL=debug

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=

   BROADCAST_DRIVER=log
   CACHE_DRIVER=file
   FILESYSTEM_DISK=local
   QUEUE_CONNECTION=sync
   SESSION_DRIVER=file
   SESSION_LIFETIME=120

   MEMCACHED_HOST=127.0.0.1

   REDIS_HOST=127.0.0.1
   REDIS_PASSWORD=null
   REDIS_PORT=6379

   MAIL_MAILER=smtp
   MAIL_HOST=mailhog
   MAIL_PORT=1025
   MAIL_USERNAME=null
   MAIL_PASSWORD=null
   MAIL_ENCRYPTION=null
   MAIL_FROM_ADDRESS="hello@example.com"
   MAIL_FROM_NAME="${APP_NAME}"

   AWS_ACCESS_KEY_ID=
   AWS_SECRET_ACCESS_KEY=
   AWS_DEFAULT_REGION=us-east-1
   AWS_BUCKET=
   AWS_USE_PATH_STYLE_ENDPOINT=false

   PUSHER_APP_ID=
   PUSHER_APP_KEY=
   PUSHER_APP_SECRET=
   PUSHER_APP_CLUSTER=mt1

   MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
   MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

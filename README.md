<a name="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- LOGO -->
<br />
<div align="center">
  <a href="https://github.com/SrPeixoto/LaravelSite">
    <!-- <img src="images/logo.png" alt="Logo" width="80" height="80"> -->
  </a>

  <h3 align="center">Primeiro site LARAVEL</h3>

  <p align="center">
    Um pequeno e moderno site constuido com LARAVEL!
    <br />
    <a href="https://github.com/SrPeixoto/LaravelSite"><strong>Explorar os documentos »</strong></a>
    <br />
    <br />
    <a href="https://github.com/SrPeixoto/LaravelSite">Ver Demo</a>
    ·
    <a href="https://github.com/SrPeixoto/LaravelSite/issues">Reportar BUGs</a>
    <!-- · -->
    <!-- <a href="https://github.com/SrPeixoto/LaravelSite/issues">Request Feature</a> -->
  </p>
</div>



<!-- ÍNDICE -->
<details>
  <summary>Índice</summary>
  <ol>
    <li>
      <a href="#about-the-project">Sobre o projeto</a>
      <ul>
        <li><a href="#built-with">Construído com</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Como iniciar</a>
      <ul>
        <li><a href="#prerequisites">Pré-requisitos</a></li>
        <li><a href="#installation">Instalação</a></li>
      </ul>
    </li>
    <li><a href="#usage">Uso</a></li>
    <li><a href="#roadmap">Roteiro</a></li>
    <li><a href="#contributing">Contribuindo</a></li>
    <li><a href="#license">Licença</a></li>
    <li><a href="#contact">Contato</a></li>
    <li><a href="#acknowledgments">Agradecimentos</a></li>
  </ol>
</details>



<!-- Sobre o projeto -->
## Sobre o projeto

[![Product Name Screen Shot][product-screenshot]](https://example.com)

Comecei esse projeto quando estava fazendo um estágio de TI em uma empresa local, fui designado a estudar PhP & Laravel para um projeto de terceiros. Logo, eu comecei a gostar e aprimorar mais ainda esse projeto

Idéias para o projeto:
* Ter uma aba HOME bem elaborada e criativa, responsiva, e didatica.
* Um sistema de Login bem completo com: Login/Register, verificação de Usuário e Senha idependente.
* Aba Loja com algumas funções como: Review de produtos, fretes, contato, filtros.

Lembrando que se trata de um projeto inicial, tudo será estudado e testado, logo após será upado para o repositório.

Use o `Iniciando.md` para poder iniciar.

<p align="right">(<a href="#readme-top">Volta ao topo</a>)</p>



### Construído com

Este exemplo foi constuído com os seguintes itens:

<!-- * [![Next][Next.js]][Next-url] -->
* [![React][React.js]][React-url]
<!-- * [![Vue][Vue.js]][Vue-url]
* [![Angular][Angular.io]][Angular-url]
* [![Svelte][Svelte.dev]][Svelte-url] -->
* [![Laravel][Laravel.com]][Laravel-url]
<!-- * [![Bootstrap][Bootstrap.com]][Bootstrap-url]
* [![JQuery][JQuery.com]][JQuery-url]-->

<p align="right">(<a href="#readme-top">Volta ao topo</a>)</p>



<!-- Como iniciar -->
## Como iniciar

Para poder começar a usar esse exemplo, você terá que instalar o LARAVEL & COMPOSER.

### Pré-requisitos

  <a href="https://laravel.com"><strong>Site oficial do Laravel »</strong></a>
  <br />
  <a href="https://getcomposer.org"><strong>Site oficial do Composer »</strong></a>
  <br />
  <a href="https://www.docker.com/"><strong>Site oficial do Docker »</strong></a>

### Instalação

_O processo de instalação é comum, como qualquer outro projeto LARAVEL._

1. Verifique o guia oficial de <a href="#prerequisites">instalação do laravel</a> para obter os requisitos do servidor antes de começar. Documentação oficial

A instalação alternativa é possível sem dependências locais que dependam do <a href="#prerequisites">Docker</a>.

2. Clone o repositório
   ```sh
   git clone https://github.com/SrPeixoto/LaravelSite.git
   ```
3. Alternar para a pasta repositório
   ```sh
   cd LaravelSite
   ```
4. Instale todas as dependências usando o composer
   ```sh
   composer install
   ```
5. Copie o arquivo env de exemplo e faça as alterações de configuração necessárias no arquivo .env
   ```sh
   cp .env.example .env
   ```
6. Gerar uma nova chave de aplicativo
   ```sh
   php artisan key:generate
   ```
7. Gere uma nova chave secreta de autenticação JWT
   ```sh
   php artisan jwt:generate
   ```
8. Execute as migrações do banco de dados (defina a conexão do banco de dados em .env antes de migrar)
   ```sh
   php artisan migrate
   ```
9. Inicie o servidor de desenvolvimento local
   ```sh
   php artisan serve
   ```

<p align="right">(<a href="#readme-top">Volta ao topo</a>)</p>



<!-- Roteiro -->
## Roteiro

- [x] Pagina Home
- [x] Pagina Login
    - [ ] Login
    - [ ] Register
- [ ] Suporte multilíngue
    - [x] Português
    - [ ] Inglês
    - [ ] Espanhol
    - [ ] Russo
- [ ] Loja
    - [ ] Review de produtos
    - [ ] Fretes
    - [ ] Contatos
    - [ ] Filtros    
- [ ] Verificação idependente
    - [ ] Usuário
    - [ ] Senha  
- [ ] Paginas Responsivas
- [x] Add Volta ao topo
- [x] Menu inicial Animado
- [x] Hiper-Links
- [ ] Rodapé Completo

Consulte os [Issues](https://github.com/SrPeixoto/LaravelSite/issues) para obter uma lista completa dos recursos propostos (e problemas conhecidos).

<p align="right">(<a href="#readme-top">Volta ao topo</a>)</p>


<!-- LICENSE -->
<!-- ## License

 `LICENSE.txt` 

<p align="right">(<a href="#readme-top">Volta ao topo</a>)</p> -->



<!-- CONTACT -->
## Contatos

📸 Instagram | Matheus Peixoto - [@peixotoo0](https://www.instagram.com/peixotoo0/)
🎥 TikTok | Matheus Peixoto - [@srpeixotoo](https://www.tiktok.com/@srpeixotoo)

📂 Projeto: [LaravelSite](https://github.com/SrPeixoto/LaravelSite)

<p align="right">(<a href="#readme-top">Volta ao topo</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/SrPeixoto/LaravelSite.svg?style=for-the-badge
[contributors-url]: https://github.com/SrPeixoto/LaravelSite/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/SrPeixoto/LaravelSite.svg?style=for-the-badge
[forks-url]: https://github.com/SrPeixoto/LaravelSite/network/members
[stars-shield]: https://img.shields.io/github/stars/SrPeixoto/LaravelSite.svg?style=for-the-badge
[stars-url]: https://github.com/SrPeixoto/LaravelSite/stargazers
[issues-shield]: https://img.shields.io/github/issues/SrPeixoto/LaravelSite.svg?style=for-the-badge
[issues-url]: https://github.com/SrPeixoto/LaravelSite/issues
[license-shield]: https://img.shields.io/github/license/SrPeixoto/LaravelSite.svg?style=for-the-badge
[license-url]: https://github.com/SrPeixoto/LaravelSite/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/1.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 

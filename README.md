<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Executando o c??digo

`composer install`

`php artisan migrate`

`php artisan serve`

## Respostas das quest??es 

### 1a)
`Usar a palavra reservada "parent" para acessar o m??todo da classe m??e e, em seguida, sobrescrev??-lo com a defini????o da classe filha.`

### 1b) 
`Usar a palavra reservada "parent", mas desta vez chamando diretamente o m??todo da classe m??e. A classe Filha herda o m??todo da classe Mae e o sobrescreve com sua pr??pria implementa????o. No entanto, ao chamar o m??todo da classe filha, chamamos primeiro o m??todo da classe m??e usando "parent::metodo()" e, em seguida, adicionamos a implementa????o da classe filha.`

### 1c) 
`N??o ?? necess??rio instanciar a classe para utiliz??-los. S??o ??teis para fun????es utilit??rias, que n??o dependem do estado interno do objeto e que podem ser utilizadas em diversos contextos.Acesso a vari??veis est??ticas e melhora a performance do codigo.`

### 1d) Exemplo em c??'digo 
```bash
class Mae {
    public $propriedade = "valor da classe m??e";
}

class Filha extends Mae {
    public $propriedade = "valor da classe filha";
}

class Exemplo {
    public static function metodoEstatico($objeto) {
        echo $objeto->propriedade;
    }
}

$mae = new Mae();
$filha = new Filha();

Exemplo::metodoEstatico($mae); 
// sa??da: "valor da classe m??e"
Exemplo::metodoEstatico($filha); 
// sa??da: "valor da classe filha"
```

### 3a)
`Solu????o paliativa para resolver esse problema ?? alterar o tipo da coluna PK para um tipo de dados que possa armazenar valores maiores que o integer, como BIGINT ou UUID.`

### 3b)
`Na quest??o acima foi citado 2 solu????es, tamb??m h?? o reparticionamento de tabelas, que pode dividir em varias parti????es. Penso que n??o deve exister uma solu????o de forma definitiva, mas se deve anilisa o caso que existe e tentar aplicar a melhor solu????o para cada caso, analisando tamb??m a complexidade para fazer este trabalho, tendo em vista que posso ser muito complexo`

### 3c) 
`Para garantir que as PKs sejam ??nicas em um ambiente de replica????o MySQL, ?? necess??rio configurar a replica????o de forma que todas as opera????es de grava????o (INSERT, UPDATE, DELETE) sejam replicadas em todos os n??s (servidores) da replica????o. Com a configura????o dos n??s MASTER para gravar as informa????es e os SLAVES para ler essas informa????es`

### 4) 
`Utiliza????o de cache, com isso o uso de cache pode ajudar a reduzir a quantidade de solicita????es que a API precisa processar. Tamb??m a pagina????o dos dados, podendo dividir a resposta em p??ginas menores.`

### 5) 
`Usar o cron e criar um sistemas para salvar quais crons a ser executados depois, com isso pode ser trabalhado em filhas de execu????es. Uma das ferramentas possiveis para trabalhar com isso pode ser o RabbitMQ e o Laravel Horazion. Com isso adicionar as tarefas em uma fila, a requisi????o HTTP pode ser finalizada imediatamente, sem esperar pela execu????o das tarefas em background. Isso permite que o usu??rio continue a utilizar o sistema normalmente enquanto as tarefas s??o executadas em segundo plano. Melhorando a utiliza????o de filas de tarefas permite uma melhor escalabilidade do sistema, pois as tarefas podem ser distribu??das entre v??rios processos ou servidores.`
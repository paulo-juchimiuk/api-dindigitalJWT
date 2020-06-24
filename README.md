# api-dindigitalJWT

Projeto com Docker(Laradock) em Laravel com CRUD e autenticação do usuário usando JWT-AUTH.
Projeto backend com os endpoints na collection.

## Getting Started

Clonar o Projeto com as Collections e os EndPoints. 

### Prerequisites

```
Docker
```
```
Docker compose
```

### Installing

```
$ docker-compose up -d nginx mysql redis
```

```
$ php artisan migrate
```

Validação JWT necessária apenas para resgatar os usuários(login).

Via postman cadastrar um novo usuário 
```
/api/user/novo
```
Gerar um Token com as credenciais cadastradas
```
/api/auth/login
```
Submeter com o token gerado anteriormente.
```
/api/users
```

As demais rotas não precisam do Token.



## Author

* **Paulo Vitor Juchimiuk**

---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://book.local.com/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_9dacb83a000873f5644fac30130aa46f -->
## The action to show widget output via ajax.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/arrilot/load-widget" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/arrilot/load-widget"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET arrilot/load-widget`


<!-- END_9dacb83a000873f5644fac30130aa46f -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://book.local.com/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## api/user
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": [
            {
                "id": 1,
                "name": "Admin",
                "email": "admin@admin.com",
                "phone": null,
                "address": null,
                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                "belongs": {
                    "data": [
                        {
                            "id": 3,
                            "name": "Dennis Crosby",
                            "description": "Adipisci ipsum optio",
                            "author": "Esse eum lorem nemo",
                            "belongs_to": 1,
                            "condition": "used",
                            "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T10:42:14.000000Z"
                        },
                        {
                            "id": 4,
                            "name": "Daria Fischer",
                            "description": "Provident eos dolo",
                            "author": "Aut quis in qui elig",
                            "belongs_to": 1,
                            "condition": "3",
                            "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T10:50:06.000000Z"
                        },
                        {
                            "id": 5,
                            "name": "Maia Horn",
                            "description": "Nostrum ea minim nos",
                            "author": "Iusto molestiae offi",
                            "belongs_to": 1,
                            "condition": "3",
                            "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T11:12:06.000000Z"
                        },
                        {
                            "id": 6,
                            "name": "Cameron Alvarez",
                            "description": "Ut explicabo Recusa",
                            "author": "Laboris laboriosam",
                            "belongs_to": 1,
                            "condition": "3",
                            "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T11:13:58.000000Z"
                        },
                        {
                            "id": 7,
                            "name": "Sarah Schmidt",
                            "description": "Aliquip ut praesenti",
                            "author": "Laudantium est ali",
                            "belongs_to": 1,
                            "condition": "used",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T11:15:11.000000Z"
                        },
                        {
                            "id": 8,
                            "name": "Ivor Lawson",
                            "description": "Sunt officia volupt",
                            "author": "Dolor fugiat accusa",
                            "belongs_to": 1,
                            "condition": "used",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T11:16:07.000000Z"
                        },
                        {
                            "id": 9,
                            "name": "test",
                            "description": "test desc",
                            "author": "saroj",
                            "belongs_to": 1,
                            "condition": "last",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T11:38:18.000000Z"
                        },
                        {
                            "id": 10,
                            "name": "test",
                            "description": "test desc",
                            "author": "saroj",
                            "belongs_to": 1,
                            "condition": "last",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T11:39:11.000000Z"
                        },
                        {
                            "id": 11,
                            "name": "test",
                            "description": "test desc",
                            "author": "saroj",
                            "belongs_to": 1,
                            "condition": "last",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-01T11:40:37.000000Z"
                        },
                        {
                            "id": 12,
                            "name": "Lisandra Wood",
                            "description": "Corrupti sunt duis",
                            "author": "Ipsa lorem magni do",
                            "belongs_to": 1,
                            "condition": "old",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-07T06:19:22.000000Z"
                        },
                        {
                            "id": 13,
                            "name": "Kevin Hartman",
                            "description": "Omnis exercitationem",
                            "author": "Magnam quod doloremq",
                            "belongs_to": 1,
                            "condition": "old",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-07T06:22:48.000000Z"
                        },
                        {
                            "id": 14,
                            "name": "Isaac Hickman",
                            "description": "Nulla recusandae No",
                            "author": "Tenetur in in dolor",
                            "belongs_to": 1,
                            "condition": "like new",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-07T06:24:22.000000Z"
                        },
                        {
                            "id": 15,
                            "name": "Rowan Stevenson",
                            "description": "Quia rerum sit vel",
                            "author": "Possimus velit eu u",
                            "belongs_to": 1,
                            "condition": "like new",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                            "belongs": {
                                "data": {
                                    "id": 1,
                                    "name": "Admin",
                                    "email": "admin@admin.com",
                                    "phone": null,
                                    "address": null,
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                    "created_at": "2020-06-15T15:51:07.000000Z"
                                }
                            },
                            "created_at": "2020-07-07T06:26:35.000000Z"
                        }
                    ]
                },
                "created_at": "2020-06-15T15:51:07.000000Z"
            },
            {
                "id": 2,
                "name": "abc",
                "email": "s@ss.com",
                "phone": "98635445",
                "address": "ktm",
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": [
                        {
                            "id": 16,
                            "name": "Blaze Vega",
                            "description": "Sit sit ratione proi",
                            "author": "Fugiat perspiciatis",
                            "belongs_to": 2,
                            "condition": "new",
                            "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                            "belongs": {
                                "data": {
                                    "id": 2,
                                    "name": "abc",
                                    "email": "s@ss.com",
                                    "phone": "98635445",
                                    "address": "ktm",
                                    "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                    "created_at": "2020-06-17T05:12:45.000000Z"
                                }
                            },
                            "created_at": "2020-07-15T08:41:45.000000Z"
                        }
                    ]
                },
                "created_at": "2020-06-17T05:12:45.000000Z"
            },
            {
                "id": 3,
                "name": "test",
                "email": "test@test.com",
                "phone": null,
                "address": null,
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-17T05:20:08.000000Z"
            },
            {
                "id": 10,
                "name": "saroj",
                "email": "saroj@saroj.com",
                "phone": null,
                "address": null,
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-18T07:25:25.000000Z"
            },
            {
                "id": 12,
                "name": "saroj",
                "email": "s@s.com",
                "phone": null,
                "address": null,
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-18T08:26:03.000000Z"
            },
            {
                "id": 13,
                "name": "saroj",
                "email": "a@s.com",
                "phone": null,
                "address": null,
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-18T08:42:37.000000Z"
            },
            {
                "id": 14,
                "name": "saroj",
                "email": "t@s.com",
                "phone": "9860286613",
                "address": "nepal",
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-18T08:50:30.000000Z"
            },
            {
                "id": 16,
                "name": "test",
                "email": "te@test.com",
                "phone": "98754324",
                "address": "nepal",
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-20T14:24:40.000000Z"
            },
            {
                "id": 19,
                "name": "test",
                "email": "tes@test.com",
                "phone": "98754324",
                "address": "nepal",
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-20T14:25:51.000000Z"
            },
            {
                "id": 20,
                "name": "sa",
                "email": "sar@s.com",
                "phone": "978675645342",
                "address": "nepal",
                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                "belongs": {
                    "data": []
                },
                "created_at": "2020-06-20T14:31:30.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "http://book.local.com/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register api

> Example request:

```bash
curl -X POST \
    "http://book.local.com/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_e0a8f1f3e33f828aba833636e81f969c -->
## details api

> Example request:

```bash
curl -X POST \
    "http://book.local.com/api/get-details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/get-details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/get-details`


<!-- END_e0a8f1f3e33f828aba833636e81f969c -->

<!-- START_da50450f1df5336c2a14a7a368c5fb9c -->
## api/posts
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": [
            {
                "id": 1,
                "category_id": 0,
                "title": "Lorem Ipsum Post",
                "excerpt": "This is the excerpt for the Lorem Ipsum Post",
                "body": "This is the body of the lorem ipsum post",
                "image": "http:\/\/book.local.com\/public\/storage\/posts\/post1.jpg",
                "slug": "lorem-ipsum-post",
                "created_at": "2020-06-15T15:51:07.000000Z",
                "category": {
                    "data": []
                }
            },
            {
                "id": 2,
                "category_id": 0,
                "title": "My Sample Post",
                "excerpt": "This is the excerpt for the sample Post",
                "body": "This is the body for the sample post, which includes the body.\n                We can use all kinds of format!\n                And include a bunch of other stuff.",
                "image": "http:\/\/book.local.com\/public\/storage\/posts\/post2.jpg",
                "slug": "my-sample-post",
                "created_at": "2020-06-15T15:51:07.000000Z",
                "category": {
                    "data": []
                }
            },
            {
                "id": 3,
                "category_id": 0,
                "title": "Latest Post",
                "excerpt": "This is the excerpt for the latest post",
                "body": "This is the body for the latest post",
                "image": "http:\/\/book.local.com\/public\/storage\/posts\/post3.jpg",
                "slug": "latest-post",
                "created_at": "2020-06-15T15:51:07.000000Z",
                "category": {
                    "data": []
                }
            },
            {
                "id": 4,
                "category_id": 0,
                "title": "Yarr Post",
                "excerpt": "Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.",
                "body": "Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.\nMizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.\nInterloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.",
                "image": "http:\/\/book.local.com\/public\/storage\/posts\/post4.jpg",
                "slug": "yarr-post",
                "created_at": "2020-06-15T15:51:07.000000Z",
                "category": {
                    "data": []
                }
            }
        ]
    }
}
```

### HTTP Request
`GET api/posts`


<!-- END_da50450f1df5336c2a14a7a368c5fb9c -->

<!-- START_9bbfc13f0750a7e9c27c0786a5f67e0a -->
## api/user/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": []
    }
}
```

### HTTP Request
`GET api/user/{id}`


<!-- END_9bbfc13f0750a7e9c27c0786a5f67e0a -->

<!-- START_538c59bd7094f21614fa40efbc87039d -->
## api/user/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/api/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/{id}`


<!-- END_538c59bd7094f21614fa40efbc87039d -->

<!-- START_b19e2ecbb41b5fa6802edaf581aab5f6 -->
## api/me
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": []
    }
}
```

### HTTP Request
`GET api/me`


<!-- END_b19e2ecbb41b5fa6802edaf581aab5f6 -->

<!-- START_14885de16b283ad8c795b910f6731ea0 -->
## api/book/add
> Example request:

```bash
curl -X POST \
    "http://book.local.com/api/book/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/book/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/book/add`


<!-- END_14885de16b283ad8c795b910f6731ea0 -->

<!-- START_87639d2c13c955291d7ef79a0c226410 -->
## api/book
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/book" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/book"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": [
            {
                "id": 3,
                "name": "Dennis Crosby",
                "description": "Adipisci ipsum optio",
                "author": "Esse eum lorem nemo",
                "belongs_to": 1,
                "condition": "used",
                "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T10:42:14.000000Z"
            },
            {
                "id": 4,
                "name": "Daria Fischer",
                "description": "Provident eos dolo",
                "author": "Aut quis in qui elig",
                "belongs_to": 1,
                "condition": "3",
                "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T10:50:06.000000Z"
            },
            {
                "id": 5,
                "name": "Maia Horn",
                "description": "Nostrum ea minim nos",
                "author": "Iusto molestiae offi",
                "belongs_to": 1,
                "condition": "3",
                "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:12:06.000000Z"
            },
            {
                "id": 6,
                "name": "Cameron Alvarez",
                "description": "Ut explicabo Recusa",
                "author": "Laboris laboriosam",
                "belongs_to": 1,
                "condition": "3",
                "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:13:58.000000Z"
            },
            {
                "id": 7,
                "name": "Sarah Schmidt",
                "description": "Aliquip ut praesenti",
                "author": "Laudantium est ali",
                "belongs_to": 1,
                "condition": "used",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:15:11.000000Z"
            },
            {
                "id": 8,
                "name": "Ivor Lawson",
                "description": "Sunt officia volupt",
                "author": "Dolor fugiat accusa",
                "belongs_to": 1,
                "condition": "used",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:16:07.000000Z"
            },
            {
                "id": 9,
                "name": "test",
                "description": "test desc",
                "author": "saroj",
                "belongs_to": 1,
                "condition": "last",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:38:18.000000Z"
            },
            {
                "id": 10,
                "name": "test",
                "description": "test desc",
                "author": "saroj",
                "belongs_to": 1,
                "condition": "last",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:39:11.000000Z"
            },
            {
                "id": 11,
                "name": "test",
                "description": "test desc",
                "author": "saroj",
                "belongs_to": 1,
                "condition": "last",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:40:37.000000Z"
            },
            {
                "id": 12,
                "name": "Lisandra Wood",
                "description": "Corrupti sunt duis",
                "author": "Ipsa lorem magni do",
                "belongs_to": 1,
                "condition": "old",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:19:22.000000Z"
            },
            {
                "id": 13,
                "name": "Kevin Hartman",
                "description": "Omnis exercitationem",
                "author": "Magnam quod doloremq",
                "belongs_to": 1,
                "condition": "old",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:22:48.000000Z"
            },
            {
                "id": 14,
                "name": "Isaac Hickman",
                "description": "Nulla recusandae No",
                "author": "Tenetur in in dolor",
                "belongs_to": 1,
                "condition": "like new",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:24:22.000000Z"
            },
            {
                "id": 15,
                "name": "Rowan Stevenson",
                "description": "Quia rerum sit vel",
                "author": "Possimus velit eu u",
                "belongs_to": 1,
                "condition": "like new",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:26:35.000000Z"
            },
            {
                "id": 16,
                "name": "Blaze Vega",
                "description": "Sit sit ratione proi",
                "author": "Fugiat perspiciatis",
                "belongs_to": 2,
                "condition": "new",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                "belongs": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "created_at": "2020-07-15T08:41:45.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/book`


<!-- END_87639d2c13c955291d7ef79a0c226410 -->

<!-- START_c2777b45a28b2c5eb64fba606829ee64 -->
## api/book/detail/{book_id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/book/detail/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/book/detail/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": []
    }
}
```

### HTTP Request
`GET api/book/detail/{book_id}`


<!-- END_c2777b45a28b2c5eb64fba606829ee64 -->

<!-- START_3a092744e986a066f15401ea434153a0 -->
## api/book/{email}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/book/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/book/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": [
            {
                "id": 15,
                "name": "Rowan Stevenson",
                "description": "Quia rerum sit vel",
                "author": "Possimus velit eu u",
                "belongs_to": 1,
                "condition": "like new",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:26:35.000000Z"
            },
            {
                "id": 14,
                "name": "Isaac Hickman",
                "description": "Nulla recusandae No",
                "author": "Tenetur in in dolor",
                "belongs_to": 1,
                "condition": "like new",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:24:22.000000Z"
            },
            {
                "id": 13,
                "name": "Kevin Hartman",
                "description": "Omnis exercitationem",
                "author": "Magnam quod doloremq",
                "belongs_to": 1,
                "condition": "old",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:22:48.000000Z"
            },
            {
                "id": 12,
                "name": "Lisandra Wood",
                "description": "Corrupti sunt duis",
                "author": "Ipsa lorem magni do",
                "belongs_to": 1,
                "condition": "old",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-07T06:19:22.000000Z"
            },
            {
                "id": 11,
                "name": "test",
                "description": "test desc",
                "author": "saroj",
                "belongs_to": 1,
                "condition": "last",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:40:37.000000Z"
            },
            {
                "id": 10,
                "name": "test",
                "description": "test desc",
                "author": "saroj",
                "belongs_to": 1,
                "condition": "last",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:39:11.000000Z"
            },
            {
                "id": 9,
                "name": "test",
                "description": "test desc",
                "author": "saroj",
                "belongs_to": 1,
                "condition": "last",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:38:18.000000Z"
            },
            {
                "id": 8,
                "name": "Ivor Lawson",
                "description": "Sunt officia volupt",
                "author": "Dolor fugiat accusa",
                "belongs_to": 1,
                "condition": "used",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:16:07.000000Z"
            },
            {
                "id": 7,
                "name": "Sarah Schmidt",
                "description": "Aliquip ut praesenti",
                "author": "Laudantium est ali",
                "belongs_to": 1,
                "condition": "used",
                "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:15:11.000000Z"
            },
            {
                "id": 6,
                "name": "Cameron Alvarez",
                "description": "Ut explicabo Recusa",
                "author": "Laboris laboriosam",
                "belongs_to": 1,
                "condition": "3",
                "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:13:58.000000Z"
            },
            {
                "id": 5,
                "name": "Maia Horn",
                "description": "Nostrum ea minim nos",
                "author": "Iusto molestiae offi",
                "belongs_to": 1,
                "condition": "3",
                "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T11:12:06.000000Z"
            },
            {
                "id": 4,
                "name": "Daria Fischer",
                "description": "Provident eos dolo",
                "author": "Aut quis in qui elig",
                "belongs_to": 1,
                "condition": "3",
                "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T10:50:06.000000Z"
            },
            {
                "id": 3,
                "name": "Dennis Crosby",
                "description": "Adipisci ipsum optio",
                "author": "Esse eum lorem nemo",
                "belongs_to": 1,
                "condition": "used",
                "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                "belongs": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-01T10:42:14.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/book/{email}`


<!-- END_3a092744e986a066f15401ea434153a0 -->

<!-- START_98a066015c41bd073d16f94fcd0ef0b6 -->
## api/book/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/api/book/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/book/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/book/{id}`


<!-- END_98a066015c41bd073d16f94fcd0ef0b6 -->

<!-- START_0dd1b0b8dadd93103ca87dec53fb1ade -->
## api/exchange/add
> Example request:

```bash
curl -X POST \
    "http://book.local.com/api/exchange/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/exchange/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/exchange/add`


<!-- END_0dd1b0b8dadd93103ca87dec53fb1ade -->

<!-- START_723b3a61942f3843a77eb4b80e9d6c2b -->
## api/exchange
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/exchange" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/exchange"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": [
            {
                "id": 1,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-15T09:02:26.000000Z"
            },
            {
                "id": 3,
                "status": "confirmed",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-16T12:15:00.000000Z"
            },
            {
                "id": 5,
                "status": "accepted",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "created_at": "2020-07-16T12:19:58.000000Z"
            },
            {
                "id": 6,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-16T12:20:55.000000Z"
            },
            {
                "id": 7,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "created_at": "2020-07-16T12:21:35.000000Z"
            },
            {
                "id": 8,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": []
                },
                "requested_by": {
                    "data": {
                        "id": 3,
                        "name": "test",
                        "email": "test@test.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": []
                        },
                        "created_at": "2020-06-17T05:20:08.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-28T08:12:13.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/exchange`


<!-- END_723b3a61942f3843a77eb4b80e9d6c2b -->

<!-- START_a135cb47c4ecea6a561ef9460bbebfb6 -->
## api/exchange/requestedto/{requested_id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/exchange/requestedto/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/exchange/requestedto/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": [
            {
                "id": 1,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-15T09:02:26.000000Z"
            },
            {
                "id": 6,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-16T12:20:55.000000Z"
            },
            {
                "id": 8,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": []
                },
                "requested_by": {
                    "data": {
                        "id": 3,
                        "name": "test",
                        "email": "test@test.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": []
                        },
                        "created_at": "2020-06-17T05:20:08.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "created_at": "2020-07-28T08:12:13.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/exchange/requestedto/{requested_id}`


<!-- END_a135cb47c4ecea6a561ef9460bbebfb6 -->

<!-- START_f430dd02f16b21a446fb4a8115afbfe5 -->
## api/exchange/requestedby/{requested_by}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/api/exchange/requestedby/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/api/exchange/requestedby/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status_code": 200,
    "message": "Success",
    "data": {
        "data": [
            {
                "id": 5,
                "status": "accepted",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "created_at": "2020-07-16T12:19:58.000000Z"
            },
            {
                "id": 7,
                "status": "requested",
                "book_wanted": {
                    "data": {
                        "id": 15,
                        "name": "Rowan Stevenson",
                        "description": "Quia rerum sit vel",
                        "author": "Possimus velit eu u",
                        "belongs_to": 1,
                        "condition": "like new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                        "belongs": {
                            "data": {
                                "id": 1,
                                "name": "Admin",
                                "email": "admin@admin.com",
                                "phone": null,
                                "address": null,
                                "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                "created_at": "2020-06-15T15:51:07.000000Z"
                            }
                        },
                        "created_at": "2020-07-07T06:26:35.000000Z"
                    }
                },
                "book_offered": {
                    "data": {
                        "id": 16,
                        "name": "Blaze Vega",
                        "description": "Sit sit ratione proi",
                        "author": "Fugiat perspiciatis",
                        "belongs_to": 2,
                        "condition": "new",
                        "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                        "belongs": {
                            "data": {
                                "id": 2,
                                "name": "abc",
                                "email": "s@ss.com",
                                "phone": "98635445",
                                "address": "ktm",
                                "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                "created_at": "2020-06-17T05:12:45.000000Z"
                            }
                        },
                        "created_at": "2020-07-15T08:41:45.000000Z"
                    }
                },
                "requested_by": {
                    "data": {
                        "id": 1,
                        "name": "Admin",
                        "email": "admin@admin.com",
                        "phone": null,
                        "address": null,
                        "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                        "belongs": {
                            "data": [
                                {
                                    "id": 3,
                                    "name": "Dennis Crosby",
                                    "description": "Adipisci ipsum optio",
                                    "author": "Esse eum lorem nemo",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/public\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:42:14.000000Z"
                                },
                                {
                                    "id": 4,
                                    "name": "Daria Fischer",
                                    "description": "Provident eos dolo",
                                    "author": "Aut quis in qui elig",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/\/var\/www\/html\/book\/storage\/\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T10:50:06.000000Z"
                                },
                                {
                                    "id": 5,
                                    "name": "Maia Horn",
                                    "description": "Nostrum ea minim nos",
                                    "author": "Iusto molestiae offi",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:12:06.000000Z"
                                },
                                {
                                    "id": 6,
                                    "name": "Cameron Alvarez",
                                    "description": "Ut explicabo Recusa",
                                    "author": "Laboris laboriosam",
                                    "belongs_to": 1,
                                    "condition": "3",
                                    "image": "http:\/\/book.local.com\/storage\/books\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:13:58.000000Z"
                                },
                                {
                                    "id": 7,
                                    "name": "Sarah Schmidt",
                                    "description": "Aliquip ut praesenti",
                                    "author": "Laudantium est ali",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:15:11.000000Z"
                                },
                                {
                                    "id": 8,
                                    "name": "Ivor Lawson",
                                    "description": "Sunt officia volupt",
                                    "author": "Dolor fugiat accusa",
                                    "belongs_to": 1,
                                    "condition": "used",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:16:07.000000Z"
                                },
                                {
                                    "id": 9,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:38:18.000000Z"
                                },
                                {
                                    "id": 10,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:39:11.000000Z"
                                },
                                {
                                    "id": 11,
                                    "name": "test",
                                    "description": "test desc",
                                    "author": "saroj",
                                    "belongs_to": 1,
                                    "condition": "last",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-01T11:40:37.000000Z"
                                },
                                {
                                    "id": 12,
                                    "name": "Lisandra Wood",
                                    "description": "Corrupti sunt duis",
                                    "author": "Ipsa lorem magni do",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102762-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:19:22.000000Z"
                                },
                                {
                                    "id": 13,
                                    "name": "Kevin Hartman",
                                    "description": "Omnis exercitationem",
                                    "author": "Magnam quod doloremq",
                                    "belongs_to": 1,
                                    "condition": "old",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594102968-blog2.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:22:48.000000Z"
                                },
                                {
                                    "id": 14,
                                    "name": "Isaac Hickman",
                                    "description": "Nulla recusandae No",
                                    "author": "Tenetur in in dolor",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103062-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:24:22.000000Z"
                                },
                                {
                                    "id": 15,
                                    "name": "Rowan Stevenson",
                                    "description": "Quia rerum sit vel",
                                    "author": "Possimus velit eu u",
                                    "belongs_to": 1,
                                    "condition": "like new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594103195-blog1.jpg",
                                    "belongs": {
                                        "data": {
                                            "id": 1,
                                            "name": "Admin",
                                            "email": "admin@admin.com",
                                            "phone": null,
                                            "address": null,
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/June2020\/5wBqQW3BmuGU8DQ66axj.jpg",
                                            "created_at": "2020-06-15T15:51:07.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-07T06:26:35.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-15T15:51:07.000000Z"
                    }
                },
                "requested_to": {
                    "data": {
                        "id": 2,
                        "name": "abc",
                        "email": "s@ss.com",
                        "phone": "98635445",
                        "address": "ktm",
                        "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                        "belongs": {
                            "data": [
                                {
                                    "id": 16,
                                    "name": "Blaze Vega",
                                    "description": "Sit sit ratione proi",
                                    "author": "Fugiat perspiciatis",
                                    "belongs_to": 2,
                                    "condition": "new",
                                    "image": "http:\/\/book.local.com\/storage\/books\/July2020\/1594802505-download.jpeg",
                                    "belongs": {
                                        "data": {
                                            "id": 2,
                                            "name": "abc",
                                            "email": "s@ss.com",
                                            "phone": "98635445",
                                            "address": "ktm",
                                            "avatar": "http:\/\/book.local.com\/storage\/users\/default.png",
                                            "created_at": "2020-06-17T05:12:45.000000Z"
                                        }
                                    },
                                    "created_at": "2020-07-15T08:41:45.000000Z"
                                }
                            ]
                        },
                        "created_at": "2020-06-17T05:12:45.000000Z"
                    }
                },
                "created_at": "2020-07-16T12:21:35.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/exchange/requestedby/{requested_by}`


<!-- END_f430dd02f16b21a446fb4a8115afbfe5 -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## admin/login
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## admin/login
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_badb1c937a8c3e56e1a7253ca0cdfacc -->
## admin/hooks
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/hooks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/hooks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks`


<!-- END_badb1c937a8c3e56e1a7253ca0cdfacc -->

<!-- START_432230a7228875b5baa5ba6b677e7e59 -->
## admin/hooks/{name}/enable
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/hooks/1/enable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/hooks/1/enable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks/{name}/enable`


<!-- END_432230a7228875b5baa5ba6b677e7e59 -->

<!-- START_7e6424294561f7b0a67a2ae22585b58a -->
## admin/hooks/{name}/disable
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/hooks/1/disable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/hooks/1/disable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks/{name}/disable`


<!-- END_7e6424294561f7b0a67a2ae22585b58a -->

<!-- START_f8daf1de1f5abe6cbc077b58025c2a27 -->
## admin/hooks/{name}/update
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/hooks/1/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/hooks/1/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/hooks/{name}/update`


<!-- END_f8daf1de1f5abe6cbc077b58025c2a27 -->

<!-- START_1cb7e187338d4692aa72da2bdd0f6e3c -->
## admin/hooks
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/hooks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/hooks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/hooks`


<!-- END_1cb7e187338d4692aa72da2bdd0f6e3c -->

<!-- START_3a2cf4434db868f89c6889d47f06d543 -->
## admin/hooks/{name}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/hooks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/hooks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/hooks/{name}`


<!-- END_3a2cf4434db868f89c6889d47f06d543 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_d31bd86158f6a5a775c92ea5b5554af9 -->
## admin/logout
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/logout`


<!-- END_d31bd86158f6a5a775c92ea5b5554af9 -->

<!-- START_576736063b80c937d4f6d7cf23dc713c -->
## admin/upload
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/upload`


<!-- END_576736063b80c937d4f6d7cf23dc713c -->

<!-- START_2b573e6e1d43c73d7cca65562a4e5b27 -->
## admin/profile
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/profile`


<!-- END_2b573e6e1d43c73d7cca65562a4e5b27 -->

<!-- START_e63b2f0bdbfc13b04a6e95ae794396e1 -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/users/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/order`


<!-- END_e63b2f0bdbfc13b04a6e95ae794396e1 -->

<!-- START_3a1e6967e6fc6e75b206a116be6990c3 -->
## admin/users/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/users/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users/action`


<!-- END_3a1e6967e6fc6e75b206a116be6990c3 -->

<!-- START_565aba9d8c16a122c48e9e43bfd74d39 -->
## admin/users/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/users/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users/order`


<!-- END_565aba9d8c16a122c48e9e43bfd74d39 -->

<!-- START_75a91fccfa4b95106e7a8d363cebf5fa -->
## admin/users/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/users/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{id}/restore`


<!-- END_75a91fccfa4b95106e7a8d363cebf5fa -->

<!-- START_581a493db08a1fee3478950d342176b3 -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/users/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/relation`


<!-- END_581a493db08a1fee3478950d342176b3 -->

<!-- START_966aef287a2e493cadea71f52b022ceb -->
## admin/users/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/users/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users/remove`


<!-- END_966aef287a2e493cadea71f52b022ceb -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## admin/users
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_5480f74e868e50a30ac924242a423503 -->
## admin/users/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/create`


<!-- END_5480f74e868e50a30ac924242a423503 -->

<!-- START_84cdb3581c8df106c62233f1ebb35d8b -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users`


<!-- END_84cdb3581c8df106c62233f1ebb35d8b -->

<!-- START_07a2c34e3cc7acee537fdaad0c2c19d9 -->
## admin/users/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{id}`


<!-- END_07a2c34e3cc7acee537fdaad0c2c19d9 -->

<!-- START_e23c0a400f599b52984393daa4e11454 -->
## admin/users/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{id}/edit`


<!-- END_e23c0a400f599b52984393daa4e11454 -->

<!-- START_0649f27323a52bd8dbf471efe62f14da -->
## admin/users/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/users/{id}`

`PATCH admin/users/{id}`


<!-- END_0649f27323a52bd8dbf471efe62f14da -->

<!-- START_ff0c8890a029256daf70dac0fed732ec -->
## admin/users/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/{id}`


<!-- END_ff0c8890a029256daf70dac0fed732ec -->

<!-- START_d33d20eb4b2146eabfbfc25696c0f1bc -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/order`


<!-- END_d33d20eb4b2146eabfbfc25696c0f1bc -->

<!-- START_5d01b72ada2ff1d9d4b29d15a504d55f -->
## admin/menus/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/menus/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/action`


<!-- END_5d01b72ada2ff1d9d4b29d15a504d55f -->

<!-- START_67cd26259e818cdf5671de42660cf592 -->
## admin/menus/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/menus/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/order`


<!-- END_67cd26259e818cdf5671de42660cf592 -->

<!-- START_69d1eed77c0cfb78139c587c1b8ee8d1 -->
## admin/menus/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{id}/restore`


<!-- END_69d1eed77c0cfb78139c587c1b8ee8d1 -->

<!-- START_d041193c8cda3598ee88c01cb4eb7d6f -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/relation`


<!-- END_d041193c8cda3598ee88c01cb4eb7d6f -->

<!-- START_ab85cc3a7ac21476439a36e859a12321 -->
## admin/menus/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/menus/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/remove`


<!-- END_ab85cc3a7ac21476439a36e859a12321 -->

<!-- START_7a00d6c45032c03f4ae7d3beec00bb0e -->
## admin/menus
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus`


<!-- END_7a00d6c45032c03f4ae7d3beec00bb0e -->

<!-- START_e1fe606f36d5e0b828b7aa722d401ef1 -->
## admin/menus/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/create`


<!-- END_e1fe606f36d5e0b828b7aa722d401ef1 -->

<!-- START_3ed1f4443877ce5c80a9f8ffdaa4e19c -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus`


<!-- END_3ed1f4443877ce5c80a9f8ffdaa4e19c -->

<!-- START_a97b68d9a3f29d1334f0de6f90398afa -->
## admin/menus/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{id}`


<!-- END_a97b68d9a3f29d1334f0de6f90398afa -->

<!-- START_b745e1012d2f428285f538392b1dc5a9 -->
## admin/menus/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{id}/edit`


<!-- END_b745e1012d2f428285f538392b1dc5a9 -->

<!-- START_8e628da752bf59497c7d35988c0facf4 -->
## admin/menus/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/menus/{id}`

`PATCH admin/menus/{id}`


<!-- END_8e628da752bf59497c7d35988c0facf4 -->

<!-- START_f0f3c2e9719e8f93368d070159d0da8e -->
## admin/menus/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/menus/{id}`


<!-- END_f0f3c2e9719e8f93368d070159d0da8e -->

<!-- START_7028d468d28c67da726de2b6abbf0251 -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/roles/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/order`


<!-- END_7028d468d28c67da726de2b6abbf0251 -->

<!-- START_a842e0d52349702c38488c7bd5eef6de -->
## admin/roles/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/roles/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles/action`


<!-- END_a842e0d52349702c38488c7bd5eef6de -->

<!-- START_11400608993f2d581f446024f1456f47 -->
## admin/roles/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/roles/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles/order`


<!-- END_11400608993f2d581f446024f1456f47 -->

<!-- START_4fda3e50934366eb4620d3d26faa6686 -->
## admin/roles/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/roles/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/{id}/restore`


<!-- END_4fda3e50934366eb4620d3d26faa6686 -->

<!-- START_fd6ce61c53bbc29b087e7e6bbb5cffa5 -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/roles/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/relation`


<!-- END_fd6ce61c53bbc29b087e7e6bbb5cffa5 -->

<!-- START_1b4990c9ddbcbb4462d6ad2ec61e6042 -->
## admin/roles/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/roles/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles/remove`


<!-- END_1b4990c9ddbcbb4462d6ad2ec61e6042 -->

<!-- START_879622c0ac94a4a0f4d364d46a42bc7e -->
## admin/roles
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles`


<!-- END_879622c0ac94a4a0f4d364d46a42bc7e -->

<!-- START_d29246d3a43660bb5210bf9aff91c85a -->
## admin/roles/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/create`


<!-- END_d29246d3a43660bb5210bf9aff91c85a -->

<!-- START_9117e54780cf55c5071dfb91b33aaef6 -->
## admin/roles
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles`


<!-- END_9117e54780cf55c5071dfb91b33aaef6 -->

<!-- START_3b265543f99369ce1b886ee0b82b0e27 -->
## admin/roles/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/{id}`


<!-- END_3b265543f99369ce1b886ee0b82b0e27 -->

<!-- START_f875aac60c5c2c67509c4dd8539e30e3 -->
## admin/roles/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/roles/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/roles/{id}/edit`


<!-- END_f875aac60c5c2c67509c4dd8539e30e3 -->

<!-- START_f26dde20558dc643e224cc43dece4226 -->
## admin/roles/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/roles/{id}`

`PATCH admin/roles/{id}`


<!-- END_f26dde20558dc643e224cc43dece4226 -->

<!-- START_fe440d0352457bb6a8a128df35351378 -->
## admin/roles/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/roles/{id}`


<!-- END_fe440d0352457bb6a8a128df35351378 -->

<!-- START_f6fe93a819260240ceb28a36fb903412 -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/categories/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/categories/order`


<!-- END_f6fe93a819260240ceb28a36fb903412 -->

<!-- START_cd3fa62a78fd13928be34bc6ad94228d -->
## admin/categories/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/categories/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/categories/action`


<!-- END_cd3fa62a78fd13928be34bc6ad94228d -->

<!-- START_4cc09f271de71024b055b45b283d916b -->
## admin/categories/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/categories/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/categories/order`


<!-- END_4cc09f271de71024b055b45b283d916b -->

<!-- START_38c925476b5efdcfa882167c1ed89903 -->
## admin/categories/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/categories/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/categories/{id}/restore`


<!-- END_38c925476b5efdcfa882167c1ed89903 -->

<!-- START_19f7514a18df9d0339724e46df712a44 -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/categories/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/categories/relation`


<!-- END_19f7514a18df9d0339724e46df712a44 -->

<!-- START_37017a97de77e630e2870c5cad41a06c -->
## admin/categories/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/categories/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/categories/remove`


<!-- END_37017a97de77e630e2870c5cad41a06c -->

<!-- START_9ad08f5d810e5c0f73cfd7c7179bcb08 -->
## admin/categories
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/categories`


<!-- END_9ad08f5d810e5c0f73cfd7c7179bcb08 -->

<!-- START_ce2c6d94fb61a4bb262563b97e5f7aa3 -->
## admin/categories/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/categories/create`


<!-- END_ce2c6d94fb61a4bb262563b97e5f7aa3 -->

<!-- START_1c760aaf6fa8dfeb072fd2bcda7b6502 -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/categories`


<!-- END_1c760aaf6fa8dfeb072fd2bcda7b6502 -->

<!-- START_0b809d5eb7c0a44ab050044daed48a08 -->
## admin/categories/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/categories/{id}`


<!-- END_0b809d5eb7c0a44ab050044daed48a08 -->

<!-- START_478100670bef0a10c62d1d4a2dfe9523 -->
## admin/categories/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/categories/{id}/edit`


<!-- END_478100670bef0a10c62d1d4a2dfe9523 -->

<!-- START_564341106d7e7249e03c9d6aa1a033ed -->
## admin/categories/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/categories/{id}`

`PATCH admin/categories/{id}`


<!-- END_564341106d7e7249e03c9d6aa1a033ed -->

<!-- START_3b11481f809f13f64d566b9586d928df -->
## admin/categories/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/categories/{id}`


<!-- END_3b11481f809f13f64d566b9586d928df -->

<!-- START_806e79f28f4e79d82482745b96823bcb -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/posts/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/posts/order`


<!-- END_806e79f28f4e79d82482745b96823bcb -->

<!-- START_7272370bfb7cf903ff8cb5cb3c48006b -->
## admin/posts/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/posts/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/posts/action`


<!-- END_7272370bfb7cf903ff8cb5cb3c48006b -->

<!-- START_55a12aecb37d36c12d9c4ef402409a49 -->
## admin/posts/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/posts/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/posts/order`


<!-- END_55a12aecb37d36c12d9c4ef402409a49 -->

<!-- START_b49dc999e16bd5893e8166904186c1d6 -->
## admin/posts/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/posts/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/posts/{id}/restore`


<!-- END_b49dc999e16bd5893e8166904186c1d6 -->

<!-- START_7ee0590d04a6bb82d83da94a45dca5ad -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/posts/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/posts/relation`


<!-- END_7ee0590d04a6bb82d83da94a45dca5ad -->

<!-- START_b7506c5f241a4b12efba78709947cbff -->
## admin/posts/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/posts/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/posts/remove`


<!-- END_b7506c5f241a4b12efba78709947cbff -->

<!-- START_a8ef477b5c348c0f4b24b4f9b3bc90ad -->
## admin/posts
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/posts`


<!-- END_a8ef477b5c348c0f4b24b4f9b3bc90ad -->

<!-- START_2e37c90d67a96143863923ff5859c905 -->
## admin/posts/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/posts/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/posts/create`


<!-- END_2e37c90d67a96143863923ff5859c905 -->

<!-- START_a67af5ec5245a6f896bb7a6169c39d6b -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/posts`


<!-- END_a67af5ec5245a6f896bb7a6169c39d6b -->

<!-- START_b141df4ed559deb94966037436088ebb -->
## admin/posts/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/posts/{id}`


<!-- END_b141df4ed559deb94966037436088ebb -->

<!-- START_0591fea2405e3fa8918e8fd626c0c450 -->
## admin/posts/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/posts/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/posts/{id}/edit`


<!-- END_0591fea2405e3fa8918e8fd626c0c450 -->

<!-- START_e3c2f4c5c26610041a0a68a56d115961 -->
## admin/posts/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/posts/{id}`

`PATCH admin/posts/{id}`


<!-- END_e3c2f4c5c26610041a0a68a56d115961 -->

<!-- START_2ee30c3ced66d90419deffc67aec4d9a -->
## admin/posts/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/posts/{id}`


<!-- END_2ee30c3ced66d90419deffc67aec4d9a -->

<!-- START_77d950f312fbca2be890889021efc719 -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/pages/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/pages/order`


<!-- END_77d950f312fbca2be890889021efc719 -->

<!-- START_989b2145f1ae3f6380707e06c954d67b -->
## admin/pages/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/pages/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/pages/action`


<!-- END_989b2145f1ae3f6380707e06c954d67b -->

<!-- START_053a328e886cb9830518007350d79514 -->
## admin/pages/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/pages/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/pages/order`


<!-- END_053a328e886cb9830518007350d79514 -->

<!-- START_1eb89aa90d3347fd0ad686cdc4f94184 -->
## admin/pages/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/pages/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/pages/{id}/restore`


<!-- END_1eb89aa90d3347fd0ad686cdc4f94184 -->

<!-- START_76330a12ad5c9cb20251863e2c4c3a2b -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/pages/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/pages/relation`


<!-- END_76330a12ad5c9cb20251863e2c4c3a2b -->

<!-- START_a773beac91e2e51193479b36a7fb71ba -->
## admin/pages/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/pages/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/pages/remove`


<!-- END_a773beac91e2e51193479b36a7fb71ba -->

<!-- START_2b8d58f02e5e057ffba2714632ecd581 -->
## admin/pages
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/pages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/pages`


<!-- END_2b8d58f02e5e057ffba2714632ecd581 -->

<!-- START_921e2da8f946b8f15f0970be0f47a7ef -->
## admin/pages/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/pages/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/pages/create`


<!-- END_921e2da8f946b8f15f0970be0f47a7ef -->

<!-- START_0ca67d533bf3350a25d26582ab610e2a -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/pages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/pages`


<!-- END_0ca67d533bf3350a25d26582ab610e2a -->

<!-- START_9aef9a0e869193c949a58b61801916ab -->
## admin/pages/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/pages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/pages/{id}`


<!-- END_9aef9a0e869193c949a58b61801916ab -->

<!-- START_15588927eb502056711d51f9e27f37db -->
## admin/pages/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/pages/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/pages/{id}/edit`


<!-- END_15588927eb502056711d51f9e27f37db -->

<!-- START_acf11c8b15e04d0669d7644e6e1eb46c -->
## admin/pages/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/pages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/pages/{id}`

`PATCH admin/pages/{id}`


<!-- END_acf11c8b15e04d0669d7644e6e1eb46c -->

<!-- START_904f242f7e727f39a66c41ab4ec67ee6 -->
## admin/pages/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/pages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/pages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/pages/{id}`


<!-- END_904f242f7e727f39a66c41ab4ec67ee6 -->

<!-- START_b134ea19d09669562a3f4785d9879d0e -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/books/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/books/order`


<!-- END_b134ea19d09669562a3f4785d9879d0e -->

<!-- START_75e6de5a265ab16cf117eb209d643997 -->
## admin/books/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/books/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/books/action`


<!-- END_75e6de5a265ab16cf117eb209d643997 -->

<!-- START_5868bfeca0eebfd5a8b8263cc642685c -->
## admin/books/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/books/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/books/order`


<!-- END_5868bfeca0eebfd5a8b8263cc642685c -->

<!-- START_4df37b85b9ff4cc58fd0c93e804364ee -->
## admin/books/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/books/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/books/{id}/restore`


<!-- END_4df37b85b9ff4cc58fd0c93e804364ee -->

<!-- START_a7898d35ee4a6c2e84eea9651c8fc7f6 -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/books/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/books/relation`


<!-- END_a7898d35ee4a6c2e84eea9651c8fc7f6 -->

<!-- START_a0073e3f26a31613ec7df8d5d3a0b171 -->
## admin/books/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/books/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/books/remove`


<!-- END_a0073e3f26a31613ec7df8d5d3a0b171 -->

<!-- START_11434c49d0563e59679103cf6126e296 -->
## admin/books
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/books`


<!-- END_11434c49d0563e59679103cf6126e296 -->

<!-- START_8985fc63e2f9666513183955b5cc0943 -->
## admin/books/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/books/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/books/create`


<!-- END_8985fc63e2f9666513183955b5cc0943 -->

<!-- START_dc89dee73d6ab43bf41e9341303c15fe -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/books`


<!-- END_dc89dee73d6ab43bf41e9341303c15fe -->

<!-- START_4f35def9985f8327c369d59f12177955 -->
## admin/books/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/books/{id}`


<!-- END_4f35def9985f8327c369d59f12177955 -->

<!-- START_ba42d80faef9439e7c4a737ab7558ceb -->
## admin/books/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/books/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/books/{id}/edit`


<!-- END_ba42d80faef9439e7c4a737ab7558ceb -->

<!-- START_3c088ff140c8584e9d6104974c0c54f2 -->
## admin/books/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/books/{id}`

`PATCH admin/books/{id}`


<!-- END_3c088ff140c8584e9d6104974c0c54f2 -->

<!-- START_4425df6bb5b9b59c47e93508616b3d37 -->
## admin/books/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/books/{id}`


<!-- END_4425df6bb5b9b59c47e93508616b3d37 -->

<!-- START_79467dfdbec0728e68611d851321e6e5 -->
## Order BREAD items.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/exchanges/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/exchanges/order`


<!-- END_79467dfdbec0728e68611d851321e6e5 -->

<!-- START_b0c0d96f1c61b9a820c21afd14d99d20 -->
## admin/exchanges/action
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/exchanges/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/exchanges/action`


<!-- END_b0c0d96f1c61b9a820c21afd14d99d20 -->

<!-- START_16e049f0a4708f08c30346ab28ae0345 -->
## admin/exchanges/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/exchanges/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/exchanges/order`


<!-- END_16e049f0a4708f08c30346ab28ae0345 -->

<!-- START_bdb127fb4117c043938ec9e265f5f6c9 -->
## admin/exchanges/{id}/restore
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/exchanges/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/exchanges/{id}/restore`


<!-- END_bdb127fb4117c043938ec9e265f5f6c9 -->

<!-- START_f53f31b8410ca8ebd647b4fa4da13d15 -->
## Get BREAD relations data.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/exchanges/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/exchanges/relation`


<!-- END_f53f31b8410ca8ebd647b4fa4da13d15 -->

<!-- START_339aab67ea91bfa51e67e84f1f53d204 -->
## admin/exchanges/remove
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/exchanges/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/exchanges/remove`


<!-- END_339aab67ea91bfa51e67e84f1f53d204 -->

<!-- START_ee2828c2ae38d78c352ec444956c4a77 -->
## admin/exchanges
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/exchanges" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/exchanges`


<!-- END_ee2828c2ae38d78c352ec444956c4a77 -->

<!-- START_b77e82c83e79df4a3c6ffca7f6feee7d -->
## admin/exchanges/create
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/exchanges/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/exchanges/create`


<!-- END_b77e82c83e79df4a3c6ffca7f6feee7d -->

<!-- START_5896c590ea6b7a509f7f67e65366bcbe -->
## POST BRE(A)D - Store data.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/exchanges" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/exchanges`


<!-- END_5896c590ea6b7a509f7f67e65366bcbe -->

<!-- START_085aacdece78f1db81bd563e1442e04c -->
## admin/exchanges/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/exchanges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/exchanges/{id}`


<!-- END_085aacdece78f1db81bd563e1442e04c -->

<!-- START_3b270cae4e53047f2019213e43c80c10 -->
## admin/exchanges/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/exchanges/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/exchanges/{id}/edit`


<!-- END_3b270cae4e53047f2019213e43c80c10 -->

<!-- START_12c603955aa93dcea51ed050371e4ad1 -->
## admin/exchanges/{id}
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/exchanges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/exchanges/{id}`

`PATCH admin/exchanges/{id}`


<!-- END_12c603955aa93dcea51ed050371e4ad1 -->

<!-- START_a78aced42b7a2c29344859faf7656e72 -->
## admin/exchanges/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/exchanges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/exchanges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/exchanges/{id}`


<!-- END_a78aced42b7a2c29344859faf7656e72 -->

<!-- START_ac435d45ee5407d2fdccbca88267dcbd -->
## admin/menus/{menu}/builder
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/menus/1/builder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1/builder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/menus/{menu}/builder`


<!-- END_ac435d45ee5407d2fdccbca88267dcbd -->

<!-- START_5856165be043e948232bc2f197b0793e -->
## admin/menus/{menu}/order
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/menus/1/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/{menu}/order`


<!-- END_5856165be043e948232bc2f197b0793e -->

<!-- START_4bfd90bde1365e61894a8540ac98a254 -->
## admin/menus/{menu}/item/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/menus/1/item/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1/item/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/menus/{menu}/item/{id}`


<!-- END_4bfd90bde1365e61894a8540ac98a254 -->

<!-- START_2be02546bd540da5155ba0e0dbf8c113 -->
## admin/menus/{menu}/item
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/menus/1/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/menus/{menu}/item`


<!-- END_2be02546bd540da5155ba0e0dbf8c113 -->

<!-- START_d21b9fa978200b00c673801429975965 -->
## admin/menus/{menu}/item
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/menus/1/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/menus/1/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/menus/{menu}/item`


<!-- END_d21b9fa978200b00c673801429975965 -->

<!-- START_56195363f828f4391ab90cab97490d06 -->
## admin/settings
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/settings`


<!-- END_56195363f828f4391ab90cab97490d06 -->

<!-- START_dbe0c0df09e7e235b9b689cb9fcae29d -->
## admin/settings
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/settings`


<!-- END_dbe0c0df09e7e235b9b689cb9fcae29d -->

<!-- START_1982c6133076517feb5c960d3a668ad3 -->
## admin/settings
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/settings`


<!-- END_1982c6133076517feb5c960d3a668ad3 -->

<!-- START_3e89dd8d1c7ef761119e2e4d1ffbf58d -->
## admin/settings/{id}
> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/settings/{id}`


<!-- END_3e89dd8d1c7ef761119e2e4d1ffbf58d -->

<!-- START_a92e1c75e6f1f7e5bfc7e8f9af7bfa8a -->
## admin/settings/{id}/move_up
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/settings/1/move_up" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/settings/1/move_up"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/settings/{id}/move_up`


<!-- END_a92e1c75e6f1f7e5bfc7e8f9af7bfa8a -->

<!-- START_966203d204987e656790f588ae269fab -->
## admin/settings/{id}/move_down
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/settings/1/move_down" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/settings/1/move_down"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/settings/{id}/move_down`


<!-- END_966203d204987e656790f588ae269fab -->

<!-- START_f2808f0fe68c171b71bbc620c53c9814 -->
## admin/settings/{id}/delete_value
> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/settings/1/delete_value" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/settings/1/delete_value"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/settings/{id}/delete_value`


<!-- END_f2808f0fe68c171b71bbc620c53c9814 -->

<!-- START_8535e162b521fec6ac2854e0b45b0865 -->
## admin/media
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/media`


<!-- END_8535e162b521fec6ac2854e0b45b0865 -->

<!-- START_b9bfa3e54948328fe9e640713ffbb8ac -->
## admin/media/files
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/media/files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media/files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/files`


<!-- END_b9bfa3e54948328fe9e640713ffbb8ac -->

<!-- START_732712e0f9183c0a58b257957c42a646 -->
## admin/media/new_folder
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/media/new_folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media/new_folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/new_folder`


<!-- END_732712e0f9183c0a58b257957c42a646 -->

<!-- START_f0238327580fef0d49dc4d3f252e2296 -->
## admin/media/delete_file_folder
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/media/delete_file_folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media/delete_file_folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/delete_file_folder`


<!-- END_f0238327580fef0d49dc4d3f252e2296 -->

<!-- START_0a9c8a4cfde0499377a310965635a256 -->
## admin/media/move_file
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/media/move_file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media/move_file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/move_file`


<!-- END_0a9c8a4cfde0499377a310965635a256 -->

<!-- START_549f6358b83f1994b056587ba821e84c -->
## admin/media/rename_file
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/media/rename_file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media/rename_file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/rename_file`


<!-- END_549f6358b83f1994b056587ba821e84c -->

<!-- START_db32070506fe9f0d1e93032c76683518 -->
## admin/media/upload
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/media/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/upload`


<!-- END_db32070506fe9f0d1e93032c76683518 -->

<!-- START_65f31e29983c7311498c341756abadbc -->
## admin/media/crop
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/media/crop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/media/crop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/media/crop`


<!-- END_65f31e29983c7311498c341756abadbc -->

<!-- START_6d01b2e192e7acf2bd66a19221e71e8b -->
## admin/bread
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/bread" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread`


<!-- END_6d01b2e192e7acf2bd66a19221e71e8b -->

<!-- START_fe750dce50adc03bce6ca5c32c18c555 -->
## Create BREAD.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/bread/1/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread/1/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread/{table}/create`


<!-- END_fe750dce50adc03bce6ca5c32c18c555 -->

<!-- START_80678edaf586a13044e3fc4f2efcf842 -->
## Store BREAD.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/bread" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/bread`


<!-- END_80678edaf586a13044e3fc4f2efcf842 -->

<!-- START_ee4aae2eec925b7340c9ccd28a961cdb -->
## Edit BREAD.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/bread/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread/{table}/edit`


<!-- END_ee4aae2eec925b7340c9ccd28a961cdb -->

<!-- START_95876b46e11e16b75bfd3ee0d5c1985d -->
## Update BREAD.

> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/bread/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/bread/{id}`


<!-- END_95876b46e11e16b75bfd3ee0d5c1985d -->

<!-- START_c2414cf3144da6f70492b6a4d7dd9a6d -->
## Delete BREAD.

> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/bread/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/bread/{id}`


<!-- END_c2414cf3144da6f70492b6a4d7dd9a6d -->

<!-- START_9a48d0467832bca5077b94b831a3824d -->
## Add Relationship.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/bread/relationship" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread/relationship"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/bread/relationship`


<!-- END_9a48d0467832bca5077b94b831a3824d -->

<!-- START_4120860e469ee34d870163fb232e4ef5 -->
## Delete Relationship.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/bread/delete_relationship/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/bread/delete_relationship/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/bread/delete_relationship/{id}`


<!-- END_4120860e469ee34d870163fb232e4ef5 -->

<!-- START_1ed560c8752fd0a83f683505d15c8174 -->
## admin/database
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/database" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/database"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database`


<!-- END_1ed560c8752fd0a83f683505d15c8174 -->

<!-- START_1864a4a7a1cb48a8bd933ae196e239d4 -->
## Create database table.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/database/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/database/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database/create`


<!-- END_1864a4a7a1cb48a8bd933ae196e239d4 -->

<!-- START_b260cb184bed3d655fdff4d3e7fad87b -->
## Store new database table.

> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/database" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/database"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/database`


<!-- END_b260cb184bed3d655fdff4d3e7fad87b -->

<!-- START_9c8aa3a06542eda4f36959ec8136a6a4 -->
## Show table.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/database/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/database/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database/{database}`


<!-- END_9c8aa3a06542eda4f36959ec8136a6a4 -->

<!-- START_758e5f292cb134d0fc806839e3802bd8 -->
## Edit database table.

> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/database/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/database/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/database/{database}/edit`


<!-- END_758e5f292cb134d0fc806839e3802bd8 -->

<!-- START_72b9abf607fd326a9041578c4d3a2eaa -->
## Update database table.

> Example request:

```bash
curl -X PUT \
    "http://book.local.com/admin/database/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/database/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/database/{database}`

`PATCH admin/database/{database}`


<!-- END_72b9abf607fd326a9041578c4d3a2eaa -->

<!-- START_32e253d3d95d0cd173cbe86372c32d7d -->
## Destroy table.

> Example request:

```bash
curl -X DELETE \
    "http://book.local.com/admin/database/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/database/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/database/{database}`


<!-- END_32e253d3d95d0cd173cbe86372c32d7d -->

<!-- START_5eb3e5d8b71d7f55cdba8200e55279ff -->
## admin/compass
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/compass" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/compass"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/compass`


<!-- END_5eb3e5d8b71d7f55cdba8200e55279ff -->

<!-- START_7c23f251af6f7d8aaa6a897cd2e34067 -->
## admin/compass
> Example request:

```bash
curl -X POST \
    "http://book.local.com/admin/compass" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/compass"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/compass`


<!-- END_7c23f251af6f7d8aaa6a897cd2e34067 -->

<!-- START_5f55435a12cc0885d93f73a26bae6d37 -->
## admin/voyager-assets
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/admin/voyager-assets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/admin/voyager-assets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/voyager-assets`


<!-- END_5f55435a12cc0885d93f73a26bae6d37 -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_7f67ac901ae91e72ee838b4e1d149f9f -->
## users/register
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET users/register`


<!-- END_7f67ac901ae91e72ee838b4e1d149f9f -->

<!-- START_305a9d0acbb029f9932509f53734c397 -->
## users/login
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET users/login`


<!-- END_305a9d0acbb029f9932509f53734c397 -->

<!-- START_116c0bb708e613d94c18f20f26a1eebe -->
## users/addbook
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/addbook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/addbook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET users/addbook`


<!-- END_116c0bb708e613d94c18f20f26a1eebe -->

<!-- START_dea83c4a4c6bb20f47b1fe0279b5fd48 -->
## users/book-detail/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/book-detail/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/book-detail/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET users/book-detail/{id}`


<!-- END_dea83c4a4c6bb20f47b1fe0279b5fd48 -->

<!-- START_f4b33f2475e4c1ab854f75e89d7812e2 -->
## users/profile/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/profile/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/profile/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET users/profile/{id}`


<!-- END_f4b33f2475e4c1ab854f75e89d7812e2 -->

<!-- START_7473085717b90abdc6cf626fcfb3fcc2 -->
## users/booklist/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/booklist/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/booklist/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET users/booklist/{id}`


<!-- END_7473085717b90abdc6cf626fcfb3fcc2 -->

<!-- START_ece4b4d0b8a77fa84fa0a995ea69757b -->
## users/requests-to
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/requests-to" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/requests-to"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET users/requests-to`


<!-- END_ece4b4d0b8a77fa84fa0a995ea69757b -->

<!-- START_7be8a85a4e2118711c53799d1d627029 -->
## users/requests-by
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/requests-by" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/requests-by"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET users/requests-by`


<!-- END_7be8a85a4e2118711c53799d1d627029 -->

<!-- START_2c442de39b30e9a9a7f8ac4205dff29d -->
## users/editbook/{id}
> Example request:

```bash
curl -X GET \
    -G "http://book.local.com/users/editbook/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/editbook/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET users/editbook/{id}`


<!-- END_2c442de39b30e9a9a7f8ac4205dff29d -->

<!-- START_7114718ce5b1959b33089bc2492a2d4c -->
## users/register
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/register`


<!-- END_7114718ce5b1959b33089bc2492a2d4c -->

<!-- START_361b5d3d1511f029cdec7c78ab8195be -->
## users/login
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/login`


<!-- END_361b5d3d1511f029cdec7c78ab8195be -->

<!-- START_be57cbb2fedf978d00a144a77ed3b897 -->
## users/logout
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/logout`


<!-- END_be57cbb2fedf978d00a144a77ed3b897 -->

<!-- START_a8359f6233b01ce8ed13766c69c7b10b -->
## users/addbook
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/addbook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/addbook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/addbook`


<!-- END_a8359f6233b01ce8ed13766c69c7b10b -->

<!-- START_d23eb3f3589ef04f593053a4171d6a42 -->
## users/exchangebook
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/exchangebook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/exchangebook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/exchangebook`


<!-- END_d23eb3f3589ef04f593053a4171d6a42 -->

<!-- START_becf931fff22bf5a594bf023df8e0c76 -->
## users/user-info
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/user-info" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/user-info"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/user-info`


<!-- END_becf931fff22bf5a594bf023df8e0c76 -->

<!-- START_336644d9f41363f0b243de51fdaeb2b2 -->
## users/request
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/request`


<!-- END_336644d9f41363f0b243de51fdaeb2b2 -->

<!-- START_65a332e19caa9f41967bb0da4299e11e -->
## users/editbook
> Example request:

```bash
curl -X POST \
    "http://book.local.com/users/editbook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://book.local.com/users/editbook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/editbook`


<!-- END_65a332e19caa9f41967bb0da4299e11e -->



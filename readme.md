# Wordpress Direct Call SMS

Plugin desenvolvido para realizar envio de sms através da API Direct Call.

### Envio

Utilize a função wp_sms().

```php
wp_sms($destiny, $message [, $type])
```

| Parâmetro | Descrição |
| ------ | ------ |
| $destiny | Número do telefone com DDI + DDD + Número (exemplo: 5541988776655) |
| $message | Mensagem de texto com no máximo 700 caracteres. |
| $type | Aceita os valores "texto" ou "voz", parametro opcional valor default = "texto" |


License
----
MIT

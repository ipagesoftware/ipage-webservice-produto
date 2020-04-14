# produto
Encontra os dados de um produto através do seu código de barras EAN utilizando Web Service da Ipage Software.

Como funciona um Web Service? Web Service é uma solução utilizada na integração de sistemas e na comunicação entre aplicações diferentes. Com esta tecnologia é possível que novas aplicações possam interagir com aquelas que já existem e que sistemas desenvolvidos em plataformas diferentes sejam compatíveis.

A que se destina este Web Service? Este Web Service tem por finalidade consultar o código de barras de um produto (EAN-13/14) de todo o Mundo(pelo menos é a proposta) de forma simples e descomplicada. As informações retornadas após a consulta ao Web Service em jSON. O Código de barras informado deve conter apenas números com no mínimo 13 (treze caracateres), em caso de valores inválidos passados ao Web Service o mesmo realizará automaticamente um filtro, deixando passar apenas números. Se mesmo assim o valor informado não satisfazer o critério uma mensagem de erro será reportada.

O formato a ser retornado pela consulta deve ser passado na URL junto com o código de barras e deve ser compatível com o esperado pelo Web Service. O valor válido retornado em JSON.

A chave de acesso ao Web Service é obrigatória e deve ser passada na URL junto com o código de barras. Caso não possua uma chave de acesso, solicite no nosso web site: https://rapidapi.com/diogenes/api/ipage_cep/details


Veja no site o exemplo antes de realizar o download: https://www.ipage.com.br/ws/exemplos/php/cep/produto.php

# Piadas usando API Joke

Este é um projeto simples que permite aos usuários inserir uma palavra-chave e receber uma piada relacionada a sua pesquisa.

## Como Funciona

1. **Página Inicial (`index.html`):**
   - Aqui você insere uma palavra-chave em inglês na caixa de texto.
   - Quando você clica no botão, isso te leva para a página `redirecionamento_api.php`.

2. **Lógica do Servidor (`redirecionamento_api.php`):**
   - Verifica se o formulário foi enviado corretamente.
   - Pega a palavra-chave que você digitou e solicita pra API de piadas.
   - Se uma piada é encontrada ou não, redireciona para a página de resultado.

3. **Página de Resultado (`resultado.html`):**
   - Exibe a piada recebida da API, se houver, Ou exibe uma mensagem informando que não há uma piada com essa palavra.
   - As piadas são em inglês, mas fique à vontade para traduzi-las.

## Tecnologias Utilizadas

- HTML: Estruturação da página da web.
- CSS: Estilização da página para uma aparência agradável.
- JavaScript: Manipulação do DOM para exibir a piada na página de resultado.
- PHP: Lógica do servidor para lidar com a solicitação do formulário e comunicação com a API de piadas.


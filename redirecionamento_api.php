<?php
    // Verifica se o formulário foi enviado
    if(isset($_POST['keyword'])) {
    // Obtém a palavra-chave do formulário e a prepara para uso em uma URL
        $keyword = urlencode($_POST['keyword']);
    // URL da JokeAPI com a palavra-chave "keyword"
         $api_url = "https://v2.jokeapi.dev/joke/Any?contains={$keyword}&type=single";
    
    // Faz uma requisição a API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

    // Processa a resposta da API
        $data = json_decode($response, true);

    // Verifica se a piada foi encontrada
        if ($data['error'] === false && isset($data['joke'])) {
        $piada = $data['joke'];
        } else {
    
    // Mensagem se não houver piada para a palavra-chave
        $piada = "Com essa palavra '{$keyword}' não conheço nada, tente pesquisando a palavra em inglês que vai dar certo.";
        }
}       else {

    // Mensagem se o formulário não for enviado corretamente
        $piada = "Oops! Parece que algo deu errado. Tente novamente.";
}
    // Redireciona para a página de resultado com a piada como informação na URL
    header("Location: resultado.html?piada=" . urlencode($piada));
    exit();
?>

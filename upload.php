<?php
// Cabeçalhos para permitir requisições de outros domínios (CORS)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Verifica se a imagem foi enviada com sucesso
if (isset($_POST['image'])) {
    // Nome do arquivo gerado com timestamp
    $file_name = 'imagem_' . time() . '.png';
    
    // Obtém a imagem em base64
    $image_data = $_POST['image'];
    // Remove o prefixo do base64
    $image_data = str_replace('data:image/png;base64,', '', $image_data);
    // Decodifica o base64 para dados binários
    $image_data = base64_decode($image_data);

    // Diretório de destino (no caso, a pasta DCIM no Android)
    $upload_dir = '/sdcard/DCIM/' . $file_name;

    // Salva a imagem no diretório
    if (file_put_contents($upload_dir, $image_data)) {
        // Atualiza a galeria do Android para exibir a nova imagem
        shell_exec("am broadcast -a android.intent.action.MEDIA_SCANNER_SCAN_FILE -d file://$upload_dir");

        // Mensagem de sucesso
        echo "Imagem enviada com sucesso para a galeria!";
    } else {
        // Mensagem de erro caso não consiga salvar a imagem
        echo "Erro ao enviar a imagem.";
    }
} else {
    // Caso a imagem não seja recebida
    echo "Nenhuma imagem recebida.";
}

/*
Notas:
1. O código PHP recebe uma imagem enviada via requisição POST com o formato base64.
2. Ele converte a string base64 para binário e salva a imagem na pasta /sdcard/DCIM no Android.
3. Após salvar, o script executa um comando para atualizar a galeria do Android com a nova imagem.
4. Esse código funciona apenas em um dispositivo Android que tenha permissões adequadas para gravar na pasta /sdcard/DCIM/.
5. Se for usado em outro ambiente (Linux, Windows, etc.), será necessário ajustar o caminho onde a imagem será salva.
6. O script PHP deve ser executado em um servidor web acessível por meio do navegador e do ngrok (se necessário para tunelamento).
*/

?>

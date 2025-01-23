# Fishingcam
# Ferramenta de Captura de Câmera com Ngrok

**Descrição**:  
Essa ferramenta permite capturar imagens diretamente da câmera de um dispositivo, sem a necessidade de aplicativos nativos, utilizando apenas PHP e HTML. Após a captura, as imagens são enviadas para o servidor e salvas diretamente na galeria ou armazenamento do dispositivo Android. A ferramenta também utiliza **ngrok** para criar um túnel seguro e acessível pela internet, permitindo que o servidor local seja acessado remotamente.

Ideal para aplicações que exigem captura de mídia de forma simples e rápida, com a vantagem de poder ser acessada de qualquer lugar, mesmo estando rodando em um ambiente local.

---

## **Recursos**:
- **Captura de Imagens**: Capture imagens diretamente pela câmera do dispositivo usando a API `getUserMedia`.
- **Envio Automático para o Dispositivo**: As imagens capturadas são enviadas automaticamente para o armazenamento do dispositivo, podendo ser salvas na galeria ou em diretórios específicos.
- **Compatibilidade com Android**: Funciona de forma otimizada para dispositivos Android, enviando a imagem diretamente para o diretório de mídia (como DCIM).
- **Acesso Remoto com Ngrok**: Utiliza ngrok para criar um túnel seguro, permitindo o acesso remoto à ferramenta de captura de qualquer lugar.
- **Simples e Eficiente**: A ferramenta não requer permissões complexas nem aplicativos adicionais.

---

## **Como usar**:

1. **Configure o servidor PHP**:
   - Baixe o repositório.
   - Abra o terminal e inicie o servidor PHP com o comando:
     ```bash
     php -S 0.0.0.0:8000
     ```

2. **Tunelamento com Ngrok**:
   - Inicie o túnel do ngrok para expor o servidor PHP na internet:
     ```bash
     ngrok http 8000
     ```
   - O ngrok gerará uma URL pública que você pode acessar de qualquer lugar.

3. **Acesse no navegador**:
   - Abra a URL fornecida pelo ngrok (por exemplo, `http://xxxxxxxx.ngrok.io`) em qualquer navegador para utilizar a interface de captura.

4. **Captura e Envio**:
   - Clique no botão de captura para tirar uma foto.
   - A imagem será automaticamente enviada para o dispositivo.

---

## **Contribuições**:
- **Fork** o repositório, crie sua branch, faça as alterações e envie um **pull request**.
- Problemas ou sugestões? Crie uma **issue**!

---

## **Licença**:
Este projeto é licenciado sob a **MIT License**.

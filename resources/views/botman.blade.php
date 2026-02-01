<!doctype html>
<html>
<head>
    <title>Customer Service Bot</title>
    <meta charset="UTF-8">
    <style>  
      #chatBotManFrame {
        pointer-events: none; /* Izinkan manipulasi CSS */
    }

    /* Manipulasi iframe header */
    #chatBotManFrame::after {
        content: "Customer Service";
        position: absolute;
        top: 10px;
        left: 20px;
        font-size: 20px;
        font-weight: bold;
        color: #fff;
    }  
    .botman-header::before {
        content: "Customer Service Bot"; /* Teks baru */
        font-size: 16px; /* Ukuran font */
        font-weight: bold; /* Tebal */
    }
    .botman-header .botman-title {
        display: none; /* Sembunyikan teks lama */
    }</style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
</head>
<body>
    <script>
        var botmanWidget = {
            title: 'Customer Servce Bot',
            aboutText:'Webappfix',  
            introMessage: 'Kami dari Customer Service CV Sumber Rejeki, Ada yang bisa dibantu? '
        };
        </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    
<script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/chat.js'></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var chatFrame = document.getElementById("chatBotManFrame");

        chatFrame.onload = function () {
            // Ambil iframe content
            var iframeDocument = chatFrame.contentDocument || chatFrame.contentWindow.document;

            // Ubah judul header di dalam iframe
            var headerTitle = iframeDocument.querySelector(".botman-header .botman-title");
            if (headerTitle) {
                headerTitle.innerText = "Customer Service";
            }
        };
    });
</script>
</body>
</html>
window.addEventListener("load", function() {
  window.wpcc.init({
    "colors": {
      "popup": {
        "background": "#0e1136",
        "text": "#ffffff",
        "border": "#fff"
      },
      "button": {
        "background": "#ef7f67",
        "text": "#ffffff"
      }
    },
    "position": "bottom",
    "content": {
      "href": window.location.hostname + "/privacy",
      "button": "Accetta",
      "message": "Il mio sito e i suoi partner utilizzano i cookie per fornire funzionalità e per migliorare la tua esperienza online, anche per l'analisi dell'utilizzo del sito, la misurazione del traffico e la gestione dei contenuti. Consulta la nostra Informativa sulla privacy per ulteriori informazioni sui cookie. Continuando a utilizzare i nostri siti e applicazioni, accetti il ​​nostro utilizzo dei cookie."
    },
    "padding": "large",
    "transparency": "5",
    "fontsize": "small"
  })
});

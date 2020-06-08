$('#setup-siri').click(function () {
    var recognition = new webkitSpeechRecognition();
    recognition.start();
    recognition.onresult = function(event) {
        var saidText = "";
        for (var i = event.resultIndex; i < event.results.length; i++) {
            if (event.results[i].isFinal) {
                saidText = event.results[i][0].transcript;
            } else {
                saidText += event.results[i][0].transcript;
            }
        }
        $('#you').text('You: '+ saidText);

            $.get( "api/get-data", {data: saidText} )
                .done(function( data ) {
                var msg = new SpeechSynthesisUtterance(data);
                window.speechSynthesis.speak(msg);
                $('#siri').text('Siri: '+ data);
            });
    };
 })
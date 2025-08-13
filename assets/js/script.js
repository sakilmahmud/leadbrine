jQuery(document).ready(function($) {
    var timer = null;
    $('#text-to-translate').on('keyup', function() {
        clearTimeout(timer);
        $('#translated-text').val('Typing...');
        timer = setTimeout(function() {
            var textToTranslate = $('#text-to-translate').val();
            var sourceLangCode = $('#source-language').val();
            var targetLangCode = $('#target-language').val();
            if (textToTranslate.length) {
                translateText(textToTranslate, sourceLangCode, targetLangCode);
            } else {
                $('#translated-text').val('');
            }
        }, 2000);
    });

    $('#translate-form').on('submit', function(e) {
        e.preventDefault();
        var textToTranslate = $('#text-to-translate').val();
        var sourceLangCode = $('#source-language').val();
        var targetLangCode = $('#target-language').val();
        if (textToTranslate.length) {
            translateText(textToTranslate, sourceLangCode, targetLangCode);
        } else {
            $('#translated-text').val('');
        }
    });

    function translateText(textToTranslate, sourceLangCode, targetLangCode) {
        $('#translate-btn').attr('disabled', 'disabled');
        $('#translated-text').val('Translating...');
        $.ajax({
            type: 'POST',
            url: my_ajax_object.ajax_url,
            data: {
                'action': 'translate_text',
                'text_to_translate': textToTranslate,
                'source_lang_code': sourceLangCode,
                'target_lang_code': targetLangCode
            },
            success: function(response) {
                $('#translate-btn').removeAttr('disabled');
                $('#translated-text').val(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#translate-btn').removeAttr('disabled');
                $('#translated-text').val('Translation failed: ' + errorThrown);
            }
        });
    }
});
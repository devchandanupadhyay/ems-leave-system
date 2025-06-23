jQuery(function (e) {
  'use strict';
  $(document).ready(function () {
    $('#editor').summernote({
      spellCheck: true,
      disableGrammar: false,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize', 'fontsizeunit']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link']],
        ['view', ['fullscreen', 'codeview', 'help', 'undo', 'redo']],
      ],
    });
  });
});

function createEditor(element) {
  $(element).summernote({
    spellCheck: true,
    disableGrammar: false,
    placeholder: 'Mail Body',
    tabsize: 2,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
      ['fontsize', ['fontsize', 'fontsizeunit']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link']],
      ['view', ['fullscreen', 'codeview', 'help', 'undo', 'redo']],
    ],
  });
}
function removeEditor(element) {
  if ($(element).summernote('isInitialized')) {
    $(element).summernote('destroy');
  }
}




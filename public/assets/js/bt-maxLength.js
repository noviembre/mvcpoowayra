(function($) {
  'use strict';
  $('#defaultconfig').maxlength({
      alwaysShow: true,
      threshold: 100,
      warningClass: "badge mt-1 badge-success",
      limitReachedClass: "badge mt-1 badge-danger",
      separator: ' de ',
      preText: 'Tienes ',
      postText: ' caracteres restantes.',
      validate: true
  });

  $('#defaultconfig-2').maxlength({
    alwaysShow: true,
    threshold: 100,
    warningClass: "badge mt-1 badge-success",
    limitReachedClass: "badge mt-1 badge-danger"
  });

    $('#correo').maxlength({
        alwaysShow: true,
        threshold: 15,
        warningClass: "badge mt-1 badge-success",
        limitReachedClass: "badge mt-1 badge-success"
    });

    $('#contrasena').maxlength({
        alwaysShow: true,
        threshold: 20,
        warningClass: "badge mt-1 badge-success",
        limitReachedClass: "badge mt-1 badge-danger"
    });

  $('#defaultconfig-3').maxlength({
    alwaysShow: true,
    threshold: 200,
    warningClass: "badge mt-1 badge-success",
    limitReachedClass: "badge mt-1 badge-danger",
    separator: ' de ',
    preText: 'Tienes ',
    postText: ' caracteres restantes.',
    validate: true
  });

  $('#maxlength-textarea').maxlength({
    alwaysShow: true,
    warningClass: "badge mt-1 badge-success",
    limitReachedClass: "badge mt-1 badge-danger"
  });
})(jQuery);
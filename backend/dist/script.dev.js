"use strict";

function showForm(formId) {
  document.querySelectorAll(".form-box").forEach(function (form) {
    return form.classList.remove("active");
  });
  document.getElementById(formId).classList.add("active");
}
//# sourceMappingURL=script.dev.js.map

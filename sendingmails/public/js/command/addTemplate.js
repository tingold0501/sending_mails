import { cmdSave, url, urlApi } from "../consts.js";
export default (editor, config) => {
    editor.Commands.add(cmdSave, {
        run() {
            var body = editor.getHtml();
            var css_text = editor.getCss();

            var variables = localStorage.getItem("variables");
            const xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (xml.readyState == 4 && xml.status == 200) {
                    console.log(xml.responseText);
                    editor.Modal.close();
                }
                else if (xml.readyState == 4 && xml.status == 400) {
                    console.error("Error:", xml.responseText);
                }
            };

            const formData = new FormData();
            formData.append("body", body);
            formData.append("css_text", css_text);
            if (variables == "") {
                formData.append("variables", "");
            }
            else {
                formData.append("variables", variables);
            }
            xml.open("POST", url + "email-template-store");
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            xml.setRequestHeader("X-CSRF-TOKEN", csrfToken);
console.log(variables);

            xml.send(formData);
            localStorage.removeItem("variables");
            
            // window.location.reload();
        },
        stop: () => { },
    });
};
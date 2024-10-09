import { cmdSave, url, urlApi } from "../consts.js";
export default (editor, config) => {
    editor.Commands.add(cmdSave, {
        run() {
            var body = editor.getHtml();
            var css_text = editor.getCss();
            var variable_keys = localStorage.getItem("variable_keys");

            var wrapper = editor.getWrapper();
            console.log(body);
            console.log(wrapper);
            
            

            const xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (xml.readyState == 4 && xml.status == 200) {
                    editor.Modal.close();
                } else if (xml.readyState == 4 && xml.status == 400) {
                    console.error("Error:", xml.responseText);
                }
            };

            const formData = new FormData();
            formData.append("body", body);
            formData.append("css_text", css_text);
            formData.append("variable_keys", variable_keys);

            xml.open("POST", url + "email-template-store");
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            xml.setRequestHeader("X-CSRF-TOKEN", csrfToken);

            xml.send(formData);
            localStorage.removeItem("keys");

            // window.location.reload();
        },
        stop: () => {},
    });
};
